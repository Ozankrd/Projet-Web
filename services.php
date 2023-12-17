<!-- Services -->
<!DOCTYPE html>
<html>
<head>
    <title>Projet </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
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

<div class="container my-5 py-5">
    <div class="row my-5 py-5">
        <div class="col-lg-4 py-2">
          <div class="list-group" role="tablist">
            <a class="list-group-item list-group-item-action" id="onglet2" data-toggle="list" href="#o1">Horaire de la gym</a>
            <a class="list-group-item list-group-item-action" id="onglet3" data-toggle="list" href="#o2">Règles sur l’utilisation des machines</a>
            <a class="list-group-item list-group-item-action" id="onglet4" data-toggle="list" href="#o3">Nouveaux clients</a>
            <a class="list-group-item list-group-item-action" id="onglet5" data-toggle="list" href="#o4">Alimentation et nutrition</a>
          </div>
        </div>
        <div class="col-lg-8 py-2">
          <div class="tab-content text-white">
            <div class="tab-pane fade" id="o1">
            <p class="lead">Horaires de la salle :
            09h-18h</p>
            </div>
            <div class="tab-pane fade" id="o2">
            <p class="lead">1. Essuyez vos appareils
            <br>2. Ne soyez pas en retard aux cours collectifs
            <br>3. Rangez vos poids et vos haltères
            <br>4. Enlevez-les poids de la barre de musculation
            <br>5. Ne monopolisez pas les appareils…
            <br>6. … ni les vestiaires
            <br>7. Laissez votre téléphone dans votre casier
            <br>8. La musique doit vraiment adoucir les mœurs
            <br>9. Soyez prévenants avec les débutants
            <br>10. Soyez discrets</p>
            </div>
            <div class="tab-pane fade" id="o3">
            <p>Veuillez trouver ci-joint quelques réponses aux questions fréquemment posées.</p>
            <strong>Quelle tenue dois-je prévoir pour m’entraîner ?</strong>
            <br>
              Une tenue de sport, des baskets propres et une serviette.
              Pour rappel les tongs et jeans sont interdits.
            <br>
            </div>
            <div class="tab-pane fade" id="o4">
            La meilleure solution pour être en forme à l’entraînement : 
            <br>Manger trois à quatre heures avant l’exercice pour laisser le temps à l'organisme de digérer le repas. 
            <br>En effet, il vaut mieux éviter que l'appareil digestif ne travaille durant l'activité !
            <br> Mangez 5 fruits et legumes par jour!
            </div>
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