<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "localhost";
  const dbName = "signing";
  const login = "root";
  const mdp = "";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=signing" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
