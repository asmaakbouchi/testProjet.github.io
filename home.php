<html>
<?php 
session_start();
include("navbar.html");
?>
<body>
 <div class="container" style="height: 200px"></div>
 <h1>Bonjour Monsieur</h1>
 <form action="home.php" method="POST">
<input type="submit" name="logout" value="Deconnecter"> 
<div class="container" style="height:200PX">
<?Php
 include("database.php");
echo $_SESSION["username"]. "<br>";
echo $_SESSION["password"]."<br>";
if(isset($_POST["logout"])){
    session_destroy();
    //header("Location: index.php"); // if we have this error on php when we use two header we can use javascript
    echo"<script> window.location.href ='index.php'</script>";
}
?>
</div>
 </form>
<?php include("footer.html"); ?>
</body>
</html>