To install the database
1.Extract the content of the openfire.sql.
2.Start the local server(WAMPP,XAMPP,LAMPP...)
3.In the Brower go and hit this URL localhost/phpmyadmin
4.In the DATABASE create a new database named as openfire
5.Now click on the import button in the database and upload this file 
openfire.sql
The Database is now created.

To change the username and password for database access
Go to the db_connect.php file 
change the values of $DBuser and $DBpass to the username and password
of your database.