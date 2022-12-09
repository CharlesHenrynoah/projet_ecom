
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../acceuil/index.css">
  <title>Partie Admin</title>
  <!-- Lien Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- bootstrap js link -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
  <!-- navbar -->
  <div class="conatiner-fluid p-0">

    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <nav class="navbar navbar-expand-lg">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a href="" class="nav-link">Bienvenue Invité</a>
              </li>
          <ul>
        </nav>
      </nav>
    </nav>

    <!-- second child -->
    <div class="bg-light">
      <h3 class="text-center p-2">Gérer</h3>
    </div>

    <!-- third child -->
    <div class="row">
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="p-3">
          <p class ="text-light text-center">Nom Admin</p>
        </div>
        <!-- button*10>a.nav-link.text-lih.bg-info.my-1 -->
        <div class="button text-center">
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insérer un produit</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Voir les produits</a></button>
            <button><a href="index.php?inserer_categorie" class="nav-link text-light bg-info my-1">Insérer une catégorie  </a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Voir les catégories</a></button>
            <button><a href="index.php?inserer_marque" class="nav-link text-light bg-info my-1">Insérer un marque</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Voir les marques</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Toutes commandes</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Liste des utilisateurs</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Déconnexion</a></button>
        </div>
      </div>
    
    </div>

    <!-- fourth child -->
    <div class="container my-5">
      <?php 

      if(isset($_GET['inserer_categorie'])){
        include("inserer_categorie.php");
      }
      if(isset($_GET['inserer_marque'])){
        include("inserer_marque.php");
      }
    
      ?>
    </div>


  </div>
    

    
  
  

   <div style="position: fixed; bottom: 0; width: 100%;">
    <div class="bg-secondary p-3 text-center">
        <p style="color: white;">All rights reserved ® - Designed by AiCode-Version.10.3 </p>
    </div>
</div>

</body>
</html>