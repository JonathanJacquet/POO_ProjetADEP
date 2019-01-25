<?php
include "template/header.php";

?>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Catégories</th>
        <th scope="col">Modifier/Supprimer</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($categories as $key => $category) {
    ?>
    <tr>
      <th scope="row"><?php echo $category["category_id"] ?></th>
      <td><?php echo $category->getCategorises(); ?></td>
      <td>
        <a class="btn" href="categoryUpdate?id=<?php echo $category->getCategories() ?>">Modifier</a>
        <a class="btn" href="categoryDelete?id=<?php echo $category->getCategories()?>">Supprimer</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
include "template/footer.php";
 ?>
