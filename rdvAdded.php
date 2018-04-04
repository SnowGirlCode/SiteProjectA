<?php
//database connection information 
$host="localhost"; 
 $user="root"; 
 $password="mysql"; 
 $db=mysql_connect($host, $user, $password) or 
 die(mysql_error()); 
   mysql_select_db("maternite_patient",$db);

$con = mysqli_connect('localhost','root','mysql');
if (!$con)
{
	echo 'Non connectée au serveur';

}
if(!mysqli_select_db($con,'maternite_patient')){
     echo 'Base de donnes Non Selectionnée';
}

 $nom_patient = ($_POST['nom_patient']);
 $prenom_patient = ($_POST['prenom_patient']); 
      $email =  ($_POST['email']);
      
      $date_naissance =  ($_POST['date_naissance']);	 
         $tel=  ($_POST['tel']);  
      $doc =  ($_POST['doc']);
      $sujet =  ($_POST['sujet']);
     $date_rdv =  ($_POST['date_rdv']);

 // pays
 if(isset($_POST['doc'])) {$selectOption = $_POST['doc'];}



$sql="INSERT INTO RDV (id, Nom_Patiente , Prenom_Patiente , date, Nom_Docteur , date_naissance , tel , sujet)
	 VALUES(null, '$nom_patient' , '$prenom_patient' , '$date_rdv' , '$doc' , '$date_naissance' , '$tel' , '$sujet')";
		
if(mysqli_query($con,$sql))
{
	echo 'Réessayer plus tard!';
}
else
{
	echo 'Inserted';
}

header("refresh:1; url=index.php");
?>