## The Website

Our website is comprised of 7 pages (Our Work, Employees, Employee, Statistics, Contact, Admin and Login), each of them can be reached through the navigation bar.

Our Work page contains a short description of our product and the main features: the database, the python code that display the graphs based on the information extracted from the database and the website where a person (employee or not) can look at the graph and learn about the level of hygiene of a particular building and also about our product and he/she can contact us for any kind of inquiries.

Employees page hosts a search bar where a visitor can enter the name of an employee and see a profile of his/hers. The search bar can filter all the members of one department and display them on the screen, or it can return all the names that contain a certain combination of letters that has been introduced in the search bar.

Employee is a page that hosts information about one employee that has been searched via the search bar. On this page, the name, id and department will be displayed, as well as a graph showing the employee's individual hand hygiene statistics. The page is refreshed periodically by a script so that the graph is showing updated data based on the new information in the database.

Statistics page is where the graphs are displayed. There are 6 graphs now on that page showing different information regarding the use of the hand sanitizers in a building. The page is refreshed at times so that the graphs change dynamically and periodically based on new information that comes into the database from any of the antibacterial dispensers.

Contact page contains a contact form which can be filled by a visitor of the website and sent to our database.

Along with these pages, there is a log in section of the admin and a log out button that appears after the admin has successfully loged in.

The Admin page is where the admin can work with the database when needed. If he/she needs to insert information about a new employee or maybe delete information of an old one who doesn't work there anymore, or make any other kinds of alterations. There is a log out button which can redirect the admin to the other pages of the website when the work on the database is finished.

#### Test 1: Usability Testing

The user can easily find any kind of information by checking the navigation bar/ the search bar in the Employees page.
 
 All buttons have a concise and suggestive title. The pages are easily accessible.

There are no spelling or grammatical errors, all fonts are the same and the text and images are properly aligned.


#### Result: Pass

#### Test 2: Functional Testing

All the text fields work properly in the contact form and in the admin login section.

All the images of the graphs as well as the paragraphs in Our Work page are aligned and displayed properly.

#### Result: Pass


![Alligned text and images](Final_Product/images/our_work_ss.jpg)



#### Test 3: Database testing

The website connects to the local database successfully.

The contact form sends the inserted information into the database, and a message informs the user of the successful action or of a failure otherwise.

The admin can easily log in and make changes to the database if needed (e.g. add a profile for a new employee)

Also, on the Employees page a visitor can search for an employee from the database by name or he/she can display all members of the same department.
A message stating that the message has been successfully inserted into the database will appear on the screen.

#### Result: Pass

![Employees page Testing](Final_Product/images/Website-Screenshots/Employee.jpg)


![Contact page Testing](Final_Product/images/insert_message.jpg)


![Contact page Testing](Final_Product/images/contact_form_ss.jpg)


![Contact page Testing](Final_Product/images/database-insert.jpg)


![Admin page Testing](Final_Product/images/inside_admin.jpg)


#### Test 4: Security Testing

It is true that the contact form lacks security, but this feature can be modified in a variety of ways to satisfy customers’ needs (e.g. change the fields of the contact form depending on the customer’s special requests) and it is better that the security will be properly adapted on each choice.

The admin login page is secured with SHA-3 Algorithm. The admins can log in with the username and password and they can edit the database from the website if needed (for example to add a new employee). The password inserted into the textfield is hidden.

#### Result: Pass


![Admin page Testing](Final_Product/images/admin_login.jpg)


![Admin page Testing](Final_Product/images/inside_admin.jpg)


![Admin page Testing](Final_Product/images/log_out.jpg)


## Unsupervised Learning Code (Machine Learning)

#### Test 1 - Display Data In A Scatter Diagram

This is a scatter diagram displaying the data from the database. It displays the number of scans over time. However, the time is displayed in seconds as the format for date doesn’t allow for numerical calculations which is required for K-Means clustering algorithm.
![Scatter Diagram](Final_Product/images/ScatterDiagram.png)

#####  Result: Pass
#### Test 2 - Find Optimum K Value

This is a line graph used for the elbow method. It is used to find the optimum value of K by calculating the point where the number of clusters is furthest from the red line shown in the graph.
![Elbow Method](Final_Product/images/ElbowMethod.png)

#####  Result: Pass
#### Test 3 - Colour Code Clusters

The K-Means is clustering algorithm is used to group data that adheret to a similar pattern.
![Clusters](Final_Product/images/ScatterDiagramClusters.png)
#####  Result: Pass
#### Test 4 - Records Printed Grouped By Clusters

Each record from each cluster is outputted with its ID number, time and number of scans.
![Records](Final_Product/images/RecordsClusters.png)
#####  Result: Pass



