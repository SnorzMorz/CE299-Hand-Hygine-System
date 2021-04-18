##This is modified from Joseph's CreateUserVisualization.py
####Imports####
import math
import mysql.connector
from sklearn.cluster import KMeans
from mysql.connector import Error
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.datasets import make_blobs
import sys

####Database connection Details####
HOST = str(sys.argv[1])
DATABASE = str(sys.argv[2])
PORT = str(sys.argv[3])
USER = str(sys.argv[4])

if(len(sys.argv) == 5):
    PASSWORD = ""
else:
    PASSWORD = str(sys.argv[5])

####Code####

#For getting dataframe from database
def getRows(mySql_table_query):
    connection = mysql.connector.connect(
          host = HOST, port = PORT, database= DATABASE, user= USER, password= PASSWORD)
    cursor = connection.cursor()

    #This is the SQL query used to query the database
    #mySql_table_query = """SELECT * FROM scans"""

    #Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if (connection.is_connected()):
        cursor.close()
        connection.close()
    return df

####User pie chart of no. times using each hand sanitiser####

##  DataFrame fields:
##      readerID from reader table
##      number of occurances (i.e. CCOUNT(*))

scatterFrame = getRows("""
SELECT reader.ReaderID, COUNT(distinct(UserID))
FROM scans
RIGHT JOIN reader ON scans.ReaderID = reader.ReaderID
WHERE scans.ReaderID = reader.ReaderID
GROUP BY reader.ReaderID
ORDER BY reader.ReaderID
""")

pieFrame = getRows("""
SELECT reader.ReaderID, COUNT(distinct(UserID))
FROM scans
RIGHT JOIN reader ON scans.ReaderID = reader.ReaderID
WHERE scans.ReaderID = reader.ReaderID
GROUP BY reader.ReaderID
ORDER BY reader.ReaderID
""")


##Used to format what values are displayed on each piechart segment
def func(pct, allvalues):
    absolute = int(pct / 100.*np.sum(allvalues))
    return "{:d} times\n({:.1f}%)".format(absolute,pct)

##Renames the COUNT(*) column into something which I can use to reference the column

pieFrame.rename(columns = {'COUNT(distinct(UserID))':'xNum'}, inplace = True)
pieFrame.rename(columns = {'ReaderID':'yNum'}, inplace = True)
print("PieFrame")
print(pieFrame)
scatterFrame.rename(columns = {'COUNT(distinct(UserID))':'xNum'}, inplace = True)
scatterFrame.rename(columns = {'ReaderID':'date'}, inplace = True)
print(scatterFrame)
plt.scatter(scatterFrame.date, scatterFrame.xNum, s=100)
plt.close()

dist_points_from_cluster_center = []
K = range(1,10)
for no_of_clusters in K:
    k_model = KMeans(n_clusters = no_of_clusters)
    k_model.fit(scatterFrame)
    dist_points_from_cluster_center.append(k_model.inertia_)
plt.plot(K, dist_points_from_cluster_center)
plt.plot([K[0], K[8]],[dist_points_from_cluster_center[0], dist_points_from_cluster_center[8]], 'ro-')
plt.close()

def calc_distance(x1, y1, a, b, c):
    d = abs((a * x1 + b * y1 + c)) / (math.sqrt(a * a + b * b))
    return d

a = dist_points_from_cluster_center[0] - dist_points_from_cluster_center[8]
b = K[8] - K[0]
c1 = K[0] * dist_points_from_cluster_center[8]
c2 = K[8] * dist_points_from_cluster_center[0]
c = c1 - c2

distance_of_points_from_line = []
for k in range(9):
    distance_of_points_from_line.append(
        calc_distance(K[k], dist_points_from_cluster_center[k], a, b, c))
kmeans = KMeans(n_clusters=4).fit(scatterFrame)
plt.plot(K, dist_points_from_cluster_center)

optimumK = distance_of_points_from_line.index(max(distance_of_points_from_line))+1
print("Optimum value of k = " + str(optimumK))
plt.close()
kmeans = KMeans(n_clusters=optimumK).fit(scatterFrame)
centroids = kmeans.cluster_centers_

plt.scatter(scatterFrame.date, scatterFrame.xNum, c= kmeans.labels_.astype(float), s=50, alpha=0.5)
plt.title("Number of uses per dispenser over all-time")
plt.ylabel("No. of uses")
plt.xlabel("Dispenser ID")
plt.savefig('python\\images\\ReaderAIKMeans.png', transparent=True)
plt.close()

#plt.bar(pieFrame.yNum, pieFrame.xNum, color = 'green')
#plt.close()
