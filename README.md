# ltibloodbank

# Setting up Ubuntu Machine

sudo apt-get update

sudo apt-get install apache2

sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring

sudo systemctl restart apache2

sudo apt-get install mysql-server

# Important Notes To Remember

Add Endpoint URL of the DB to the congig.php and also for the pages which need the DB Details

If the Database or Table name is changes please change it accordingly.

Example: Donate-blood.php, Find-donor.php, config.php, signup.php, index.php {login}, 

# Connecting to My SQL Database

mysql -h mysqldb2022.ckgolaegfzzq.us-west-2.rds.amazonaws.com -u admin -p

# Create Database
Create database customers;

#use DB

use customers;

# Create table 
create table donors(id int AUTO_INCREMENT primary key, fname varchar(255) NOT NULL , lname varchar(255) NOT NULL , mobileno BIGINT UNIQUE, city varchar(255) NOT NULL, bfrom date, bto date, dob date, bloodgroup varchar(255) NOT NULL);



# Create table and assign Values for Signin/Login

CREATE TABLE `users` (
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


    INSERT INTO `users` (`username`, `name`, `password`) VALUES
    ('yssyogesh', 'Yogesh Singh', '12345'),
    ('bsonarika', 'Sonarika Bhadoria', '12345'),
    ('vishal', 'Vishal Sahu', '12345'),
    ('prashanth', 'Prashanth Katkam', '12345'),
    ('vijay', 'Vijay mourya', '12345');

INSERT INTO `donors` (`fname`, `lname`, `mobileno`, `city`, `bfrom`, `bto`, `dob`, `bloodgroup`) VALUES
('Srikanth', 'Koraveni', '9000736060', 'Pune', '2022-09-28', '2022-12-28', '1998-05-22', 'O_Positive'),
('Prashanth', 'Katkam', '7989919097', 'Mumbai', '2022-09-17', '2022-11-18', '1998-09-30', 'O_Positive'),
('Kranthi', 'Khaitha', '9876789871', 'Bangalore', '2022-09-16', '2022-11-08', '1996-07-02', 'B_Positive'),
('Srinivas', 'Thota', '9812789411', 'Mumbai', '2022-09-18', '2022-10-31', '1992-07-22', 'O_Positive'),
('Pandya', 'Loka', '9877787887', 'Mumbai', '2022-09-18', '2022-10-09', '1992-07-22', 'B_Positive'),
('Prajodh', 'Shreya', '9812444411', 'Mumbai', '2022-08-23', '2022-10-31', '1992-07-22', 'B_Positive'),
('Srinivas', 'Thota', '9812723411', 'Mumbai', '2022-04-19', '2022-10-07', '1992-07-22', 'B_Positive'), 
('Zaheer', 'Khan', '7788678987', 'Chennai', '2022-09-11', '2022-12-19', '1998-11-11', 'A_Positive');


#DB Endpoint needs to be added

vi donate-blood.php
vi find-donor.php
vi config.php
vi search.php
vi signup.php


# Insert Single Values to a Table

INSERT INTO `users` (`username`, `name`, `password`) VALUES
('prashanth', 'Prashanth Katkam', '12345');

# Git Commands

git clone URL

git clone --branch branchname URL

sudo git init

sudo git remote add origin "https://github.com/prashanthkatam/ltibloodbank.git"

sudo git remote add origin "https://github.com/prashanthkatam/ltibloodbankrepo.git"

sudo git remote -v

sudo git add .

sudo git commit -m ""

git remote set-url origin https://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@github.com/prashanthkatam/ltibloodbank.git

git remote set-url origin https://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@github.com/prashanthkatam/ltibloodbankrepo.git


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


<html>
  <body>
    Hi this is webpage after making changes in GitHub Repo and CI CD Made visible here
  </body>
</html>
