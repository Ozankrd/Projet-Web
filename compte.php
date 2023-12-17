<!-- Votre compte -->
<!DOCTYPE html>
<html>
<head>
    <title>Projet </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>

<!-- Navigation-->
<nav id="nav">
    <div class="container">
        <a href="index.html"><img src="img/logo.png" alt="Logo" width="180"></a>
        <button type="button"></button>
        <div class="row"> <!-- Ajout de la classe row -->
            <div class="col"><a href="index.html" class="Button_nav" style="color: white;"><h3>Accueil</h3></a></div>
            <div class="col"><a href="parcourir.html" class="Button_nav" style="color: white;"><h3>Tout parcourir</h3></a></div>
            <div class="col"><a href="recherche.php" class="Button_nav" style="color: white;"><h3>Recherche</h3></a></div>
            <div class="col"><a href="rdvClient.php" class="Button_nav" style="color: white;"><h3>Rendez-vous</h3></a></div>
            <div class="col"><a href="compte.php" class="Button_nav" style="color: white;"><h3>Votre Compte</h3></a></div>
        </div>
    </div>
</nav>
<div class="container-fluid my-5 py-5">
  <div class="text-center text-white my-5 py-5">
        <div class="my-5 py-5">
            <div class="row my-5 justify-content-center align-items-center h-100">
                <form action="connexion.php" method="post">
                    <input type="submit"  value="Admin" name="connexion"  style="font-size: 20px; padding: 10px 20px; border-radius: 5px;">
                    <input type="submit" value="Coach" name="connexion"  style="font-size: 20px; padding: 10px 20px; border-radius: 5px;">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer-->
<footer id="footer" class="bg-white">
  <div class="container py-5">
      <div class="row py-4">
        <div >
          <h6 >Contact</h6>
          <ul >
            <li ><a>Téléphone : +33 01 22 33 44 55</a></li>
            <li ><a>Mail : salle.sport@omnessports.fr</a></li>
            <li ><a>Adresse : 43 Quai de Grenelle, 75015 Paris</a></li>
          </ul>
          
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        </div>

        <div >
          <h6>Google Map</h6>
          <div>
              <iframe width="300" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=omnes%20education&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>

        </div>
      </div>
    </div>
    <div>
      <div>
        <p >Copyright © Omnes</p>
      </div>
    </div>
</footer>
</body>
</html>