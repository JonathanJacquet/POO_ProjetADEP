<?php

/**
 *
 */
class lessonsController
{

  public function showListLessons()
  {
    $sheetsManagement = new sheetsManagement();
    $id = $_GET["id"];
    $sheet = $sheetsManagement->getSheetWithLessons($id);
    var_dump($sheet);
    require "view/lessonsView.php";
  }



//   function showAddLesson()
//   {
//     $value = "Ajouter";
//     if(!empty($_POST) && $_POST["button"] === "Ajouter")
//     {
//       if(clearForm($_POST))
//       {
//           addLesson($_POST);
//           redirectTo("lessonsList");
//       }
//     }
//     require "view/lessonsAddView.php";
// }
//   }

}


 ?>
