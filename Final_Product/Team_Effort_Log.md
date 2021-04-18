# Team Effort Log

> ## Bradley Gichangi

### Sprint 7 (University Week 10-11)

In this sprint, I started off by researching ways to implement K-Means clustering algorithm in our code using python. Using machine learning allows us to gain information from the data by identifying patterns, therefore, giving us a target to improve our system. [1]

### Sprint 8 (University Week 17-18)

After researching how to implement K-Means, I started the coding in python. To do this I used the SKLearn library which allows the importation of K-Means. At this point, I had to manually choose the K value to test if the code was clustering appropriately. [2]

After I had written this code, there were changes made to the database and I had to alter the code to suit these alterations. [3]

### Sprint 9 (University Week 19-22)

One of the problems with my code was that the K number was chosen manually. The problem with this is, when the data in the database changes the clusters don’t change to suit any changes. To combat this, I used the elbow method which allows us to identify the optimum value of K automatically. [4]

To display the clusters, I created a scatter diagram using matplotlib. The data points in the diagram are colour-coded to distinguish which cluster each one belongs to. [5]

The website cannot directly import the graphs from the python code, so I stored each graph as a PNG file, and then the file was imported into the website. Every time the page is ran the python code is ran, which overwrites the PNG file to update from any changes in the database which keeps everything consistent. [6]

We then ran into problems with the python working in tandem with the website, so I researched possible implementation of K-means using JavaScript instead. Afterwards, we managed to fix this issue and the change in programming language wasn’t necessary. [7]

### References

[1] – <https://cseejira.essex.ac.uk/browse/A299114-50>
[2] – <https://cseejira.essex.ac.uk/browse/A299114-99>
[3] – <https://cseejira.essex.ac.uk/browse/A299114-105>
[4] – <https://cseejira.essex.ac.uk/browse/A299114-107>
[5] – <https://cseejira.essex.ac.uk/browse/A299114-108>
[6] – <https://cseejira.essex.ac.uk/browse/A299114-110>
[7] – <https://cseejira.essex.ac.uk/browse/A299114-112>

> ## Ioana-Cristina Igret

### Sprint 7 (University Week 10-11)

After the presentation of the minimal viable product, we decided on what should we focus on during the Christmas Break. I started learning how to visualize the python plots on the Statistics page of the website.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-98?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

### Sprint 8 (University Week 17- 18)

Issue 1: I have worked on updating the Map page of the website with a gallery of images of where the hand sanitizers were placed throughout the building. At first I thought it would be nice to add the graph that shows the usage of the sanitizers by department to this page next to the images of the building, but in the end all graphs were added to the Statistics page of the website.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-101?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Issue 2: I created a logo for the website. It adds together all the elements of our product in a simplified design: a hand and a drop of liquid to show the action of the user together with the product and two words “Ideal Hygiene” inside the drop. The first is a reference to the RFID and the software implementations that come with the scanning of an RFID by the hand sanitizer and the second refers to the whole purpose of the project and a very important aspect of our lives, especially in the context of Covid-19 pandemic.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-102?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

### Sprint 9 (University Week 19-22)

Issue 1: I started implementing flask library in order to host the graphs into the website. I first tried with an example of a graph just to learn how to use it and then connect to the database and get the actual graphs my other teammates designed. There was the benefit of the graph showing onto the website and changing dynamically, but only after the python code of the graph was running.
Another version of using the flask library which hosted the graph on the website was when the showing of the graph as a png image was triggered by the push of a button, but I haven’t managed to make that graph change dynamically since it lacked the running of the python code before the button was pushed.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-103?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Issue 2: I started plotting graphs using chart.js, working with JavaScript, PHP and querying the database to show the values I desired as graphs. I never used JavaScript before, and it was a slow process of learning. I began to think that I would not have enough time to learn how to get the graphs onto the website in a proper way. Luckily, my teammate Mark made some improvements to my first version of the code which used flask and he managed to get the graphs onto the website.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-109?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Issue 3: First, I developed the index.php page of our website which contains a short description of our product.

Issue 4: Second, I designed the contact form in the contact.php page. I have created a table called form in our database to host the information coming from the website when a user sends us a message. After I have designed the contact form on our website using HTML and CSS, I connected it to the database using PHP.

Issue 5: I have rearranged the display of the graphs visualized on Statistics page of our website.

Issue 6: I began writing in the Effort Log, Testing and Product Context sections in the Final Report.

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-114?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-124?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-123?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

Jira link to issue: <https://cseejira.essex.ac.uk/browse/A299114-125?jql=project%20%3D%20A299114%20AND%20assignee%20%3D%20ii19403>

### Sprint 10 (University week 23)

I finished working on my parts of Effort Log and Product Testing of the Website in the Final Report.

Jira link to issue: <https://cseejira.essex.ac.uk/projects/A299114/issues/A299114-134?filter=allopenissues> 

> ## Andris Vaivods

### Sprint 7 (University Week 10-11)

Issue 1: In Sprint 7, I worked on mostly two things. Since we wanted to add a Machine Learning element to our website for our final product, I thought that Python would be great for this. I researched the Kmeans algorithm as well as how to implement it in Python.

