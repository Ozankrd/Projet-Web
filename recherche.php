<?php  
 $connect = mysqli_connect("localhost", "root", "", "omnes");  
 $query ="SELECT * FROM coach ORDER BY cID DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!-- Rechercher les coachs -->
<!DOCTYPE html>
<html>
<head>
    <title>Projet </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">	
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<style>
table 
{
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}
</style>

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
<!-- Afficher le tableau des coachs -->
<div class="container-fluid my-5 py-5"> 
<div class="my-5 py-5"> 
<h3 class="text-center text-white ">Tableau de données des coachs</h3>  
<br />  
<div >  
<table id="coachlist" class="table table-striped table-bordered" style="width:100%">  
    <thead>  
        <tr>  
            <td>Nom</td>  
            <td>Prenom</td>  
            <td>Photo</td>  
            <td>Spécialité</td>  
            <td>Mail</td>  
            <td>Bureau</td> 
        </tr>  
    </thead>
    <?php  
    while($row = mysqli_fetch_array($result))  
    {  
    $image = $row['Photo'];

            echo
           '<tr>  
            <td>'.$row["Nom"].'</td>  
            <td>'.$row["Prenom"].'</td>';
            echo "<td>" ."<img src='$image' height='80' width='80'>" . "</td>";
            echo '  
            <td>'.$row["Specialite"].'</td>  
            <td>'.$row["Mail"].'</td>  
            <td>'.$row["Bureau"].'</td>  
            </tr>';  
    }  
    ?>  
</table>  
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
        <p >Copyright © Omnes</p>
      </div>
    
</footer>


<script>  
$(document).ready(function () {
    $('#coachlist').DataTable({
        paging: false,      
    });
});  
 </script> 
</body>
</html>