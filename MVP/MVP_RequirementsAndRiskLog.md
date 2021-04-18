# Requirements and Risk Log

In this markdown document, we list the requirements and risks we have identified for our product so far.

# Requirements

![UseCaseDiagram](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/Project%20Use%20Case%20Diagram.jpeg)
Use Case Diagram

## Functional requirement

1.  Name        : Scan function/ Collect data

    URL         : https://cseejira.essex.ac.uk/browse/A299114-75 (Blocked)
    
    Description : One of the main functions that our system will do, scan the user when a user enters the building or another room in the building.
    
    Summary     :  "As a user of the building, I want to be scanned every time I used the hand sanitizer so that I don't need to assign my information manually." (User story)
    
    Assigned to : -
    
    
2.  Name        : Live search box for Employees

    URL         : https://cseejira.essex.ac.uk/browse/A299114-71 (Progressing)
    
    Description :   
        This is one of the website feature that involve of interacting with server without refreshing the page. We can also call this as AJAX. It serves as a functionality for                the user to look up for certain employee name without typing his/her full name. Feature functionality:
        Look up for employee without typing full name.
        The result is suppose to let user to select and display his/her data.
        The data that will be display include personal information in the database, chart of his/her usage and etc.
        This feature is mainly to enable user to search more accurate and faster. It also show user information about the person user selected.
        
    Summary     : "As an employee , I want to check my hand hygiene level , so that I know should I take more care on my hand hygiene." (User story)
    
    Assigned to : Low, Yi J
    ![71](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/71/employee%20search%20bar.PNG)
    
    
3.  Name        : JavaScript and PHP to deploy chart on website

    URL         : https://cseejira.essex.ac.uk/browse/A299114-68 (Progressing)
    
    Description :   
        This website suppose to have graph or chart to display with the data. However, until 28 Nov the team haven't found any way to deploy the graph to the website. I am currently having a look on chart.js, which is a JavaScript open source library that allow developer to deploy accurate and great UI graph / chart.
        The MVP should have a website that show what going on with the database that store information of this project.
        This might take some time to grasp the knowledge on how to use it. I also need to find a way to supply the data that I able to retrieve from the database. This sound like a collaboration between JavaScript and PHP in order to show the chart/graph that reflect the data.
        
    Summary     : "As a manager, I want to check all staff's hand hygiene level, so that I can remind my staff to take care on it." (User story)
    
    Assigned to : Low, Yi J
    
    ![68](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/68/chart_demo.PNG)
    
    
4.  Name        :Administrater view

    URL         : https://cseejira.essex.ac.uk/browse/A299114-78 (Unassigned)
    
    Description : 
        Should have a person like the admin to manage the database, functions might include adding/removing staff, adding/removing a record
        
    Summary     : "As an administrator, I want to be able to modify the record, so that I can handle if an incorrect record is taken." (User story)
    
    Assigned to : -

5.  Name        : Website view

    URL         : https://cseejira.essex.ac.uk/browse/A299114-29 (Done by 17/11/2020)& https://cseejira.essex.ac.uk/browse/A299114-41 (Done by 1/12/2020)
    
    Description :  This is a way to make the common user able to use the system.
    
    Summary     : "Joe dose not good at technologies; in order to use the system, open a website and read is the most she can do" (Personas)
    
    Assigned to : Igret, Ioana-Cristina 
    
    ![Website view](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/41/website.PNG)

## Non functional requirement

1.  Name : Responsive design of the website

    URL : https://cseejira.essex.ac.uk/browse/A299114-74 (Progressing)
    
    Description :   
        I am going to finished my work to restructure the HTML files to PHP files to remove duplicate code and reduce the total size of the website. Before I going to end my task, I have tried out the website using my phone and desktop. Currently, with the latest design changes has been made by team member it doesn't fit the responsive               design. User of the website suppose to use the website with great experience across all different device. However, user is unable to have a responsive website to it suppose to.
    
    Summary : "Kim is a mobile user, he uses a mobile phone to browse the website"
    
    Assigned to : Low, Yi J
    
    ![74](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/74/mobile_perspective.PNG)
    
2.  Name        : The website should updated the information without refreshing.

    URL         : https://cseejira.essex.ac.uk/browse/A299114-47 (Progressing)
    
    Description : 
        This is a feature for the website every time we retrieve data to the website without refreshing the whole page. Currently, it still on research point and documentation is really needed through the development.
        a. How AJAX works
        b. Implement AJAX with what technologies
        c. Whether all data query need AJAX
        d. coming issues....
        
    Summary     : when the user's internet is stable, data showed in client's side must updated every 5 second without making the website refreshing. (Scenario-based)
    
    Assigned to : Low, Yi J
    
    ![47](https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/raw/master/MVP/images/requirement/47/progression_47.PNG)

