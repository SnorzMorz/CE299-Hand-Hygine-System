# Product Demonstration Report

*This section contains a brief description and demo of product we have built.*

## Website

The final website compromises of 7 pages. Those pages are "Our work", "Employees", "Employee","Statistics","Contact","Login" and "Admin". 
The graphs on the webpage are generated with python codes which are periodically updated by the server.

Each page contains the header which includes a navigation bar from which most of the pages can be accesed except for the individual employee pages due to access to those being available from the "Employees" page. The website is navigated by clicking the headers navigation bars buttons. The header is also made to resize if the website layout becomes too narrow to accomadate a variety of screen sizes.

![Screenshot of the "Header" resizing page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Narrow_example.jpg)

The page named "Our work" describes our project and how it functions. how our product functions, its use, its purpose and what kind of environments it is best suited for.

![Screenshot of the "Our Work" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Our_Work.jpg)
The "Employees" page generates a list of users in the database and allows that list to be searched for specific individuals and filtered by department. The generated list of users links the displayed users to their own "Employee" page when their name is clicked which displays individual performance information. The search results can be filtered by either a employees name, department or both. This is done by inputting a name or a part of a name into the name text box and selecting a desired department from the drop-down list and clicking the search button to get results.

![Screenshot of the "Employees" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Employees.jpg)

Example of the search filtering by department in action. In this case HR Management was selected for filtering.

![Screenshot of the "Employees" page department filtering system](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Employees_department_filter.jpg)

Example of the search filtering by name in action. In this case an input "am" was given for the search so a list of users whose name contained the combination am was returned.

![Screenshot of the "Employees" page department filtering system](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Employees_name_filter.jpg)

The "Employee" page is generated based on the id provided in the url with the information from the database and displays information and hand hygiene performance statistics of the user. This page includes a script that refreshes the page over a set period of time so in case that there is a update to the graphs by the server the chart included on the page is also updated.

![Screenshot of the "Employee" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Employee.jpg)

The "Statistics" page displays a dashboard containing graphs that display the general hand hygiene information. This page also includes a script that refreshes the page over a set period of time so in case that there is a update to the graphs by the server the chart included on the page is also updated.

![Screenshot of the "Statistics" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Statistics.jpg)

The "Contact" page contains a contact form with text boxes for a name of the individual, their email and a message. Those can be filled by a visitor of the website and submitted by clicking the submit button.

![Screenshot of the "Contact" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Contact.jpg)

The "Login" page allows the admin to log into the website and access the "Admin" page. The page contains 2 text boxes for the admin username and password and a button to submit them for verification.

![Screenshot of the "Login" page](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/Login.jpg)

The "Admin" page visualizes the database in a classic way, and allows the admin to add or delete data via the website.

![Screenshot of the "Admin" page 1](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/admin1.PNG)
<br />
![Screenshot of the "Admin" page 2](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/Final_Product/images/Website-Screenshots/admin2.PNG)
<br />
If the user goes to this page without login, will be returned to the index page.
