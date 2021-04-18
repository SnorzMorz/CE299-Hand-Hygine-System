# Product Demonstration Report

*This section should contain a brief description and demo of product you have built.*

* *Include screenshots (actual screenshots, not mock ups) of all of the facets of the product working.*
* *Link consecutive screenshots together with a brief narrative explaining how the product works, e.g. a sentence "Click on OK and it takes you to the next window", "On starting the app, the following window is shown".  This document should not take you a long time to create - it's just pasting photos and adding explanatory sentences between them, so that your MVP is adequately described.*
* *Make sure an image of each window of your software is included - so that a person who has not seen the actual demo of the product has a good idea of what your product currently does.*
* *If your product is a physical device (a hardware product) then you may replace all of the above screenshots by actual photos/vidoes where you feel it is appropriate.*
* *Make sure this section includes any functionality/features you are particularly proud of.*
* *Indicate clearly which parts of the functionality shown in the screenshots are currently incomplete, and what is likely to change in the final version.  For example if a graph displayed is currently based on static hard-coded data for the MVP, but in the future version the graph will dynamically change depending on fresh data, then point this out explicitly.*

# The website

The website is comprised of 5 pages, each of them showing a particularity of our project.
For the MVP we mainly focused on the general design, on connecting the web page to the database and on learning how to display graphs in the *Statistics* page.
The user can reach each of the pages by clicking on the navigation bar, and the icons for each page will change colors when the user hovers over them with the cursor. In the upper part of the website, centered, there will be an image of a logo.

To begin with, the first page seen by the user is *Our work*. This will be the place where we explain what our product does, its general use, its purpose and what kind of environments it is best suited for. As we are still at the beginning of our project and the product is not yet developed and refined, we will focus on this page later on. 

![Screenshot of the *Our Work* page](MVP/images/webpage-screenshots/Screenshot_OurWork.jpg)

The second page is *Employees*. There is a box with a search bar where the user can insert the name of an employee. If  the name is found in the database, a new page should appear showing the profile of the employee and also a graph displaying his/her hand hygiene history. We have not yet developed this feature further as we still work on the graphs and on the way in which the profile of each employee should look like alongside it.

![Screenshot of the *Employees* page](MVP/images/webpage-screenshots/Screenshot_Employees.jpg)

The third page is *Statistics*. We have focused more on this page in order to learn how to embed graphs in our website. We have a long way to go still, in order to display all the graphs changing dynamically based on new given data. At one point, we were able to use one of the graphs as a picture to insert it into the *Statistics*, but eventually we managed to insert it as a dynamic graph. It analyses how often the hand sanitiser is used during a period of 7 days and one of 30 days. Following that, we will focus on learning how to display all of them as they change dynamically and on improving the design of this page to make it as easy to use by a client as possible. 

Picure of our first graph used as a picture: 

![Screenshot of *Statistics* page](MVP/images/webpage-screenshots/Screenshot_Statistics.jpg)

Pictures of the graph dynamically changing when the user selects the period of time: 7 days and 30 days respectively.

![Screenshot of graph 7 days](MVP/images/webpage-screenshots/Screenshot_Graph7Days.jpg)

![Screenshot of graph 30 days](MVP/images/webpage-screenshots/Screenshot30Days.jpg)

The forth page is *Map*. We thought that this page should hold a graphical representation ,a map, showing the location of each hand sanitizer in the building in which we are supposed to implement these new products. We thought it would give a more concrete aspect to this project and it would be beneficial for both the potential visitors of this website as well as for the company to have these features illustrated as a bigger picture on the website. Furthermore, having a clear perspective of where the hand sanitizers actually are can help use understand their impact in relation with the graphs and with the working environment.

![Screenshot of *Map* page](MVP/images/webpage-screenshots/Screenshot_Map.jpg)

The last page is *Contact*. It will contain a contact form where visitors of the website can contact the company. This page holds little importance for the MVP, we thought there are other new things to learn and to develop which we chose to prioritize up until this point. We have not decided on the design of this page yet, but we will start work on it as soon as the main aspects of the project will be implemented successfully.

![Screenshot of *Contact* page](MVP/images/webpage-screenshots/Screenshot_Contact.jpg) 


# Python Code 

## Insert Data
![InputCode](MVP/images/python-images/InputCode.png)

This section of code asks the user for their RFID and reader ID. Although this is a manual input, when the actual hardware is used, the RFID reader will have its own ID and the RFID badge will emit an RFID signal which will allow for an automatic collection of the data into the database. As a proof of concept, the user will manually input this data, when it is being implemented in the intended environment this section of code can be easily substituted.


![UserInput](MVP/images/python-images/RFIDInput.png)

When the program starts, it requests the RFID and reader ID from the user. When a valid RFID and reader ID is inputted, a message is shown to let the user know that it was a successful scan. When using hardware, the user will be signalled by a green light.

![SQLCode](MVP/images/python-images/SQLCode.png)

Each RFID is linked to a user, because of this connection we can find the user ID and add it to the SQL query which inserts the data into the scans table alongisde the reader ID and time the scan took place.

## Reader Visualisation
![ReaderChart](MVP/images/python-images/ReaderChart.png)

One of the functionalities of this program is that it can filter the data by reader. This is a pie chart showing how many times each reader has been used. This type of diagram can be used to identify any areas that have lower usages than expected and intervene to improve results.

## Scan Visualisation
![ScanChart](MVP/images/python-images/ScanChart.png)

Another functionality of this program is that it can calculate the total number of scans in a day. This data is displayed on the bar graph shown above. This is a proof of concept as there is only 1 or 2 scans a day shown when in actuality there would be a much greater number of scans throughout the day.

## User Visualisation
![UserChart](MVP/images/python-images/UserChart.png)

An additional functionality of this program is it allows the administrator to view the location and frequency of the scans of a given user in the website. It is displayed in a pie chart as shown above.
Although we can gain understanding of the data by purely looking at these graphs and charts, we intend on using other forms of analysis such as supervised learning to gain information that can be actioned upon in order to increase hygiene in the workplace.


# The Database
We used Microsoft Azure SQL Database to store the database in the Cloud so everyone would have easy access to the schema.

## Making of the database
![making](https://drive.google.com/uc?export=view&id=1dqVZdgRRPUNjf37NxGqQqEWdHCdqa-6G)

## The Schema
The Schema consists of 3 tables reader, scans and users. Using Python, we generated sample data.
### Reader
![Reader](https://drive.google.com/uc?export=view&id=16w6rHGH7-WHWSCBgsEoAt-ffgrVr57DN)
### Scans
![Scans](https://drive.google.com/uc?export=view&id=1-4LogTOIVcHmswOOTxR249DyjKUwC44f)
### Users
![Users](https://drive.google.com/uc?export=view&id=1gZxbL3sRWNkFDKbEiRuy5to9N58N1s9r)

## Queries

We used multiple queries throughout the website and Python code to get data out of the database.

![Q1](https://drive.google.com/uc?export=view&id=189XWEDIsmih63BenaenemCHPqYIX20nl)

![Q2](https://drive.google.com/uc?export=view&id=1EBBjbuRp1huyYPfDrTGHx_9g1zEiBt1T)


