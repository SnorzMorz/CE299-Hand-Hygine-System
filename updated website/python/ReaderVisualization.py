# This is modified from Joseph's CreateUserVisualization.py
#### Imports####
import matplotlib.pyplot as plt
import mysql.connector
import numpy as np
import pandas as pd
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

#For getting dataframe from database
def getRows(mySql_table_query, numOfDays):
    connection = mysql.connector.connect(
          host = HOST, database= DATABASE, user= USER, password= PASSWORD)
    cursor = connection.cursor()

    #This is the SQL query used to query the database
    #mySql_table_query = """SELECT * FROM scans"""

    #Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, params = numOfDays , con=connection)

    if (connection.is_connected()):
        cursor.close()
        connection.close()
    return df


# Reader pie chart of no. times using each hand sanitiser####
def createReaderGraph(numberOfDays):
    #  DataFrame fields:
    #      location from reader table
    #      number of occurances (i.e. COUNT(*))
    days = {'dayNum':numberOfDays}
    sql = """
    SELECT reader.location, COUNT(*)
    FROM scans
    LEFT JOIN reader ON scans.ReaderID = reader.ReaderID
    WHERE DATE(Scan) > DATE_SUB(NOW(), INTERVAL %(dayNum)s DAY) AND DATE(Scan) <= DATE(NOW())
    GROUP BY reader.location
    ORDER BY reader.location
    """

    pieFrame = getRows(sql, days)

    ##  Assigns the date names to the columns
    ##Used to format what values are displayed on each piechart segment
    def func(pct, allvalues): 
        absolute = int(pct / 100.*np.sum(allvalues)) 
        return "{:d} times\n({:.1f}%)".format(absolute,pct)
    
    # Renames the COUNT(*) column into something which can be used to reference the column
    pieFrame.rename(columns={'COUNT(*)': 'xNum'}, inplace=True)
    plt.xlabel("Scans")
    # Creation of the barh chart
    plt.barh(  # creates a barh chart in plt. plt is like JFrame in Java
        
        pieFrame.location,  # labels the name of each bar
        pieFrame.xNum
        #lambda pct: func(pct, ) # data from the dataframe that each of the bars are sized after
    )
    plt.title("Number of dispenses per dispenser over " + str(numberOfDays) + " days")
    plt.gcf().set_size_inches(14, 6)
    plt.savefig("python\\images\\readers.png", transparent=True)
    plt.close()

createReaderGraph(Num_of_days)