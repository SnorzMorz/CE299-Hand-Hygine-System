####Imports####
import mysql.connector
from mysql.connector import Error
from datetime import datetime, date, timedelta
import matplotlib.pyplot as plt
plt.style.use('ggplot')
import pandas.io.sql as psql
import random
import time
import pandas as pd

####Database connection Details####
HOST = "localhost"
DATABASE = "ce299"
USER = "root"
PASSWORD = ""


#For getting dataframe from database
def getRows(mySql_table_query):
    connection = mysql.connector.connect(
          host = HOST, database= DATABASE, user= USER, password= PASSWORD)
    cursor = connection.cursor()


    #Get Dataframe from sql query
    df = pd.read_sql(mySql_table_query, con=connection)

    if (connection.is_connected()):
        cursor.close()
        connection.close()

    return df

def DepartmentBar():
    df = getRows("""SELECT users.Department, COUNT(users.Department) FROM scans INNER JOIN users ON scans.UserID = users.UserID GROUP BY users.Department""")
    plt.bar(df['Department'], df['COUNT(users.Department)'], color = ['black', 'red', 'green', 'blue'])
    plt.xlabel("Department")
    plt.ylabel("Amount of People")
    plt.title("People per department")
    plt.gcf().set_size_inches(7, 4)
    plt.show()


today = date.today()
monthago = today - timedelta(30)
start_date = "'" + str(monthago) + "'"
end_date = "'" + str(today) + "'"

def DateDepartmentBar(start_date, end_date):
    query = """SELECT users.Department, COUNT(users.Department) FROM Scans 
    INNER JOIN users ON scans.UserID = users.UserID 
    WHERE DATE(Scan) BETWEEN """ + start_date + """ AND """ + end_date + """ GROUP BY users.Department"""

    df = getRows(query)

    plt.bar(df['Department'], df['COUNT(users.Department)'], color = ['black', 'red', 'green', 'blue'])
    plt.xlabel("Department")
    plt.ylabel("Times")
    plt.title("Dispenser uses between " + start_date + " and " + end_date + " by department")

    plt.gcf().set_size_inches(8, 4)  
    plt.show()
    
    
DepartmentBar()
DateDepartmentBar(start_date,end_date)