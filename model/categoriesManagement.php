<?php
class categoriesManagement extends manager{

  //methode to gt all atgoris
  public function getCategories(){
    $db = $this->getDb();
    $query = $db->query("SELECT * FROM categories");
    $result = $query->fetchall(PDO::FETCH_CLASS, "categories");
    $query->closeCursor();
    return $result;
  }


//methode to gt on atogory
  public function getCategory($id){
    $db = $this->getDb();
    $query = $db->query('SELECT * FROM categories WHERE id = ? ');
    $query->excute([$id]);
    $query->fetch(PDO::FETCH_CLASS, 'categorie');
    $categorie = $query->fetch();

    $query->closeCursor();

    return $categorie;
  }


//methode to update a category
  public function addCategory(category $category) {
    $query = $this->getDb()("INSERT INTO categories(gategory_name) VALUES(:category_name)");
    $result = $query->execute([
      "category_name" => $compte->getName()
    ]);

    return $result;
  }



//methode to get one category
  function deleteCategory($id) {
    $request = $this->getDb()("DELETE FROM categories WHERE id = ?");
    $request->execute([$id]);

    $request->closeCursor();
    return $result;
  }


//methode to update a category
  function updateCategory(category $category) {
    $request = $this->getDb()("UPDATE categories SET category_name WHERE id = ?");
    $request->execute([$category->getName(), $category->getName()]);

    $request->closeCursor();

    return $request;
  }

}
?>
