BureauIntelligent
==========

>_An “IOT - SmartHome” project uses web page which installed on raspberry to control arduino and sensor device_ 
   


 
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
* Hardware

 * Temperature and humidity sensors
 
      > Use the wifi module ESP8266 to send the value detected by DHT22 sensor to the raspberry pi. We use the way of [http get] to      sent the data directly to the "add.php" than write its in the mysql database.
      
 * Light
 
      > Use json to get the order from webpage then control the on and off of light

* Software
  
  * Login
  
      > For entry into the main page, you need first login
      
  * Auto Refresh
  
      > The home page will auto refresh every 5min and reload the real time value of the sensors.
       
  * Toolbar
  
      > Click to jump to the position of different module in the main user homepage
      
  * Health Care System   
  
      > The height of the thermometer mercury column, the number of dust particles, and the opacity of the skull will be used to visually represent the temperature, the dust density and the carbon monoxide(CO) concentration. so each time either you refresh by hand or the webpage refresh automatic, it will update the sensors' value here. 
       
  * Graph 
  
      > There is a hide/show botton below the icon of thermometer, it will show a carousel which iclude the curve of temperature、 humidity、dust、CO. But the graph is limited to the last 30 time points.
     
  * Table
  
      > If you want to check all the data of every sensor. You can click the link above the each symbol in the "Health Care System" to go to the data table. The data table page allow you to search a day、time、value particular and choose the way of value's rank. 
   
  * About Us
  
      > This part post the photo of members of our group.
      
  * Feedback
  
      > There is a feedback form for user to report bug or submit advice.
    
  * Logout
  
      > In the field "me" in the toolbar, you can find option of "déconnexion", click for logout. And you wait for 5s, you will be redirected to the login page.
 
 
 
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

      ftp the floder webpage on raspberry Pi
      
      rename the floder webpage to BureauIntelligent
      
      mv -r -f  BureauIntelligent  ./var/www/html/


Customize database
      
      Define the configuration options in the /BureauIntelligent/connection.php
      
Load database

      $ mysql -u [username] -p [password]
      mysql> source /var/www/html/BureauIntelligent/rasp_database.sql
      mysql> show databases; 
      mysql> use bureau;
      mysql> show tables;
      exit

Go to the site

      localhost/BureauIntelligent/  
      
   or  
      
      192.168.xx.xx(Intranet ip of pi)/BureauIntelligent/

Login for check the webpage

      username: test
      password: test
      
Use ngrok for Intranet penetration

* view ngrok

  https://ngrok.com/

* What is ngrok

  Ngrok allows you to expose a web server running on your local machine to the internet.
  
![ngrok theory](https://ngrok.com/static/img/demo.png "ngrok theory")

* Start up

         Download ngrok for LINUX ARM
      
         cd /path/to/download_ngrok
      
         unzip ngrok-stable-linux-arm.zip
      
         ./ngrok http 80
         
* Have fun

  You will find an URL just like   ___http://<i></i>92832de0.ngrok.io___   in your terminal. So you can use this URL to let the devices who are not in your local network also Visit this site。
   
* Note

  You should keep the terminal always open. Otherwise the URL will lose effectiveness.
  

License
--------
[Apache License](https://github.com/limin-liu/BureauIntelligent/blob/master/LICENSE) 




 
</br></br></br></br>
An IOT project created on November 30, 2016, 14:29 .
