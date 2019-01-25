<?php
class category extends entity
{

//attributs
  protected $name;

//Constructor
  public function __construct($data = null){
    //Permet d'hydrater mon objet
    if($data){
      $this->hydrate($data);
    }
  }


//setter/getter
  public function setCategory($name){
    $this->name = $name;
  }

  var_dump($name);
  public function getCategory(){
    return $this->name;
  }

}
?>
