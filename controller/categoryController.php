<?php

class categoryController
{
  public function showListCategories() {
  $categoriesManagement = new categoriesManagement();
  $categories = $categoriesManagement->getCategories();
    require "view/listCategoriesView.php";
  }

  public function showAddCategories(){
    $categoriesManagement = new categoriesManagement();
    $categoriesManagement = new category($_POST);
    $categoriesManagement->addCategory($category)
    redirectTo("categoriesList");

  }

  public function showUpdateCategories()
  $categoriesManagement = new categoriesManagement();

  {
    $id = htmlspecialchars($_GET["id"]);
    $category = getCategory($_GET["id"]);
    if(!empty($_POST)) {
      if (updateCategories($_POST, $id)) {
        redirectTo("categoriesList");
      }
    }
    require "view/modifyCategorieView.php";
  }


  public function showDeleteCategories()
  $categoriesManagement = new categoriesManagement();

  {
    if(deleteCategories($_GET["id"])) {
      redirectTo("categoriesList");
    }
  }

  ?>
