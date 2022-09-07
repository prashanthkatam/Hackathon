# ltibloodbank

# Setting up Ubuntu Machine

sudo apt-get update

sudo apt-get install apache2

sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring

sudo systemctl restart apache2

sudo apt-get install mysql-server



# Connecting to My SQL Database

mysql -h ENDPOINT -u admin -p

# Create Database
Create database customers;

#use DB

use customers;

# Create table 
create table donors(id int AUTO_INCREMENT primary key, fname varchar(255) NOT NULL , lname varchar(255) NOT NULL , mobileno BIGINT UNIQUE, city varchar(255) NOT NULL, bfrom date, bto date, dob date, bloodgroup varchar(255) NOT NULL);

# Insert Values to donors table

INSERT INTO `donors` (`fname`, `lname`, `mobileno`, `city`, `bfrom`, `bto`, `dob`, `bloodgroup`) VALUES
('Srikanth', 'Koraveni', '9000736060', 'Pune', '2022-09-28', '2022-12-28', '1998-05-22', 'O_Positive'),
('Prashanth', 'Katkam', '7989919097', 'Mumbai', '2022-09-17', '2022-11-18', '1998-09-30', 'O_Positive'),
('Kranthi', 'Khaitha', '9876789871', 'Bangalore', '2022-09-16', '2022-11-08', '1996-07-02', 'B_Positive'),
('Srinivas', 'Thota', '9812789411', 'Mumbai', '2022-09-18', '2022-10-31', '1992-07-22', 'O_Positive'),
('Pandya', 'Loka', '9877787887', 'Mumbai', '2022-09-18', '2022-10-09', '1992-07-22', 'B_Positive'),
('Prajodh', 'Shreya', '9812444411', 'Mumbai', '2022-08-23', '2022-10-31', '1992-07-22', 'B_Positive'),
('Srinivas', 'Thota', '9812723411', 'Mumbai', '2022-04-19', '2022-10-07', '1992-07-22', 'B_Positive'), 
('Zaheer', 'Khan', '7788678987', 'Chennai', '2022-09-11', '2022-12-19', '1998-11-11', 'A_Positive');


# Create table users and assign Values for Signin/Login

