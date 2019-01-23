<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/lab/POO_HackUnTHon/",
    "status" => ["anonymous", "teacher", "admin"],
    "defaultRoute" => ""
  ];
}

 ?>
