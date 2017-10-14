This is to secure your SQL server if you have it granted to all IP addresses,,,
Code written by Josh Prince (jakewjenkins@gmail.com)
Code Written on 10.14.17
to set this up, you must change the permissions of {path}/phpmyadmin/config.inc.php so that you can modify it.
move the folder "login" (or "login-master") to {path}/phpmyadmin/
import the Srv.sql file
then modify the config.inc.php module, and add this bit of code:
	require "login/check.php";
default login is:
 user: "snowman"
 password: "october2017"