CREATE TABLE `users` (
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


# Assign values to users table

    INSERT INTO `users` (`username`, `name`, `password`) VALUES
    ('yssyogesh', 'Yogesh Singh', '12345'),
    ('bsonarika', 'Sonarika Bhadoria', '12345'),
    ('vishal', 'Vishal Sahu', '12345'),
    ('prashanth', 'Prashanth Katkam', '12345'),
    ('vijay', 'Vijay mourya', '12345');
    

# Insert Single Values to a Table

INSERT INTO `users` (`username`, `name`, `password`) VALUES
('prashanth', 'Prashanth Katkam', '12345');


# Admin Table

CREATE TABLE `admin` (
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# insert into admin table

INSERT INTO `admin` (`username`, `name`, `password`) VALUES
('admin', 'admin', '12345');

=================================================================================================
                                #IMP Points
-------------------------------------------------------------------------------------------------
if connection from linux ec2 to DB is not connecting, then add inbound rule to DB SG as AURORA and assign SG of EC2 Instance.


# DB Endpoint needs to be added

vi donate-blood.php
vi find-donor.php
vi config.php
vi search.php
vi signup.php


Add admin table name in indexadmin.php

Hackathon Repo consists of latest code

# Important Notes To Remember

Add Endpoint URL of the DB to the congig.php and also for the pages which need the DB Details

If the Database or Table name is changes please change it accordingly.

Example: donate-blood.php, find-donor.php, config.php, signup.php, search.php {login}.

NOTE: Add donors table name to index.php and add admin table name to indexadmin.php

===================================================================================================
---------------------------------------------------------------------------------------------------

# Git Commands

git clone URL

git clone --branch branchname URL

sudo git init

sudo git remote add origin "https://github.com/prashanthkatam/ltibloodbank.git"

sudo git remote add origin "https://github.com/prashanthkatam/ltibloodbankrepo.git"

sudo git remote add origin "https://github.com/prashanthkatam/Hackathon.git"

sudo git remote -v

sudo git add .

sudo git commit -m ""

git remote set-url origin https://TOKENKEY@github.com/prashanthkatam/ltibloodbank.git

git remote set-url origin https://TOKENKEY@github.com/prashanthkatam/Hackathon.git

git remote set-url origin https://TOKENKEY@github.com/prashanthkatam/Hackathon.git

sudo git push origin master

# Upload new files

sudo git init

sudo git add .

sudo git commit -m ""

sudo git push origin master

# Must for using Session Variable

<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>

# Install Jenkins

sudo apt-get update

sudo apt-get install openjdk-8-jdk

wget -q -O - https://pkg.jenkins.io/debian-stable/jenkins.io.key | sudo apt-key add -

sudo sh -c 'echo deb https://pkg.jenkins.io/debian-stable binary/ > /etc/apt/sources.list.d/jenkins.list'

sudo apt-get update

sudo apt-get install jenkins

sudo apt install git

# Important SQL Commands for use

DELETE FROM Customers;

show columns from donors;

# Push Apache Logs to Cloud Watch

1.	Create an EC2 Instance

2.	Create a Role with CloudWatchAgentServerPolicy and attach to EC2 Instance.

3.	Update the Instance

sudo apt-get update

4.	Install Apache2 or any other web server on the Ec2 Instance

Sudo apt-get install apache2

5.	Download the Package using wget

sudo wget https://s3.amazonaws.com/amazoncloudwatch-agent/ubuntu/amd64/latest/amazon-cloudwatch-agent.deb

6.	Install CloudWatch Agent 

sudo dpkg -i -E ./amazon-cloudwatch-agent.deb

7.	Create configuration 

cd /opt/aws/amazon-cloudwatch-agent/bin/config.json

{
     "agent": {
         "run_as_user": "root"
     },    
     "logs": {
         "logs_collected": {
             "files": {
                 "collect_list": [
                     {
                         "file_path": "/opt/myapp.log",
                         "log_group_name": "myapp-error-log",
                         "log_stream_name": "{instance_id}"
                     }
                 ]
             }
         }
     }


8.	Command to Start CloudWatch Service

sudo /opt/aws/amazon-cloudwatch-agent/bin/amazon-cloudwatch-agent-ctl -a fetch-config -m ec2 -c file:/opt/aws/amazon-cloudwatch-agent/bin/config.json -s

9.	Now Navigate the AWS Cosole and go to Cloud Watch you can see the log group as mentioned in the config.json and the logs will be flown as the path given in config.json


# Create a CI CD Pipeline using Jenkins, EC2, Github


1.	First Create an EC2 Instance in the AWS
2.	SSH Into the EC2 Instance and follow the following steps:
•	sudo apt-get update
•	sudo apt-get install openjdk-8-jdk
•	wget -q -O - https://pkg.jenkins.io/debian-stable/jenkins.io.key | sudo apt-key add -
•	sudo sh -c 'echo deb https://pkg.jenkins.io/debian-stable binary/ /etc/apt/sources.list.d/jenkins.list'
•	sudo apt-get update
•	sudo apt-get install Jenkins
•	sudo systemctl status Jenkins
•	sudo apt install git
3.	After Installing Jenkins open the Jenkins by copying the EC2 Instance IP:8080 and once you open webpage it will ask for the password which will be available on location shown in page
4.	After that the Jenkins will recommend us to download some packages which are used, click on the suggested Packages, then the packages will get installed, once installed it will ask for username password etc.,
5.	After that the Jenkins will be logged in, then we need to install GitHub Integration Extension Package, and then restart the Jenkins
6.	After restart then open github, create a repository or use existing repository and push some sample code like index.php to the repository
7.	Then next we need to enable webhook, so that it will notice the recent changes done in repository, then it will be used as connection point.
8.	Now Create a Pipeline :
•	Click on New Item
•	Enter Name of Item
•	Click Free Style Project and Click on OK
•	Don’t choose anything in description
•	Select Source Code Management as Git and paste git URL
•	Then go to build and add build step Execute Shell
•	Then enter ls or [pwd]
•	Click on Apply and save
•	Then select Job and click on Build now
•	It will successfully execute and build also gets successful, once it is done, we can see logs where we can see pwd of the project 

/var/lib/jenkins/workspace/prashproject


9.	Once the POC or Example is done we can now click on Job and click on Configure, and then tick checkbox GitHub hook trigger for GITScm polling
10.	Add Script as 
ls
pwd
cp -r /var/lib/jenkins/workspace/prashproject/* /var/www/html/

11.	Now Make Changes in GitHub and Come to Jenkins and click on Job and then Click on Build now, then the New Code will be copied to /var/lib/jenkins/workspace/prashproject/* then as we have created a script in job, it will copy all the data from /var/lib/jenkins/workspace/prashproject/* to /var/www/html/
12.	Thus, we can create a CI CD Pipeline.
LAB 2

1.	Add a new node (Slave) by clicking on manage Jenkins and then by clicking Manage Nodes and Clouds
2.	Click on New Node and then give name of node, mark as Permanent Node and click on create
3.	Then give name ,description, number of executors, remote directory root labels usage launch method and confirm use WebSocket click on save
{NOTE: Disable WorkDir, use this node as much as possible, give root directory as /var/lib/Jenkins/  , Must use WebSocket}.
4.	Now download Agent and then copy paste to Slave node amd then run command as shown in slave node form Jenkins, then it will be added and connected successfully.
{NOTE: use & for running it in background}.
5.	Now Create a New Job and Name it, then click in Free style project and then click ok, then restrict where this project can be run, and then click on Git as Source Code Management  and then paste GitHub Repository link and then select GitHub hook trigger for GITScm polling and then use add build step and select Execute Shell in it and then paste following commands:


ls
pwd
cp -r /var/lib/jenkins/workspace/projectname/* /var/www/html/
[The reason behind adding slave node is, when we make any changes in github for dev then if it success, now then only the change should be reflected to Production, here use project name after workspace path, so it copied files from /var/lib/Jenkins/workspace/projectname/*  to /var/www/html/]
6.	Click on Save and apply
7.	After creating First job for master as stated in lab1  and then as stated in lab 2, then go to configure of first job and click on post build actions and click on build other projects, select project Jenkinsslaveproj, and select trigger only if build is stable. Click on save.
8.	Now Build the Job Here if the dev gets success, then prod will be changed.


KEY POINTS
1.	Create a job1 for master (dev), it doesn’t need adding node as the default is dev, Don’t select anything under Description,  then use git and paste git URL of Repository under Source Code Management, then select GitHub hook trigger for GITScm polling under Build Triggers,  Don’t select anything under Build Environment, Add Execute Shell under Build, paste cp from /var/lib/Jenkins/workspace/projectname/* to /var/www/html/
2.	Create a node as stated in LAB 2
3.	Create job2 and then select Restrict where this project can be run under Description and select ,  then use git and paste git URL of Repository under Source Code Management, then select GitHub hook trigger for GITScm polling under Build Triggers,  don’t select anything under Build Environment, Add Execute Shell under Build, paste cp from /var/lib/Jenkins/workspace/projectname/* to / var/www/html/
4.	Then click on job1 and click on configure for editing, and just add post build actions and click on build other projects, select project Jenkinsslaveproj, and select trigger only if build is stable. Click on save.
5.	Now Change code in GitHub, then the change will trigger to dev and then if it is successful , then the changes will be reflected to Prod.


<html>
  <body>
    Hi this is webpage after making changes in GitHub Repo and CI CD Made visible here
  </body>
</html>
