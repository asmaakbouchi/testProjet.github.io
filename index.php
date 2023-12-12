<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bijoux</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
</head>

<body>
<form action="index.php" method="POST">

<div class="form-group">
    <label for="nom">Nom utilisateur <span>*</span></label>
    <input type="text" class="form-control" placeholder="Nom utilisateur" name="username" required>
</div>

<div class="form-group">
    <label for="nom">Mot de passe <span>*</span></label>
    <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
</div>
<p id=error style='color:red'></p>

<input id="bnt" type="submit" name="login" value="Connecter">
</form>

<?php 


if( isset($_POST["login"]))
{
    include("database.php");
    $user=$_POST["username"];
    $password=$_POST["password"];
    $req="select * from login where user='$user' and password='$password';";
    $res=mysqli_query($conn,$req);

    if( mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $_SESSION["username"]=$user;
            $_SESSION["password"]=$password;
            $_SESSION["roll"]=$row ["roll"];
            header("Location: home.php"); 
        }  
    } 
    else
    {
   
      echo "<script>document.getElementById('error').textContent='Le nom d\'utilisateur ou le mot de passe incorrect';</script>";
    }
        
    mysqli_close($conn);

}


?>
</body>
</html>