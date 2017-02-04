BureauIntelligent
==========

>_An “IOT - smarthome” project uses web page which installed on raspberry to control arduino and sensor device_ 
   


 
Demo:
-------

https://limin-liu.github.io/BureauIntelligent/


Architecture
---------

* Architecture Hardware 
 
![Architecture hardware](https://github.com/limin-liu/BureauIntelligent/blob/master/Architecture%20hardware.jpg "Architecture hardware")

* Architecture Software 

![Architecture software](https://github.com/limin-liu/BureauIntelligent/blob/master/Architecture%20software.jpg "Architecture software")

* Architecture Conception 

![Architecture Conception](https://github.com/limin-liu/BureauIntelligent/blob/master/Architecture%20constitution.jpg "Architecture Conception")

Function
--------


Installation   
-------------

Installer web environment in raspberry PI

* Apache

         sudo apt-get install apache2
         sudo service apache2 restart
      
* Mysql

         sudo apt-get install mysql-server
      
* PHP

         sudo apt-get install php5 libapache2-mod-php5 php5-gd
         

Move the file to the defaut path of apache

      mv -r -f  BureauIntelligent  ./var/www/html/


Customize database
      
      Define the configuration options in the /webpage/connection.php
      
Load database

      $ mysql -u [username] -p [password]
      mysql> source /var/www/html/BureauIntelligent/webpage/rasp_database.sql
      mysql> show databases; 
      mysql> use bureau;
      mysql> show tables;
      exit
         
         
  
Login for check the webpage

      username: test
      password: test


  
 </br></br> 
An IOT project created on November 30, 2016, 14:29 .
