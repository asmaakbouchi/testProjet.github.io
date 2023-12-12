<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="Post">
        <label for="user"> Nom D'utilisateur</label><br>
        <input type="text" name="user"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="mdp"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php
$a=$_POST["user"];
$b=$_POST["mdp"];
echo $a."<br>" , $b."<br>";
$var="php";
$number=5;
/*--------------- 
la puissance comme deux étoil ** 
la methode post est plus securisé que la methode get
$x=-4; $result=abs($x); -----> 4
$x=3.14; $result=round($x) ----->3
$x=3.14; $result=floor($x) ----->3
$x=5 $y=2; $result=pow($x,$y) ----->25

----------------- */
$number**=3;
echo"Hello {$var}  {$number} \$ <br> <br>

on a aussi des modeles de voiture a vendre come la suite : <br>";

$cars=array("Mercredes","Touareg","Firari");

array_push($cars,"Ford","Range rover");// add elements
//array_pop($cars); //delete last element 
#array_shift($cars); //delete first element 
//$cars=array_reverse($cars); //reverser l'ordre de liste en contraire
foreach($cars as $car){
echo $car. "<br>";
}
echo count($cars); // compter les ellement de la liste des voitures

$x=null;
//isset($x) : return true if the variable declare and not null and for verify what id button clicked 
//empty($x) : return true if the variable not declare false, null and ""
//include("navbar.html"); //pour avour une partie de page san repeter tous le script de cette partie 


?>