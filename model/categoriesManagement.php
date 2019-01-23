<?php
class categoriesManagement extends manager{
  public function getCategorises(){
    $query = $this->getDb()('SELECT * FROM categories');
    $rusult = $query->fetchAll(PDO::FETCH_CLASS, "categorie");
    $query->closeCursor();
    return new catgory($result);
  }

  public function getCategory($id){
    $query = $this->getDb()('SELECT * FROM catégories WHERE id = ? ');
    $query->excute([$id]);
    $query->fetchAll(PDO::FETCH_CLASS, 'categorie');
    $categorie = $query->fetch();

    $query->closeCursor();

    return $categorie;
  }



  public function addCategory(category $category) {
    $query = $this->getDb()("INSERT INTO categories(gategory_name) VALUES(:category_name)");
    $result = $query->execute([
      "category_name" => $compte->getName()
    ]);

    return $result;
  }


  function deleteCategory($id) {
    $request = $this->getDb()("DELETE FROM categories WHERE id = ?");
    $request->execute([$id]);

    $request->closeCursor();
    return $result;
  }


  function updateCategory(category $category) {
    $request = $this->getDb()("UPDATE categories SET category_name WHERE id = ?");
    $request->execute([$category->getName(), $category->getName()]);

    $request->closeCursor();

    return $request;
  }

}
?>
