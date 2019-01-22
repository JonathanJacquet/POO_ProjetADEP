<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "";
  const dbName = "signing";
  const login = "phpmyadmin";
  const mdp = "O7dwjfb9";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
