<?php
include "template/header.php";
?>
<!--
~~~~~~~~~~~~~~~| UTILISATEURS |~~~~~~~~~~
-->
<div class="card-group m-5">
  <div class="card text-white bg-info">
    <article class="card-body text-center">
      <h5 class="card-title">Utilisateurs</h5>
      <p class="card-text">Consulter les utilisateurs.</p>
      <a href="usersList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
  </div>
<!--
~~~~~~~~~~~~~~| FEUILLES |~~~~~~~~~~~~~~
-->
  <div class="card text-white bg-success">
    <article class="card-body text-center">
      <h5 class="card-title">Feuilles</h5>
      <p class="card-text">Consuter les feuilles d'émargements.</p>
      <a href="sheetsList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
  </div>
<!--
~~~~~~~~~| CATEGORIES |~~~~~~~~
-->
  <div class="card text-white bg-warning">
    <article class="card-body text-center">
      <h5 class="card-title">Catégories</h5>
      <p class="card-text">Consulter les catégories.</p>
      <a href="categoriesList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
  </div>
</div>
<?php
include "template/footer.php";
 ?>
