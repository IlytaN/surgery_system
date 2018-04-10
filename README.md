## This is a clinic system which doctors and secretary can use to manage appointments, visits and patients.
#### This folder should be put in XAMPP/htdocs/
#### Recommended XAMPP version is 5.6.31
#### Please run surgery.sql in your database to have proper database for the web.
#### You should have a user in surgery database with following info:
#####    'hostname' => 'localhost',
##### 	'username' => 'root',
##### 	'password' => ''
#### Both apache and mysql should be active while testing.
#### Web link: localhost/surgery
#### Suggested account info to test:
##### Doctor:
###### email:
###### password:
##### Secretary:
###### email:
###### password:
#### Acknowledgement:...


** Catherine SETUP Notes **
When setting up in CodeIgnitor, ensure you have put the correct URL for the local host in config.php folder, line 26 (config folder)

To configure the database (database.php), hostname is set to local IP not local host, in my case 127.0.0.1 (standard IP address)

If you have issues connecting database (I'm using MAMP), it said 3306 for port, but it was 8889
To specify port
