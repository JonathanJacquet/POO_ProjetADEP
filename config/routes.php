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
    //route basique
    "" => [
      "user",
      "userLogin"
    ],
    //page principale des professeurs
    "teacher" => [
      "admin",
      "showTeacherView",
      "getStatus" => "teacher"
    ],
    //page principale des admins
    "admin" => [
      "admin",
      "showAdminView",
      "getStatus" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~USERS~~~~~~~~~~~~~~~~~~~
    "usersList" => [
      "admin",
      "showUsersList",
      "getStatus" => "admin"
    ],
    "userAdd" => [
      "admin",
      "showAddUser",
      "getStatus" => "admin"
    ],
    "userUpdate" => [
      "admin",
      "showUpdateUser",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    "userDelete" => [
      "admin",
      "showDeleteUser",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    "usersSort" => [
      "admin",
      "showUsersList",
      "getStatus" => "admin"
    ],
    //La deconnexion
    "userLogout" => [
      "user",
      "userLogout",
      "getStatus" => "teacher"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~SHEET~~~~~~~~~~~~~~~~~~~
    "sheetsList" => [
      "sheet",
      "showListSheets",
      "getStatus" => "admin"
    ],
    "sheetAdd" => [
      "sheet",
      "showAddSheet",
      "getStatus" => "admin"
    ],
    "sheetUpdate" => [
      "sheet",
      "showUpdateSheet",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    "sheetDelete" => [
      "sheet",
      "showDeleteSheet",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~CATEGORY~~~~~~~~~~~~~~~~~~~
    "categoriesList" => [
      "category",
      "showListCategories",
      "getStatus" => "admin"
    ],
    "categoryAdd" => [
      "category",
      "showAddCategories",
      "getStatus" => "admin"
    ],
    "categoryUpdate" => [
      "category",
      "showUpdateCategories",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    "categoryDelete" => [
      "category",
      "showDeleteCategories",
      ["id" => ["integer"]],
      "getStatus" => "admin"
    ],
    "LessonsList" => [
      "lessons",
      "showListLessons",
      ["id" => ["integer"]]
    ]
  ];
}
 ?>
