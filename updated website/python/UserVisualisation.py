#### Imports####
import matplotlib.pyplot as plt
import mysql.connector
import numpy as np
import pandas as pd
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

#### Code####

# For getting dataframe from database
def getRows(mySql_table_query):
    connection = mysql.connector.connect(
        host=HOST, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if connection:
        cursor.close()
        connection.close()
    return df


# User pie chart of no. times using each hand sanitiser#

def PieUserReader(userID):
    #  DataFrame fields:
    #      location from reader table
    #      number of occurrences (i.e. COUNT(*))

    SQL_query = """
    SELECT reader.location, COUNT(*)
    FROM scans
    RIGHT JOIN reader ON scans.ReaderID = reader.ReaderID
    WHERE scans.userID = """ + str(userID) + """ AND DATE(Scan) = DATE(NOW()) 
    GROUP BY reader.location
    ORDER BY reader.location
    """

    pieFrame = getRows(SQL_query)

    # Used to format what values are displayed on each pie chart segment
    def func(pct, allvalues):
        absolute = int(pct / 100. * np.sum(allvalues))
        return "{:d} times\n({:.1f}%)".format(absolute, pct)

    # Renames the COUNT(*) column into something which I can use to reference the column
    pieFrame.rename(columns={'COUNT(*)': 'xNum'}, inplace=True)

    # Creation of the pie chart
    plt.pie(  # creates a pie chart in plt. plt is like JFrame in Java
        pieFrame.xNum,  # data from the dataframe that each of the segments are sized after
        labels=pieFrame.location,  # labels the name of each segment
        autopct=lambda pct: func(pct, pieFrame.xNum)  # essentially allows for both the percentage and
        # raw number to be displayed on the segments
    )
    plt.title("Dispenses for user " + str(userID) + " per location today")
    plt.gcf().set_size_inches(8, 8)
    savefilename = "python\\images\\userImages\\user" + str(userID) +".png"
    plt.savefig(savefilename, transparent=True)
    plt.close()


def getUserIDs():
    SQL_query = """
    SELECT userID
    FROM users
    """
    IDFrame = getRows(SQL_query)
    
    return IDFrame

dataframe = getUserIDs()
#print(dataframe)

for userID in dataframe['userID']:
    print(userID)
    PieUserReader(userID)

