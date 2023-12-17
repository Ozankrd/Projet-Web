<!-- Saisie pour ajouter ou supprimmer un coach -->
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
<div class="container my-5 py-5">
    <div class="row h-100 justify-content-center align-items-center">
    <form action="adminTraitement.php" method="post">
    <div class="col">
    <div class="form-group"> 
        <label for="text">Nom : </label>  
        <input type="text" class="form-control" name="nom"/><br/>
    </div>
    <div class="form-group">
        <label for="text">Prenom : </label>  
        <input type="text" class="form-control" name="prenom"/><br/>
    </div>
    <div class="form-group"> 
        <label for="text">Specialité : </label>  
        <input type="text" class="form-control" name="spe"/><br/>
    </div>
    <div class="form-group"> 
        <label for="email">Mail : </label> 
        <input type="email" class="form-control" id="email" name="courrier"/><br/> 
    </div>
    <div class="form-group"> 
        <label for="text">Bureau (Salle) : </label>  
        <input type="text" class="form-control" name="salle"/><br/>
    </div>
    </div>
    <div class="col text-center">
        <a class='btn btn-primary' href="admin.php">Retour</a>
        <input type="submit"  class='btn btn-primary' value="Ajouter un coach" name="add">  
        <input type="submit"  class='btn btn-primary' value="Supprimer un coach" name="delete"> 
    </div>  
    </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>