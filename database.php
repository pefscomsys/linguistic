<?php
$connect = mysqli_connect("localhost", "root", "genius") or die ("check your server connection.");

mysqli_query($connect,"DROP DATABASE SAMY");

mysqli_query($connect,"CREATE DATABASE SAMY");

mysqli_select_db($connect,"SAMY");

$login="CREATE TABLE login (
id int(4) NOT NULL auto_increment,
email varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',

PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

$admin="CREATE TABLE admin (
id int(4) NOT NULL auto_increment,
email varchar(65) NOT NULL default '',

password varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

$regis="CREATE TABLE regis (
id int(4) NOT NULL auto_increment,
username varchar(65) NOT NULL default '',
email varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',

PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";


$results = mysqli_query($connect,$admin) or die (mysqli_error());
$results = mysqli_query($connect,$login) or die (mysqli_error());
$results = mysqli_query($connect,$regis) or die (mysqli_error());
echo "Database successfully created!";


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	