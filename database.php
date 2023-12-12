<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="nettoyage_db";
//$conn="";

try{
$conn =mysqli_connect($db_server,$db_user,$db_password,$db_name); 
}
catch(mysqli_sql_exception){
 echo"la base de donnée n'est pas connecté <br>";
    //echo"<script> alert('$msg2'); </script>";   
}


?>