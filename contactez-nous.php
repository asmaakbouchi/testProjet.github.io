<?php include("navbar.html");?>
<?php include("database.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clenix</title>
    <link rel=stylesheet href="s2.css" > 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  
  <div class="containerfuild" id="headercontact" >   
    <div class="text-center">
      <h2>CONTACTEZ-NOUS</h2>
    </div>
  </div>
  <div class="container-fuild" id="container-contact" >
    <div class="container"> 
        <div class="row" style="margin-top: 5%;" >
          <div class="col-md-7">
            <h5>DEVIS GRATUIT</h5>
            <hr id="minhr2">
            <p>Contactez nous pour benificier de notre expertice en comptabilité à casablanca.</p>
            <fieldset>
              <form action="contactez-nous.php" method="POST" >
                  <div class="form-group">
                    <label for="nom">Nom/Prénom <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" required>
                  </div>

                  <div class="form-group">
                    <label for="ville">Ville <span>*</span></label>
                    <select class="form-select" name="list-ville" id="ville" required>
                      <option selected disabled>Choisir la ville</option>
                      <option value="Agadir">Agadir</option>
                      <option value="Beni Mellal">Beni Mellal</option>
                      <option value="Casablanca">Casablanca</option>
                      <option value="El Jadida">El Jadida</option>
                      <option value="Fes">Fes</option>
                      <option value="Kenitra">Kenitra</option>
                      <option value="Khemissat">Khemissat</option>
                      <option value="Khouribga">Khouribga</option>
                      <option value="Laayoune">Laayoune</option>
                      <option value="Marrakech">Marrakech</option>
                      <option value="Meknes">Meknes</option>
                      <option value="Mohammedia">Mohammedia</option>
                      <option value="Nador">Nador</option>
                      <option value="Oujda">Oujda</option>
                      <option value="Rabat">Rabat</option>
                      <option value="Safi">Safi</option>
                      <option value="Sale">Sale</option>
                      <option value="Tanger">Tanger</option>
                      <option value="Taza">Taza</option>
                      <option value="Temara">Temara</option>
                      <option value="Tetouan">Tetouan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tel">Tel <span>*</span></label>
                    <input class="form-control" type="number" placeholder="Tél" name="tel" id="tel" minlength="10" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                  <input class="form-control" type="email" placeholder="Email" name="email" id="email" required>
                  </div>

                  <div class="form-group">
                    <label for="typelocal">Type de local <span>*</span></label>
                    <select class="form-select" name="typelocal" id="typelocal" required>
                    <option selected disabled>Choisir le type de local</option>
                    <option value="Particulier">Particulier</option>
                    <option value="Professionnel">Profesionnel</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="email">Message <span>*</span></label>
                    <textarea class="form-control" name="message" id="message" rows="3" required>
                    </textarea>
                  </div>
                  <button  type="submit"  class="btn btn-dark" id="btn" name="envoyer" >Envoyer</button>
              </form>
            </fieldset>
          </div>
          <div  class="col-md-5">
            <h5>NOS COORDONEES</h5>
            <hr id="minhr2">

            <ul> 
            <li> <p ><i class="fas fa-map-marker-alt pe-2"></i><b>Adresse: </b>Casablanca,99 pierre parent, maroc</p></li>
                <li><p><i class="fas fa-phone pe-2"></i><b>Téléphone: </b> +212 06 96 17 01 90</p></li>
            <li><p><i class="fas fa-envelope pe-2 mb-0"></i><b>Email: </b>igca.experts.conseil@gmail.com</p> </li>
            </ul>
          
            <br>
            <H5>HEUR DE TRAVAIL</h5>
              <hr id="minhr2">
              <ul >
                <li><p><i class="fa-solid fa-clock"></i>&nbsp; 24/24h et 7/7j</p></li>
              </ul> <br>
        
            <h5>ENTREPRISE DE DEVELOPPEMENT</h5>
            <hr id="minhr2">
            <ul >
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Création sociétés à casablanca</a></li><br>
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Domicialisation sociétés Casablanca</a> </li><br>
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Tenue de comptabilité a casablanca</a></li><br>
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Déclaration fiscal à casablanca</a></li><br>
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Etablissement du bilan et liasse fiscal</a></li><br>
              <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">juridique</a></li><br>
            <li> <i class="fa-solid fa-check"></i>&nbsp; <a href="#">Conseil juridique entreprise</a></li><br>
            </ul>

          </div>
        </div>
    </div>  
  </div>

</body>
</html>

<?php 
require_once 'mail.php';

if( isset($_POST["envoyer"])){
  include("database.php");
  $nom=$_POST["nom"];
  $ville=$_POST["list-ville"];
  $tel=$_POST["tel"];
  $email=$_POST["email"];
  $typelocal=$_POST["typelocal"];
  $message=$_POST["message"];
  
  $req="insert into contactez_nous(nom_prenom,ville,tel,email,type_local,message) 
  values('$nom','$ville','$tel','$email','$typelocal','$message');";

  try{
    if( mysqli_query($conn,$req))
    {  
       echo"<script>alert('votre informations sont bien envoyé');</script> "; 
    }   
  }

  catch(mysqli_sql_exception $e) 
  {
      echo "<p style='margin-top:20%'> $e</p> ";
  }

  mysqli_close($conn);

  // Envoye dans l'email 
    try {
        // Destinataire et expéditeur
        $mail->setFrom($email, $nom);
        $mail->addAddress('asmaa1.dev@gmail.com');
        $mail->addReplyTo($email);
        // Sujet et corps du message
        $mail->Subject = 'Contact';
        $mail->Body = "Ce message vous à été envoyer via la page contact de le site <b>Clenix.fr</b> <br><br>
        <b>Nom :</b> $nom <br>
        <b>Ville :</b> $ville <br>
        <b>Téléphone :</b> $tel <br>
        <b>Email:</b> $email <br>
        <b>Type de local :</b> $typelocal <br>
        <b>Message :</b> $message <br>";
        // Envoyer l'e-mail
        $mail->send();
        //echo 'Votre message a été envoyé avec succès.'; 
    }
    catch(Exception $e){
      echo 'Une erreur s\'est produite lors de l\'envoi du message: ', $mail->ErrorInfo;
    }

}
?>
<?php include("footer.html"); ?>