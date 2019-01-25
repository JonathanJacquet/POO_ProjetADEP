<?php


class adminController {


function showAddUser(){
//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
$value = "Ajouter";
if(!empty($_POST) && $_POST["button"] === "Ajouter") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    if($_POST["user_password"] === $_POST["user_password2"]) {
            addUser($_POST);
            //Fin du programme, je redirige avec un message
            redirectTo("usersList");
        }
    }
    require "view/userAddView.php";
}
function showUpdateUser(){
    $value = "Modifier";
    //~~~~~~~~~~~~~~~Modifie un utilisateur~~~~~~~~~~~~~~~
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $user = getUser($id);
    }
    if(!empty($_POST) && $_POST["button"] === "Modifier") {
        //Je nettoie le form et sécurise les données
        foreach($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
        }
            if(updateUser($_POST, $id)) {
            //Fin du programme, je redirige avec un message
            redirectTo("usersList");
        }
    }
    require "view/userAddView.php";
}
function showDeleteUser() {
    deleteUser($_GET["id"]);
    redirectTo("usersList");
}

function showAdminView(){
    require "view/adminView.php";
}
function showTeacherView() {
    require "view/teacherView.php";
}
function showUsersList() {
//     if(!empty($_POST))
//     {
//     $users = sortUser($_POST);
//     }
//     else{
//     $users = getUsers();
//     }
//   require "view/listUsersView.php";
// }
  $usersManagement = new usersManagement();
  $users = $usersManagement->getUsers();
  require "view/listUsersView.php";
  }
}
?>
