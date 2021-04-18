import math

import matplotlib.pyplot as plt
import mysql.connector
import numpy as np
import pandas as pd
from sklearn.cluster import KMeans

HOST = "localhost"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""
PORT = "3306"


def getRows(mySql_table_query):
    connection = mysql.connector.connect(
        host=HOST, port=PORT, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # This is the SQL query used to query the database
    # mySql_table_query = """SELECT * FROM scans"""

    # Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if connection.is_connected():
        cursor.execute("""
        SELECT DATE(Scan), COUNT(*)
        FROM scans
        WHERE DATE(Scan) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND DATE(Scan) <= DATE(NOW())
        GROUP BY DATE(Scan)
        ORDER BY DATE(Scan)
        """)
        # fetch all of the rows from the query
        data = cursor.fetchall()

        # print the rows
        for row in data:
            print(row[1])
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

scatterFrame.rename(columns={'COUNT(*)': 'scanCount'}, inplace=True)
scatterFrame.rename(columns={'DATE(Scan)': 'date'}, inplace=True)

scatterFrame['date'] = pd.to_datetime(scatterFrame['date']).values.astype(np.int64) // 10 ** 9
print("Start")
print(scatterFrame)
plt.scatter(scatterFrame.date, scatterFrame.scanCount, s=100)
plt.title("Scatter Frame")
plt.show()

dist_points_from_cluster_center = []
K = range(1, 10)
for no_of_clusters in K:
    k_model = KMeans(n_clusters=no_of_clusters)
    k_model.fit(scatterFrame)
    dist_points_from_cluster_center.append(k_model.inertia_)
plt.plot(K, dist_points_from_cluster_center)
plt.plot([K[0], K[8]], [dist_points_from_cluster_center[0], dist_points_from_cluster_center[8]], 'ro-')
plt.title("Points from cluster center")
plt.show()


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

optimumK = distance_of_points_from_line.index(max(distance_of_points_from_line)) + 1
print("Optimum value of k = " + str(optimumK))

centroids = kmeans.cluster_centers_
print(centroids)
plt.scatter(scatterFrame.date, scatterFrame.scanCount, c=kmeans.labels_.astype(float), s=50, alpha=0.5)
plt.scatter(centroids[:, 0], centroids[:, 1], c='red', s=50)
#plt.show()
"""
y_predicted = km.fit_predict(scatterFrame.xNum, scatterFrame.xNum)
"""

print("End")
