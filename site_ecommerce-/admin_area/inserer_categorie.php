<?php
include("../includes/connect.php");


if(isset($_POST['insert_cat'])){
  $cat_title =  mysqli_real_escape_string($con, $_POST['cat_title']);

  $insert_cat = "INSERT INTO categories VALUES ('$cat_title')";



  if(mysqli_query($con, $insert_cat)){
      echo "<script>alert('La catégorie a été insérée avec succès !')</script>";
      echo "<script>window.open('index.php?view_categories','_self')</script>";
  } else {
      echo "<script>alert('Une erreur est survenue lors de l'insertion de la catégorie!')</script>";
  }

}

?>

<title>Insérer Catégorie</title>
<form action="" method ="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Catégorie à insérer" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insérer Catégorie">
</form>


