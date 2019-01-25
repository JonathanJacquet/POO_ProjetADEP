<?php
class categories extends entity
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

  public function getCategory(){
    return $this->name;
  }

}
?>
