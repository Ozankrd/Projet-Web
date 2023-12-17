<!-- Afficher le CV du coach selectionne -->
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
<div class="container d-flex justify-content-center">
<div class="card mt-5" style="width:50%;">
    <div class="card-header text-center">
    <h4>CV</h4>
    </div>
    <div class="card-body">
        <?php
        $prenomCV=$_GET["p"];
        // on recupere les donnees dans le fichier XML 
        $xmldata = simplexml_load_file("xml/$prenomCV.xml") or die("Failed to load");
        foreach($xmldata->children() as $cv) {    
        // on affiche ces details du CV sur cette page  
        ?>
        <div class="form-group row">
        <label for="prenom">Prénom</label>
        <div class="col-sm-6">
        <input id="prenom"  type="text" value="<?php echo "$cv->prenom"; ?>" disabled>
        </div>
        </div>  
        <div class="form-group row">
        <label for="formation">Formation</label>
        <div class="col-sm-6">
        <input id="formation"  type="text" value="<?php echo "$cv->formation"; ?>" disabled>
        </div>
        </div>
        <div class="form-group row">
        <label for="exp">Expérience</label>
        <div class="col-sm-6">
        <input id="exp"  type="text" value="<?php echo "$cv->experience"; ?>" disabled>
        </div>
        </div>     
        <?php 
        }
        ?>
        <div class="col mt-5 pt-5 text-center">
        <a href="parcourir.html"><input type="submit" value="Retour"></a>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>