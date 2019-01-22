<?php
/**
 * Class to connect to the data base
 */
class dataBase {
<<<<<<< HEAD
  const host  = "localhost";
  const dbName = "signing";
  const login = "root";
  const mdp = "";
=======

  const host  = "localhost";
  const dbName = "signing";
  const login = "phpmyadmin";
  const mdp = "Azerty59";
>>>>>>> 4d62fb9bdabeded684c118ae2138dbf937bdd1cf
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=signing" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
