####Imports####
import mysql.connector
from datetime import datetime
import random
import time
import pandas as pd
import pyodbc
import pandas.io.sql as psql


####Database connection Details####

HOST = "localhost"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""
PORT = "3306"


####Code####

##This procedure is used to output the rows of the "scans" table
def showRows():
    # This forms a connection to the database
    connection = mysql.connector.connect(host=HOST, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # This is the SQL query used to query the database
    mySql_table_query = """SELECT * FROM scans"""
    cursor.execute(mySql_table_query)

    # This allows the result of the query to be outputted in the Python IDE
    for x in cursor:
        print(x)
    

    # This closes the connection so the connection to the database is not
    #   opened longer than it needs to be
    if (connection.is_connected()):
        cursor.close()
        connection.close()


##This function is used to insert a new row in the "scans" table
##  Parameters:
##      RFID - This will be the RFID tag
##      ReaderID - This will be the ID of the hand-sanitiser
##      Scan - This will be the time of the event
def insertVariablesIntoTable(RFID, ReaderID, Scan):
    connection = mysql.connector.connect(host=HOST, database=DATABASE, user=USER, password=PASSWORD)
    cursor = connection.cursor()

    # This tries to add a new row into the scan table
    # If the action fails to do so, it will come out with an exception
    try:
        # Searches for the user ID that corresponds to the RFID input
        mySql_select_query = """SELECT UserID FROM users WHERE RFID = %s""" % (RFID)
        cursor.execute(mySql_select_query)
        result = cursor.fetchall()
        # Checks if RFID is stored in database
        if not result:
            print("User not recognised!")
        else:
            # Stores corresponding user ID value in a variable
            UserID = result[0][0]
            mySql_insert_query = """INSERT INTO scans (UserID, ReaderID, Scan) 
                                    VALUES (%s, %s, %s) """

            recordTuple = (UserID, ReaderID, Scan)
            cursor.execute(mySql_insert_query, recordTuple)

            # This line is important so that the changes made to the database is permenant
            connection.commit()
            print("Record inserted successfully into Scans table")

    # This outputs the error in a easier to read format
    except mysql.connector.Error as error:
        print("Failed to insert into MySQL table {}".format(error))

    # This closes the connection so the connection to the database is not
    #   opened longer than it needs to be regardless of the success of the query
    finally:
        if (connection.is_connected()):
            cursor.close()
            connection.close()
            
#Get random date between *start* and *end* in format with  *proportion* of the interval
def str_time_prop(start, end, format, prop):

    stime = time.mktime(time.strptime(start, format))
    etime = time.mktime(time.strptime(end, format))

    ptime = stime + prop * (etime - stime)

    return time.strftime(format, time.localtime(ptime))
           
           
def random_date(start, end, prop):
    return str_time_prop(start, end, '%Y-%m-%d %H:%M:%S', prop)
            
#For inserting random row into Scans
def randomScan():
    UserID = random.randint(1111112345, 1111112359)
    ReaderID = random.randint(1, 17)
    date = random_date("2021-2-1 8:00:00", "2021-3-1 18:00:00", random.random())
    insertVariablesIntoTable(int(UserID),int(ReaderID),date)


####User Input####

for i in range(100):
    randomScan();
    
