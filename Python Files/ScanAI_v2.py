import mysql.connector
from sklearn.cluster import KMeans
from mysql.connector import Error
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.datasets import make_blobs


HOST = "localhost"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""

def getRows(mySql_table_query):
    connection = mysql.connector.connect(
          host = HOST, port = "3307", database= DATABASE, user= USER, password= PASSWORD)
    cursor = connection.cursor()

    #This is the SQL query used to query the database
    #mySql_table_query = """SELECT * FROM scans"""

    #Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if (connection.is_connected()):
        cursor.execute("""
        SELECT DATE(Scan), COUNT(*)
        FROM scans
        WHERE DATE(Scan) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND DATE(Scan) <= DATE(NOW())
        GROUP BY DATE(Scan)
        ORDER BY DATE(Scan)
        """)
        # fetch all of the rows from the query
        data = cursor.fetchall ()
 
        # print the rows
        for row in data :
            print (row[1])
        cursor.close()
        connection.close()
    return df

scatterFrame = getRows("""
SELECT DATE(Scan), COUNT(*)
FROM scans
GROUP BY DATE(Scan)
ORDER BY DATE(Scan)
""")

scatterFrame.rename(columns = {'COUNT(*)':'scanCount'}, inplace = True)
scatterFrame.rename(columns = {'DATE(Scan)':'date'}, inplace = True)
print("Start")
print(scatterFrame)
plt.scatter(scatterFrame.date, scatterFrame.scanCount, s=100)
plt.show()

km = KMeans(n_cluster = 3).fit(df)
centroids = km.cluster_centers_
print(centroids)
"""
y_predicted = km.fit_predict(scatterFrame.xNum, scatterFrame.xNum)
"""
X, y = make_blobs(n_samples=300, centers=4, cluster_std=0.60, random_state=0)
plt.scatter(X[:,0], X[:,1])
plt.show()
print("End")



