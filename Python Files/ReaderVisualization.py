# This is modified from Joseph's CreateUserVisualization.py
#### Imports####
import matplotlib.pyplot as plt
import mysql.connector
import numpy as np
import pandas as pd

#### Database connection Details####
HOST = "127.0.0.1"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""
PORT = "3306"


#### Code####

# For getting dataframe from database
def getRows(mySql_table_query):
    connection = mysql.connector.connect(
        host=HOST, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # This is the SQL query used to query the database
    # mySql_table_query = """SELECT * FROM scans"""

    # Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if connection:
        cursor.close()
        connection.close()
    return df


# User pie chart of no. times using each hand sanitiser####

#  DataFrame fields:
#      location from reader table
#      number of occurances (i.e. CCOUNT(*))

pieFrame = getRows("""
SELECT reader.location, COUNT(distinct(UserID))
FROM scans
RIGHT JOIN reader ON scans.ReaderID = reader.ReaderID
WHERE scans.ReaderID = reader.ReaderID
GROUP BY reader.location
ORDER BY reader.location
""")


# Used to format what values are displayed on each piechart segment
def func(pct, allvalues):
    absolute = int(pct / 100. * np.sum(allvalues))
    return "{:d} times\n({:.1f}%)".format(absolute, pct)


# Renames the COUNT(*) column into something which I can use to reference the column
pieFrame.rename(columns={'COUNT(distinct(UserID))': 'xNum'}, inplace=True)

# Creation of the pie chart
plt.pie(  # creates a pie chart in plt. plt is like JFrame in Java
    pieFrame.xNum,  # data from the dataframe that each of the segments are sized after
    labels=pieFrame.location,  # labels the name of each segment
    autopct=lambda pct: func(pct, pieFrame.xNum)  # essentially allows for both the percentage and
    # raw number to be displayed on the segments
)
plt.show()
