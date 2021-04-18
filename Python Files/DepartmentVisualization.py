#Goal is to return a bar graph noting the number of scans over a period of time
##This is modified from Joseph's CreateUserVisualization.py

####Imports####
import mysql.connector
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

####Database connection Details####
HOST = "127.0.0.1"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""
PORT = "3306"

####Code####
Num_of_days = 300
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

#For creating a graph with an input of the number of days required to be incorporated into the graph
def createDepartmentGraph(numberOfDays):
    days = {'dayNum':numberOfDays}
    sql = """
    SELECT users.department, COUNT(*) 
    FROM scans 
    LEFT JOIN users ON scans.UserID = users.UserID
    WHERE DATE(Scan) > DATE_SUB(NOW(), INTERVAL %(dayNum)s DAY) AND DATE(Scan) <= DATE(NOW()) 
    GROUP BY users.department 
    ORDER BY users.department"""
    ####Department pie chart of number of scans per input time period####

    ##  DataFrame fields:
    ##      department from users table
    ##      number of occurances (i.e. CCOUNT(*)) per input time frame
    ##  The INTERVAL can be changed by inputting the number of days the graph includes
    pieFrame = getRows(sql, days)

    ##  Assigns the date names to the columns
    ##Used to format what values are displayed on each piechart segment
    def func(pct, allvalues): 
        absolute = int(pct / 100.*np.sum(allvalues)) 
        return "{:d} times\n({:.1f}%)".format(absolute,pct)

    ##Renames the COUNT(*) column into something which I can use to reference the column
    pieFrame.rename(columns = {'COUNT(*)':'xNum'}, inplace = True)
    titleStr = "Scans per department per " + str(numberOfDays) + " days"
    plt.title(titleStr)
    ##Creation of the pie chart
    plt.pie(    #creates a pie chart in plt. plt is like JFrame in Java
        pieFrame.xNum,  #data from the dataframe that each of the segments are sized after
        labels=pieFrame.department,   #labels the name of each segment
        autopct = lambda pct: func(pct, pieFrame.xNum)  #essentially allows for both the percentage and
                                                        #raw number to be displayed on the segments 
        )
    plt.show()

createDepartmentGraph(Num_of_days)
