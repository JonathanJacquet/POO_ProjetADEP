<?php

/**
 *
 */
class sheet extends entity
{

  protected $sheetId;
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
  protected $thurdayAfternoon;
  protected $fridayMorning;
  protected $fridayAfternoon;
  protected $categoryId;

  // ------------------ setters ------------------

  public function setSheet_id(int $sheetId)
  {
    return $this->sheetId = $sheetId;
  }

  public function setOrganization(string $organization)
  {
    return $this->organization = $organization;
  }

  public function setEntitled(string $entitled)
  {
    return $this->entitled = $entitled;
  }

  public function setStart(string $start)
  {
    return $this->start = $start;
  }

  public function setEnd(string $end)
  {
    return $this->end = $end;
  }

  public function setMonday_morning($mondayMorning)
  {
    return $this->mondayMorning = $mondayMorning;
  }

  public function setMonday_afternoon($mondayAfternoon)
  {
    return $this->mondayAfternoon = $mondayAfternoon;
  }

  public function setTuesday_morning($tuesdayMorning)
  {
    return $this->tuesdayMorning = $tuesdayMorning;
  }

  public function setTuesday_afternoon($tuesdayAfternoon)
  {
    return $this->tuesdayAfternoon = $tuesdayAfternoon;
  }

  public function setWednesday_morning($wednesdayMorning)
  {
    return $this->wednesdayMorning = $wednesdayMorning;
  }

  public function setWednesday_afternoon($wednesdayAfternoon)
  {
    return $this->wednesdayAfternoon = $wednesdayAfternoon;
  }

  public function setThursday_morning($thursdayMorning)
  {
    return $this->thursdayMorning = $thursdayMorning;
  }

  public function setThurday_afternoon($thurdayAfternoon)
  {
    return $this->thurdayAfternoon = $thurdayAfternoon;
  }

  public function setFriday_morning($fridayMorning)
  {
    return $this->fridayMorning = $fridayMorning;
  }

  public function setFriday_afternoon($fridayAfternoon)
  {
    return $this->fridayAfternoon = $fridayAfternoon;
  }

  public function setCategory_id($categoryId)
  {
    return $this->categoryId = $categoryId;
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
    return $this->thurdayAfternoon;
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
