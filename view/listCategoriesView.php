<?php
include "template/header.php";
$categories = getCategories();
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
      <td><?php echo $category["category_name"] ?></td>
      <td>
        <a href="categoryUpdate?id=<?php echo $category["category_id"]?>" class="btn btn-warning">Modifier</a>
        <a href="categoryDelete?id=<?php echo $category["category_id"]?>" class="btn btn-danger">Supprimer</a>
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
