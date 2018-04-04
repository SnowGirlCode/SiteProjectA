<?php
$host="localhost"; 
 $user="root"; 
 $password="mysql"; 
 $db=mysql_connect($host, $user, $password) or 
 die(mysql_error()); 
   mysql_select_db("maternite_site",$db);

$con = mysqli_connect('localhost','root','mysql');
if (!$con)
{
	echo 'Non connectée au serveur';

}
if(!mysqli_select_db($con,'maternite_site')){
     echo 'Base de donnes Non Selectionnée';
} 
?>