## Constraints 

1.  Name        : Deadline

    Description : 
        A project MVP(Minimum viable product) needs to be submited before 04 Dec 2020.
        A Group Final Project needs to be submited before 12 Mar 2021.
        

## Risk Log

Note : The Likelihood and Impact level are refercened to the categories in JIRA  
       For the likelihood, from weak to strong : None, Rare, Unlikely, Possible, Likely, Certain  
       For the impact, from weak to strong : None, Insignificant, Minor, Moderate, Major, Catastrophic
       
       
1.  Name                : Website might crash and connection will on risk

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-67
    
    Description         : I gonna restructure the whole website files and the way they interact. It might affect the website and it might failed to load due to changes.
    
    Summary             : Restructuring website needed, and the transition of version might be failed. 
    
    Impact              : Moderate
    
    Likelihood          : Certain
    
    Mitigating actions  : Low, Yi J keep working on it and secure to solve this risk before the submission of MVP.
    
    
2.  Name                : Responsive design of the website

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-69

    Description         : I am going to finished my work to restructure the HTML files to PHP files to remove duplicate code and reduce the total size of the website. Before I going to end my task, I have tried out the website using my phone and desktop. Currently, with the latest design changes has been made by team member it doesn't fit the responsive design. User of the website suppose to use the website with great experience across all different device. However, user is unable to have a responsive website to it suppose to.

    Summary             : GUI for mobile user needs to be implemented

    Impact              : Certain

    Likelihood          : Moderate

    Mitigating actions  : Low, Yi J keep working on it to complete the user's experience
    
    
3.  Name                : Personnel Risk - work at home

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-77

    Description         : There is a risk that the new mode of developing software may cause maladjustment.
                      This will increase communication difficulty. (Some internet might be unstable)
                      Might raise the reliability problem since we can only virtually contact each other.
                      The time zone is also an issue, will make team member hard to find the meeting time that suits everyone.
                      This might cause team members to have a different status in meetings, some might be energetic, some might be tired or exhausted.
                      
    Summary             : We are unable to meet together and have to meet online, and this is affected by internet speed and time zone.

    Likelihood          : Certain

    Impact              : Minor

    Mitigating actions  : The mitigating action we take is to work from home individually and having a meeting twice a week to report and communicate.
                          Also, using whatsapp to communicate.
                      
                      
4.  Name                : Unable to use the physical device and the laboratory

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-76
    
    Description         : Due to the Covid-19 pandemic, We are unable to use to learn or test our code via real scanner device provided by University.
    
    Summary             : No physical device provided, testing become difficult.
    
    Impact              : Major
    
    Likelihood          : Certain
    
    Mitigating actions  : Joseph then generating sample data to in our Database to test the system.


5.  Name                : Time Risks 

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-80
    
    Description         : the workload increased since the upcoming progress test, assessment.
                      Also, as the project goes further, we found more things that need to be implemented.
                      Working too much may caused member's fatigue and potentially effect performance.
                      More effort might need to be invested in to prevent project delayed.
                      
    Summary             : Need to work more to make the project delivered on time.
    
    Impact              : Major
    
    Likelihood          : Possible
    
    Mitigating actions  : Arranging more meeting to discuss problem and work together.


6.  Name                : Technology Risks - Need of learning new technology to secure the project progression.

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-81
    
    Description         : We found different useful technology that might help our project, but we didn't master it before or even don't know.
                          Learning them takes time and the rate of mastering them is uncertain. The technology we discussed and someone looked into it for this project:Microsoft Azure, Visualizing data via Pyhton, Using MySQL in Pyhton, AJAX system, Gitlab, K means clustering algorithm, unsupervised machine learning, supervised machine learning
                          
    Summary             : We get involved in quite many technology that new to us to develop this project. Some of the effort invested might be temporarily unuseful.
    
    Impact              : Major
    
    Likelihood          : Possible
    
    Mitigating actions  : Some technology researched is postponed if temporarily not seeing its benefit. Depends on the member who research it to judge if the research is worthy.
    
    
7.  Name                : Personnel Risk - Team members using uncertain IP address

    URL                 : https://cseejira.essex.ac.uk/browse/A299114-82
    
    Description         : As we are using the online database provided by Azure, it needs the user to assign their Ip address first then, the assigned IP address will get permitted.
                          However, some of the member IP address is uncertain, so he needs to inform Yi the online database's account owner.
                          This caused trouble and is annoying.
                          
    Summary             : Team members using uncertain IP address caused the difficulty of accessing the database
    
    Impact              : Minor
    
    Likelihood          : Certain
    
    Mitigating actions  : Yi address the range of the IP address Chun use, and Chun can access the database without telling Yi his new Ip address every time.


