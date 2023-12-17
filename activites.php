<!-- Activites -->
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


<!-- Section -->
<div class="container my-5 py-5">
<h3 class="text-center text-white my-5 py-5">Activités sportives</h3>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


<!-- Contrôles -->
<a class="carousel-control-prev" h role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->

        <div class="carousel-item active">
            <div class= "row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                    <div class="card mb-2">
                        <img  src="img/musculation.jpg">
                        <div class="card-body text-center">
                                <h4 >Musculation</h4>
                                <p >Méthode d'entraînement sportif visant à accroître le volume et la force musculaire.</p>
                                <form action="" method="post">
                                    <input name="b1" type="submit" value="Sélectionner" ></input>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img src="img/fitness.jpg">
                        <div class="card-body text-center">
                            <h4 >Fitness</h4>
                            <p >Ensemble d'activités de mise en forme comprenant de la musculation, du stretching et du cardio-training.</p>
                            <form action="" method="post">
                                <input name="b2" type="submit" value="Sélectionner" ></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img src="img/biking.jpg">
                        <div class="card-body text-center">
                            <h4 class=>Biking</h4>
                            <p >Le biking est un cours de cyclisme indoor, qui consiste en l'utilisation de vélos fixes en salle, et en groupe, le tout en musique.</p>
                            <form action="" method="post">
                                <input name="b3" type="submit" value="Sélectionner"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img  src="img/cardio.jpg">
                        <div class="card-body text-center">
                            <h4 > Cardio-Training</h4>
                            <p >Le cardio-training est un entraînement qui joue sur le contrôle de la fréquence cardiaque lors d'un effort.</p>
                            <form action="" method="post">
                                <input name="b4" type="submit" value="Sélectionner" class="btn btn-outline-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class= "row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                    <img  src="img/collectif.png">
                        <div class="card-body text-center">
                            <h4>Cours Collectifs</h4>
                            <p >Les cours collectifs ont comme particularité de se sociabiliser avec des personnes ayant les mêmes objectifs.</p>
                            <form action="" method="post">
                                <input name="b5" type="submit" value="Sélectionner" ></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Afficher les details de chaque prof de sport -->
            <?php
                $conn=mysqli_connect('localhost','root','');
                $d=mysqli_select_db($conn,'omnes');
                $sql="";
                if( isset($_POST['b1'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "musculation"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        if(mysqli_num_rows($req1)){  
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe'><button type='button' >Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe'><button type='button' >Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV'><button type='button'>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                        }
                        else
                        {
                            echo "coach supprime";
                        }
                    }
                    else
                    {
                        echo " error";
                    }
                  }
                  if( isset($_POST['b2'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "fitness"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        if(mysqli_num_rows($req1)){  
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe1=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV1=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe1'><button type='button' >Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe1'><button type='button' >Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV1'><button type='button' >Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                        }
                        else
                        {
                            echo "coach supprime";
                        }
                    }
                    else
                    {
                        echo " error";
                    }
                  }
                  if( isset($_POST['b3'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "biking"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        if(mysqli_num_rows($req1)){  
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe2=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV2=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe2'><button type='button' >Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe2'><button type='button' >Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV2'><button type='button' '>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                        }
                        else
                        {
                            echo "coach supprime";
                        }
                    }
                    else
                    {
                        echo " error";
                    }
                
                  }
                  if( isset($_POST['b4'])  ){
                    $sql='SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = "cardio"';
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        if(mysqli_num_rows($req1)){  
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe3=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV3=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe3'><button type='button' >Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe3'><button type='button' >Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV3'><button type='button' '>Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                        }
                        else
                        {
                            echo "coach supprime";
                        }
                    }
                    else
                    {
                        echo " error";
                    }
                
                  }
                  if( isset($_POST['b5'])  ){
                    $sql="SELECT Nom,Prenom,Photo,Specialite,Mail,Bureau FROM coach WHERE Specialite = 'collectif'";
                    if($d)
                    {
                        echo "<table class='table mt-5 pt-5'>";
                        echo "<tr>";
                        echo "<th>" . "Nom" . "</th>";
                        echo "<th>" . "Prenom" . "</th>";
                        echo "<th>" . "Photo" . "</th>";
                        echo "<th>" . "Specialité" . "</th>";
                        echo "<th>" . "Mail" . "</th>";
                        echo "<th>" . "Bureau" . "</th>";
                        $req1=mysqli_query($conn, $sql); 
                        if(mysqli_num_rows($req1)){  
                        while($data=mysqli_fetch_assoc($req1))
                        {
                            $spe4=$data['Specialite'];
                            echo "<tr>";
                            echo "<td>" . $data['Nom'] . "</td>";
                            $prenomCV4=$data['Prenom'];
                            echo "<td>" . $data['Prenom'] . "</td>";
                            $image = $data['Photo'];
                            echo "<td>" . "<img src='$image' height='80' width='80'>" . "</td>";
                            echo "<td>" . $data['Specialite'] . "</td>";
                            echo "<td>" . $data['Mail'] . "</td>";
                            echo "<td>" . $data['Bureau'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        echo "
                        <div class='container'>
                        <div class='row'>
                        <div class='col text-center'>
                        <a href='connexionB.php?spe=$spe4'><button type='button' >Prendre un RDV</button></a>
                        <a href='connexionB.php?spe=$spe4'><button type='button' >Communiquer</button></a>
                        <a href='displayCV.php?p=$prenomCV4'><button type='button' >Voir son CV</button></a>
                        </div>
                        </div>
                        </div>";
                        }
                        else
                        {
                            echo "coach supprime";
                        }
                    }
                    else
                    {
                        echo " error";
                    }
                
                }
                
                mysqli_close($conn);
            ?>
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