Link - <https://cseejira.essex.ac.uk/browse/A299114-48>

Issue 2: I also continued working on the database by adding more sample data, as this would be necessary to test the Kmeans algorithm. To do this, I used the functions I wrote in a previous Sprint that generate random data and insert it into the table Scan in the database. To make the data more realistic, I skewed the data towards specific dates and users.

Link - <https://cseejira.essex.ac.uk/browse/A299114-89>

Link - <https://cseejira.essex.ac.uk/browse/A299114-90>

### Sprint 8 (University Week 17- 18)

Issue 1: In Sprint 8, I continued working on the database. We were planning to add a visual map element to our website to see the dispenser usage heatmap. I thought it would be a good idea to add some more fields in the database to support this, such as the floor and more information about the location.

Link - <https://cseejira.essex.ac.uk/browse/A299114-106>

### Sprint 9 (University Week 19-22)

Issue 1: In Sprint 8, I continued working on the database. We were planning to add a visual map element to our website to see the dispenser usage heatmap. I thought it would be good to add some more fields in the database to support this, such as the floor and more information about the location.

Link - <https://cseejira.essex.ac.uk/browse/A299114-108>

Issue 2: Since we were trying to figure out ways to add the python graphs to the website and make them update regularly, I researched Flask and how we might implement that using it. We successfully did it but only by using python and HTML, but sadly most of our website was also using PHP, which meant that in the end product, we didn't use Flask and instead went for a PHP and python integration.

Link - <https://cseejira.essex.ac.uk/browse/A299114-113>

Issue 3: I also started working on the Final Product documentation, specifically Team Effort Log and Project Management Log.

Link - <https://cseejira.essex.ac.uk/browse/A299114-116>

Link - <https://cseejira.essex.ac.uk/browse/A299114-131>

### Sprint 10 (University week 23)

I finished working on the Team Effort Log, Project Managment Log and the Product Demonstration part.

Link - <https://cseejira.essex.ac.uk/browse/A299114-115>

> ## Mark Robert Vink

### Sprint 7 (University Week 10-11)

Issue 1: I created the inital version of the python code to visualize the chart for displaying the number of dispenses over a certain time period.

Link - <https://cseejira.essex.ac.uk/browse/A299114-100>

### Sprint 8 (University Week 17-18)

Issue 1: I improved the previously created python code by getting the chart to display dates with missing scans with empty bars instead of leaving them out of the chart entierly. This took a long time to figure out due to the difficulty in finding a compatible method that would work with our project. In the end I ended up trying about 4 different methods of which I only mangaged to get one working as I intended. There were also design improvements to the graph so the displayed chart would be more easily readable

Link - <https://cseejira.essex.ac.uk/browse/A299114-88>

Issue 2: The following module was never completed but I researched and tried to develop an applet to enable editing, updating and displaying of a heatmap of the building’s floors where the dispensers have been set up so that the hygiene rating of the different rooms could be displayed on the map with different gradients of colour. To properly implement this would however require advanced information that we were unable to collect due to lacking the ability to develop advanced machine vision and AI systems to track hand hygiene opportunities to give accurate data for the values used to determine the hygiene level. There are also alternative methods we came up with which could determine the hygiene level severity in the room but the information required for those might not be available to all organizations either and the calculated level would not actually carry any real meaning as it is not recognized by any health organization. It would involve getting the active hours for each user, their schedule, location and getting their supposed number of required hand washes per hour for which a calculation does not really exist and dividing that by their hand washes within the start of their active hours. The first problem with such a solution would be that a static number for the required number of hand washes does not exist and that such a number is unreliable as it would, in reality, be constantly changing according to the related work and conditions plus as mentioned in the above proper method the collecting of this information automatically was currently impossible with our abilities and resources. The second would be the already above-mentioned problem that this system is not recognized by any health organization and as such not a valid method for tracking hand hygiene in a critical work environment.

Link- <https://cseejira.essex.ac.uk/browse/A299114-104>

### Sprint 9 (University Week 19-22)

Issue 1: I implemented flex design for the website and created a functional css file to add universal stylizing to the website.

Link - <https://cseejira.essex.ac.uk/browse/A299114-126>

Issue 2: I merged the multiople versions we had of the website into one because of problems some had with uploading to git   so a manual merge in parts was needed to unify the multiple versions. In addition files deemed uneccesary from previous tests were removed due to them not ending up being used in the end.

Link - <https://cseejira.essex.ac.uk/browse/A299114-127>

Issue 3: I added functionality to the website employees page to allow the current website user to search for employees and filter the search results by the department. This was done by creating a basic php code for generating html pages according to the input search parameters.

Link - <https://cseejira.essex.ac.uk/browse/A299114-128>

Issue 4: I made a php code to generate a page for each employee based on their information in the database and display their daily hygiene performance information via a graph.

Link - <https://cseejira.essex.ac.uk/browse/A299114-129>

Issue 5: Cronjob code to run the python code to generate new graph images upon the server running it plus bug fixes and minor design features on the website. Adjusting of the graph codes to reduce information overlap.

