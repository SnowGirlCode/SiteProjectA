<?php
//database connection information 
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

      $nom = ($_POST['nom']);  
      $email =  ($_POST['email']);
      $tel =  ($_POST['tel']);	 
         $msg =  ($_POST['message']);  
         $image =  ($_POST['image']);

$sql="INSERT INTO message (id,nom,email, tel , msg, pic)
	 VALUES(null, '$nom' ,'$email' , '$tel' , '$msg', '$image')";
		
if(mysqli_query($con,$sql))
{
	echo 'Merci pour votre feedback';
}
else
{
	echo 'Message non envoyé';
}

 header("refresh:1; url=index.php");
?>