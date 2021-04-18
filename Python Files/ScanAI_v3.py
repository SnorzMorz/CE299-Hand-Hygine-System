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
print(scatterFrame)

scatterFrame.rename(columns = {'COUNT(*)':'scanCount'}, inplace = True)
scatterFrame.rename(columns = {'DATE(Scan)':'date'}, inplace = True)

scatterFrame['date'] = pd.to_datetime(scatterFrame['date']).values.astype(np.int64) // 10 ** 9
print("Start")
print(scatterFrame)
plt.scatter(scatterFrame.date, scatterFrame.scanCount, s=100)
plt.show()

kmeans = KMeans(n_clusters=2).fit(scatterFrame)
centroids = kmeans.cluster_centers_
print(centroids)
plt.scatter(scatterFrame.date, scatterFrame.scanCount, c= kmeans.labels_.astype(float), s=50, alpha=0.5)
plt.scatter(centroids[:, 0], centroids[:, 1], c='red', s=50)
plt.show()
"""
y_predicted = km.fit_predict(scatterFrame.xNum, scatterFrame.xNum)
"""

print("End")



