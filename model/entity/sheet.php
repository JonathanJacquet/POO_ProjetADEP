<?php

/**
 *
 */
class sheet extends entity
{
  protected $organization;
  protected $entitled;
  protected $start;
  protected $end;
  protected $mondayMorning;
  protected $mondayAfternoon;
  protected $tuesdayMorning;
  protected $tuesdayAfternoon;
  protected $wednesdayMorning;
  protected $wednesdayAfternoon;
  protected $thursdayMorning;
  protected $thursdayAfternoon;
  protected $fridayMorning;
  protected $fridayAfternoon;
  protected $categoryId;

  // ------------------ setters ------------------

  public function setOrganization(string $organization)
  {
    $this->organization = $organization;
  }

  public function setEntitled(string $entitled)
  {
    $this->entitled = $entitled;
  }

  public function setStart(string $start)
  {
    $this->start = $start;
  }

  public function setEnd(string $end)
  {
    $this->end = $end;
  }

  public function setMonday_morning($mondayMorning)
  {
    $this->mondayMorning = $mondayMorning;
  }

  public function setMonday_afternoon($mondayAfternoon)
  {
    $this->mondayAfternoon = $mondayAfternoon;
  }

  public function setTuesday_morning($tuesdayMorning)
  {
    $this->tuesdayMorning = $tuesdayMorning;
  }

  public function setTuesday_afternoon($tuesdayAfternoon)
  {
    $this->tuesdayAfternoon = $tuesdayAfternoon;
  }

  public function setWednesday_morning($wednesdayMorning)
  {
    $this->wednesdayMorning = $wednesdayMorning;
  }

  public function setWednesday_afternoon($wednesdayAfternoon)
  {
    $this->wednesdayAfternoon = $wednesdayAfternoon;
  }

  public function setThursday_morning($thursdayMorning)
  {
    $this->thursdayMorning = $thursdayMorning;
  }

  public function setThurday_afternoon($thurdayAfternoon)
  {
    $this->thursdayAfternoon = $thursdayAfternoon;
  }

  public function setFriday_morning($fridayMorning)
  {
    $this->fridayMorning = $fridayMorning;
  }

  public function setFriday_afternoon($fridayAfternoon)
  {
    $this->fridayAfternoon = $fridayAfternoon;
  }

  public function setCategory_id($categoryId)
  {
    $this->categoryId = $categoryId;
  }

  // -------------------- getters ---------------------

  public function getSheet_id()
  {
    return $this->sheetId;
  }


  public function getOrganization()
  {
    return $this->organization;
  }

  public function getEntitled()
  {
    return $this->entitled;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function getMonday_morning()
  {
    return $this->mondayMorning;
  }

  public function getMonday_afternoon()
  {
    return $this->mondayAfternoon;
  }

  public function getTuesday_morning()
  {
    return $this->tuesdayMorning;
  }

  public function getTuesday_afternoon()
  {
    return $this->tuesdayAfternoon;
  }

  public function getWednesday_morning()
  {
    return $this->wednesdayMorning;
  }

  public function getWednesday_afternoon()
  {
    return $this->wednesdayAfternoon;
  }

  public function getThursday_morning()
  {
    return $this->thursdayMorning;
  }

  public function getThurday_afternoon()
  {

    return $this->thursdayAfternoon;


  }

  public function getFriday_morning()
  {
    return $this->fridayMorning;
  }

  public function getFriday_afternoon()
  {
    return $this->fridayAfternoon;
  }

  public function getCategory_id()
  {
    return $this->categoryId;
  }

  function __construct(array $data = null)
  {
    if ($data) {
      $this->hydrate($data);
    }
  }
}


 ?>
