<?php

class categoryController{

  //get all gategories
  public function showListCategories() {
    $categoriesManagement = new categoriesManagement();
    $categories = $categoriesManagement->getCategories();
    require "view/listCategoriesView.php";
  }

  //add gategory
  public function showAddCategories(){
    if(!empty($_POST) && isset($_POST["addCategory"])) {
      $catgoriesManager = new catgoriesManager();
      $category= new catgory($_POST);
      if($categoriesManager->addCategory($category))
      redirectTo("categoriesList");

    }
  }

  //update category
  public function showUpdateCategories(){
    $id = htmlspecialchars($_GET["id"]);
    $categoriesManager = new categoriesManagement();
    $category = $categoriesManagement->getCategory($id);
    if(!empty($_POST)) {
      if ($categoriesManager->updateCategories($_POST)) {
        redirectTo("categoriesList");

        require "view/modifyCategorieView.php";
      }
    }
  }


  //delete gategory
  public function showDeleteCategories(){
    if(isset($_GET["id"])) {
      $id = htmlspecialchars($_GET("id"));
      $categoriesManager = new categoriesManagement();
      if($categoriesManagement->deleteCategory($id))
      redirectTo("categoriesList");
    }
  }

}

?>