Link - <https://cseejira.essex.ac.uk/browse/A299114-138>

### Sprint 10 (University Week 23)

Issue 1: I worked on the final product demonstration and implementation report.

Link - <https://cseejira.essex.ac.uk/browse/A299114-136>
Link - <https://cseejira.essex.ac.uk/browse/A299114-140>

Issue 2: Changed python codes to take inputs needed for connecting to the database from the command line instead of having predefined values for each separately. They can now be set to be same for every one of them from the cronjob.php file.

Link - <https://cseejira.essex.ac.uk/browse/A299114-141>

> ## Yi Jing Low

### Sprint 7 (University Week 10-11)

Issue 1: Before we have to present MVP product, I have go through some libraries to find out way to deploy a responsive and interactive graph on the website. By using the data from database, I am able to deploy a neat and great graph with the Chart.js library. The graph ended up working perfectly on the website and I continue to deploy it to become better.

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-68)

Issue 2 (Bug): Before I continue to develop the graph, there is a bug that always change the graph by just hovering the graph. The graph suppose to provide more information when the user hover over the specific location of the graph. I have checked the whole process again and restucture the process to remove. 

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-83)

### Sprint 8 (University Week 17-18)

Issue 1: During the Christmas break, I have spend time on restructure the website project. After our MVP presentation, we have switch the project's direction more on statistics and machine learning on data that collect from users who used sanitizer. This is an unexpected changes and to our project. In order to make sure the actual work is going on the same direction, the changes is necessary for the better product. 

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-63)

### Sprint 9 (University Week 19-22)

Issue 1: As the product is relaying more and more on data retrieve, the way I retrieve data from database and the speed of retrieve really matter a lot. In order to make sure consistent data update without refresh the page for more effecient data retrieve, the website have to implement AJAX system on the website. This enable the website to retrieve data on a more faster speed by just getting data from the database without asking applicatio server to refresh the page. 

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-47)

Issue 2: Statistics graph can be display for every user, by department and by employees name. In most company, there might be few department in the company but they will have 100, 10000 or more employees. For department, it might be useful by getting all the department from the database and display as drop-down menu for user to select as filter for the statistics graph. However, it will be best if user can search specific name or letter and display any name of the employees that match the keyword. This filter will enable the user to look at the usage of specific employess.

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-71)

Issue 3: In the beginning of this project, I have choose to use Azure services for hosting our website and realtime database. Basically, Essex email enable us to use their services for free in a time limit as trial. However, realtime database started to charge me for the usage of their services. This has affect our product as we didn't intend to use any paid-to-use services. After few discussion, I have ended the realtime database and switch to local database. This also affect the website as no more realtime database can support data to the website. I have tried to look for alternative way to make the database and website able to host online but our group ended up choosing to use local for the rest of our product.

### Sprint 10 (University Week 23)

Issue 1: As we wrap up our product, I have choose to help on the Product Context Report. 

[Click here for Jira link](https://cseejira.essex.ac.uk/browse/A299114-120)

> ## Joseph Nickson

### Sprint 7 (University Week 10-11)

In this sprint, I started off by researching ways to improve the interactivity between the python graphs and the website. This was a part of the effort to add the python graphs to the website [1]

### Sprint 8 (University Week 17-18)

This sprint I spent assistiting Cristina with the learning how to implement the graph plots into the website, examining various techniques from the python side of the code. [2]

I also assisted Bradley with the K-means such as working on ways to clean up data such as converting datetime into enoch time during this sprint (This I started working on this issue in this sprint but I forgot to make the issue and it was put into Jira in sprint 9) [3]

### Sprint 9 (University Week 19-22)

Continuing the previous issue I spent time, cleaning up the data that would allow for the various graphs and visualisations to function properly [3]


### References

[1] – <https://cseejira.essex.ac.uk/browse/A299114-91>
[2] – <https://cseejira.essex.ac.uk/browse/A299114-97>
[3] – <https://cseejira.essex.ac.uk/browse/A299114-111>

> ## Chun Hang Lim

### Sprint 7 (University Week 10-11)
Admins‘ view
* Link to task: https://cseejira.essex.ac.uk/browse/A299114-78
* It was set in sprint 7, and completed in sprint 9. 
* It is about to make product users read the data from the database via the website.

### Sprint 8 (University Week 17-18)
* doing uncompleted task from last sprint.

### Sprint 9 (University Week 19-22)
Admin login system
* Link to task: https://cseejira.essex.ac.uk/browse/A299114-132
* It was set in sprint 9, and completed in sprint 9. 
* It is about to code a login system for admin so the data has a basic level of security.


Implement Sha3 Hashing
* Link to task: https://cseejira.essex.ac.uk/browse/A299114-135
* It was set in sprint 9, and completed in sprint 9. 
* It is about to implement a later version of hashing method for a higher security level of login system.

Product Marketing Plan
* Link to task: https://cseejira.essex.ac.uk/browse/A299114-121
* It was set in sprint 9, and completed in sprint 10. 
* It is about making research for doing a marketing plan.

### Sprint 10 (University Week 23)
* Focus on complete Final Product report document including Excutable Link and Marketing Plan.
