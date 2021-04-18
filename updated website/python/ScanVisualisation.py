# Goal is to return a bar graph noting the number of scans over a period of time
# This is modified from Joseph's CreateUserVisualization.py


#### Imports####
import mysql.connector
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from io import BytesIO
import sys

Num_of_days = int(sys.argv[1])
####Database connection Details####
HOST = str(sys.argv[2])
DATABASE = str(sys.argv[3])
PORT = str(sys.argv[4])
USER = str(sys.argv[5])

if(len(sys.argv) == 6):
    PASSWORD = ""
else:
    PASSWORD = str(sys.argv[6])

#### Code####

# For getting dataframe from database
def getRows(mySql_table_query, numOfDays):
    connection = mysql.connector.connect(
        host=HOST, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # This is the SQL query used to query the database
    # mySql_table_query = """SELECT * FROM scans"""

    # Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, params=numOfDays, con=connection)

    if connection:
        cursor.close()
        connection.close()
    return df


# For creating a graph with an input of the number of days required to be incorporated into the graph
def createScanGraph(numberOfDays):
    days = {'dayNum':numberOfDays}
    sql = """
    SELECT 
	b.Days AS Date,
    COUNT(Scan) AS ScanCount
    FROM 
    (SELECT a.Days 
    FROM (
        SELECT curdate() - INTERVAL (a.a + (10 * b.a) + (100 * c.a)) DAY AS Days
        FROM       (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS a
        CROSS JOIN (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS b
        CROSS JOIN (SELECT 0 AS a UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) AS c
    ) a
    WHERE a.Days >= curdate() - INTERVAL %(dayNum)s DAY) b
    LEFT JOIN scans
        ON DATE(Scan) = b.Days
    GROUP by b.Days   
    ORDER BY b.Days;
    """
    ####Scan bar chart of no. scans per day####

    #  DataFrame fields:
    #      date from scan table
    #      number of occurrences (i.e. COUNT(Scan))
    #  The INTERVAL can be changed by inputting the number of days the graph includes
    barFrame = getRows(sql, days)

    # Renames the DATE(*) column into something which can be used to reference the column
    #barFrame.rename(columns={'DATE(Scan)': 'date'}, inplace=True)
    # Renames the COUNT(*) column into something which I can use to reference the column
    #barFrame.rename(columns={'COUNT(*)': 'scanCount'}, inplace=True)
    #  Creates a array with the length of the time period returned by the sql code
    y_pos = np.arange(len(barFrame.Date))
    #  Assigns the date names to the columns
    plt.yticks(y_pos, barFrame.Date)
    plt.ylabel("Number of scans")  # Names the y axis Number of scans
    plt.xlabel("Dates")  # Names the x axis Dates
    plt.title("Number of dispenses by day")  # Names the graph Dispenses per day
    
    # Creation of the bar chart
    plt.barh(  # creates a bar chart in plt. plt is like JFrame in Java
        y_pos,  # sets the names of the columns according to the date
        barFrame.ScanCount,  # data from the dataframe that each of the bars are sized after
    )
    plt.gcf().set_size_inches(9, 6)
    plt.savefig("python\\images\\scans.png", transparent=True)

createScanGraph(Num_of_days)