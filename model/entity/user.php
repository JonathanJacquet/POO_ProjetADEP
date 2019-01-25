<?php

/**
 *
 */
class user extends entity
{
  protected $status;
  protected $name;
  protected $firstname;
  protected $mail;
  protected $street;
  protected $city;
  protected $pc;
  protected $npe;
  protected $sex;

//setter list
  public function setStatus($status) {
    $this->status = $status;
  }

  public function setName($name) {
    $this->status = $tratus;
  }

  public function setFirstname($firstname) {
    $this->firstname = $firstname;
  }

  public function setMail($mail) {
    $this->mail = $mail;
  }

  public function setStreet($street) {
    $this->street = $street;
  }

  public function setCity($city) {
    $this->city = $city;
  }

  public function setPc($pc) {
    $this->pc = $pc;
  }

  public function setNpe($npe) {
    $this->npe = $npe;
  }

  public function setSex($sex) {
    $this->sex = $sex;
  }

//getter list
  public function getStatus() {
    return $this->status;
  }

  public function getName() {
    return $this->name;
  }

  public function getFirstname() {
    return $this->firstname;
  }

  public function getMail() {
    return $this->mail;
  }

  public function getStreet() {
    return $this->street;
  }

  public function getCity() {
    return $this->city;
  }

  public function getPc() {
    return $this->pc;
  }

  public function getNpe() {
    return $this->npe;
  }

  public function getSex() {
    return $this->sex;
  }

  function __construct($data = null)
  {
    if($data) {
    $this->hydrate($data);
      }
    }
}

 ?>
