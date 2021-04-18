Our product included website and database. For running it on your machine, follow the step below to setup:

1. Download all the files of website from this link: https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/blob/538aa3f5cf7dd977d134d8e5bee80fe09dc8ccd4/Final_Product/Software.zip
and keep them in a same folder.

2. Modify the information about the host, username, password, name in database.php and cronjob.php (which you download from the link above) to fit your database setting.
p/s: line 6-9 in database.php ; line 2-6 in cronjob.php. The TIMEFRAME variable on line 8 is also modifible in case a change in the timeframe for the graphs is desired.

3. Modify the path of the php.exe in the callcronjob.bat file to enable generation of new graphs.

4. Run ce299_newest.sql script in your database.
Script’s link: https://cseegit.essex.ac.uk/2020_ce299/ce299_team06/-/blob/df0b771e9ffdf79e52cf1fc01112c5e370bd1250/mysql-table/ce299_newest.sql

5. Start localhost server and MySQL service in your machine, and the website is now running on your machine.

6. To set up autmatic periodical generation of new graphs it is required to set up a recurring task in Task Scheduler in Windows or a cronjob with Cron on Unix systems.
An example xml file has been provided named "Website image update.xml" for importing into Task Scheduler. After importing the task there is a need to change the path to the local callcronjob.bat file and the start in folder to set up the system to update graphs automaically.
The default update period for the example task provided is every 30 minutes at the 15th and 45th minute of each hour.

p/s: The list of pre-set admin username : Andy, Ioana, Mark, Joseph, Bradley, Yilow and Rayhang. 
The password is 'admin' for all admin account. 

