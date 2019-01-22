<?php 
include "template/header.php";
?>
<div class="container text-center mt-5">
<h2>Bonjour <?php echo $_SESSION["user"]["name"];?> liste emargement du</h2>
</div>

<h2 class="text-center mt-5 mb-3">Mes cours</h2>

<div class="dropdown text-center mb-5">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Matière
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>


  </div>
</div>
<?php include "template/footer.php";?>