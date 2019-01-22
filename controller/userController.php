<?php 

require "model/usersManagement.php";

class userController 
{

public function userLogin() {
//On vérifie si le formulaire a été rempli
if (!empty($_POST)) {
  //On nettoie les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  $usersManagement = new compteManagement();
  if (getUserByName($_POST["name"])) {
    $user = getUserByName($_POST["name"]);
    if (password_verify($_POST["password"], $user["password"])) {
        initializeUserSession($user);
      if ($_SESSION["user"]["status"] === "admin") {
        redirectTo("admin");
      }
      if ($_SESSION["user"]["status"] === "teacher"){
        redirectTo("teacher");
      }
    }
  }
}
require("view/loginView.php");
}

function userLogout()  {
  logout();
  redirectTo("");
}
}

?>
