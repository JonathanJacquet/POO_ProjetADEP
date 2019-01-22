<?php
class categoriesManagement extends manager{
  public function getCategorises(){
    $query = $this->getDb()$query->('SELECT * FROM categories');
    $data = $query->fetchAll(PDO::FETCH_CLASS, "categorie");
    $query->closeCursor();
    return $data;
  }

public function getCategory($id){
    $query = $this->getDb()prepare->('SELECT * FROM catégories WHERE id = ? ');
    $query->excute([$id]);
    $query->fetchAll(PDO::FETCH_CLASS, 'categorie');
    $categorie = $query->fetch();

    $query->closeCursor();

    return $categorie;
  }



  public function addCategory(category $category) {
    $query = $this->getDb()->prepare("INSERT INTO categories(gategory_name) VALUES(:category_name)");
    $result = $query->execute([
      "category_name" => $compte->getNom()
    ]);

    return $result;
  }


  function deleteCategory($id) {
    $request = $this->getDb()->prepare("DELETE FROM categories WHERE id = ?");
    $request->execute([$id]);

    $request->closeCursor();
    return $result;
  }


  function updateCategory(category $category) {
    $request = $this->getDb()->prepare("UPDATE categories SET category_name WHERE id = ?");
    $request->execute([$category->get(), $category->get()]);

    $request->closeCursor();

    return $request;
  }

}
}
 ?>
