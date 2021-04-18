# Team Implementation Report
*This section should describe the technical details of your implementation.  The subheadings and italicised text below may be used to guide you.*

## Technical Diagrams
*Include a class diagram / circuit diagram, and/or any other relevant technical diagrams.*

### UML diagram of database
![UML](Final_Product/images/UML.PNG)

## Technical Description

## Database

The database was implemented using MYSQL and currently is hosted locally. It consists of 3 tables: users, reader, scans. Users stores the users of the dispensers, their names, RFID tag and their Department. Reader stores information about the dispensers, location, floor, when they were last refilled, and percentage full. Scans stores every usage of a dispenser, who sued it (UserID), which reader was used and at what time. The relationships between the tables are as follows: one user can have many scans, and one reader can have many scans.

### Machine Learning (Python)

Machine learning was used to gain information and identify any patterns in the data. This allows us to find any problem areas that we can target to increase the level of sanitation in the environment and therefore prevent the spread of the virus or bacteria. To do this, we used K-Means clustering algorithm. To display the data, a scatter diagram is used, and each cluster is colour coded accordingly. To retrieve the data from the database a SQL connection is established, and a query is executed with the results being stored in a data frame. This is the data that is used in the scatter diagram. To use K-Means, the K value (number of clusters) has to be selected. To do this the elbow method is used which provides the optimum value of K.

*This section should describe the software implementation in prose form.  Focus on how the code was designed and built.* 
*It should make a clear description that could be used by any future developers to maintain and extend your code, if necessary.*
*Describe important functions / classes / class hierarchies.*
*In this section, you should also wish to highlight any technical achievements your team is particularly proud of, including relevant code snippets.*

## Algorithms and Data Structures

### Machine Learning (Python)

K-Means clustering algorithm:
Used to cluster the data with similarities into groups.

![Clusters](Final_Product/images/ScatterDiagramClusters.png)

Elbow Method:
Function used to calculate the optimum K value by finding the number at the ‘elbow’ of the curve.

![Elbow Method](Final_Product/images/ElbowMethod.png)

SQL Method:
Function used to establish a connection with the MySQL database and store the results from the SQL query in a data frame.

![SQL Code](Final_Product/images/sqlcode.png)

*Describe datastructures of at least one component of your implementation.*
*Describe at least one algorithm used in your implementation.*
*In both cases, describe the space / time complexity of each.*

## Imported Libraries 

### Libraries Used In Python

SKLearn:
This library is used to apply K-Means clustering algorithm to the dataset.

MySQL.Connector:
This library is used to establish a connection with the MySQL database.

Pandas:
This library is used to create the data frame where the data extracted from the database is stored.

NumPy:
This library is used for mathematical calculations, in this instance it is used to convert the date attribute into seconds to allow the use of K-Means clustering algorithm.

Matplotlib:
This library is used to create the diagrams and charts that are essential in our project. 


*List any 3rd party libraries that were used and describe what functionality they provided.*

### Known Issues

*List any known issues (bugs) in your software, and describe workarounds if they exist.*

## Website

### "Emplyees" page search system

The emplyees page search system works by iterating through a given list of employees read from the database and checking wheter the user provided string matches any part of the list employee name substrings using the php function strpos. In addition the selected department is checked against he iterated employee and in case the employee matches the provided conditions and entry for them is generated on the page.

### Employee page

The employee page is generated based on the provided user id in the url. The page is given a list of employees drawn from the database and it generates a page based on the information matching the user id in the database. It also displays a graph matching the user id which is periodically updated by the server. The page also includes a script to refresh the page automatically to insure that the viewer is seeing the most recent version of the graph.

### Graphs updating features

To ensure all the graphs on the webpage are up to date and not vulnerable to overloading the website utilizes scripts to periodically refresh pages where graphs are places in the current version of the website this includes the "Employee" and "Statistics" page. To stop the browser from using cached images instead of the latest ones provided by the server the image files are checked for timestamps to guarantee the latest one is displayed.
To update the website graphs a PHP file called cronjob.php is executed which in turn calls all the python codes in charge of generating the graphs. This PHP file is executed on Windows operating systems with the bat file callcronjob.bat by providing that to a task in Task Scheduler that runs it over set periods of time. On Unix-like operating systems Cron would be used for this.
There is an XML file with an example task provided for importing into a Task Scheduler on Windows but the path of the executable files need to adjusted in the task for each new configuration.

### Adjusting graph timeframes

The timeframes that the graphs on the website display can be adjusted by making modifications to the TIMEFRAME variable in the cronjob.php file. Default the cronjob.php file sets each graph accepting timeframes to use 30 days.
