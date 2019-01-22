<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "userLogin"
    ],
    //page principale des professeurs
    "teacher" => [
      "admin",
      "showTeacherView",
      "status" => "teacher"
    ],
    //page principale des admins
    "admin" => [
      "admin",
      "showAdminView",
      "status" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~USERS~~~~~~~~~~~~~~~~~~~
    "usersList" => [
      "admin",
      "showUsersList",
      "status" => "admin"
    ],
    "userAdd" => [
      "admin",
      "showAddUser",
      "status" => "admin"
    ],
    "userUpdate" => [
      "admin",
      "showUpdateUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "userDelete" => [
      "admin",
      "showDeleteUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "usersSort" => [
      "admin",
      "showUsersList",
      "status" => "admin"
    ],
    //La deconnexion
    "userLogout" => [
      "user",
      "userLogout",
      "status" => "teacher"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~SHEET~~~~~~~~~~~~~~~~~~~
    "sheetsList" => [
      "sheets",
      "showListSheets",
      "status" => "admin"
    ],
    "sheetAdd" => [
      "sheets",
      "showAddSheet",
      "status" => "admin"
    ],
    "sheetUpdate" => [
      "sheets",
      "showUpdateSheet",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "sheetDelete" => [
      "sheets",
      "showDeleteSheet",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~CATEGORY~~~~~~~~~~~~~~~~~~~
    "categoriesList" => [
      "category",
      "showListCategories",
      "status" => "admin"
    ],
    "categoryAdd" => [
      "category",
      "showAddCategories",
      "status" => "admin"
    ],
    "categoryUpdate" => [
      "category",
      "showUpdateCategories",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "categoryDelete" => [
      "category",
      "showDeleteCategories",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
  ];
}

 ?>
