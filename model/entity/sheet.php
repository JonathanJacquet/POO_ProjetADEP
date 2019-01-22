<?php

/**
 *
 */
class sheet extends manager
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

  public function setSheetId(int $sheetId)
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

  public function setStart(date $start)
  {
    return $this->start = $start;
  }

  public function setEnd(date $end)
  {
    return $this->end = $end;
  }

  public function setMondayMorning(bool $mondayMorning)
  {
    return $this->mondayMorning = $mondayMorning;
  }

  public function setMondayAfternoon(bool $mondayMorning)
  {
    return $this->mondayAfternoon = $mondayAfternoon;
  }

  public function setTuesdayMorning(bool $tuesdayMorning)
  {
    return $this->tuesdayMorning = $tuesdayMorning;
  }

  public function setTuesdayAfternoon(bool $tuesdayAfternoon)
  {
    return $this->tuesdayAfternoon = $tuesdayAfternoon;
  }

  public function setWednesdayMorning(bool $wednesdayMorning)
  {
    return $this->wednesdayMorning = $wednesdayMorning;
  }

  public function setWednesdayAfternoon(bool $wednesdayAfternoon)
  {
    return $this->wednesdayAfternoon = $wednesdayAfternoon;
  }

  public function setThursdayMorning(bool $thursdayMorning)
  {
    return $this->thursdayMorning = $thursdayMorning;
  }

  public function setThurdayAfternoon(bool $thurdayAfternoon)
  {
    return $this->thurdayAfternoon = $thurdayAfternoon;
  }

  public function setFridayMorning(bool $fridayMorning)
  {
    return $this->fridayMorning = $fridayMorning;
  }

  public function setFridayAfternoon(bool $fridayAfternoon)
  {
    return $this->fridayAfternoon = $fridayAfternoon;
  }

  public function setCategoryId(int $categoryId)
  {
    return $this->categoryId = $categoryId;
  }

  // -------------------- getters ---------------------

  public function getSheetId()
  {
    return $this->sheetId = $sheetId;
  }

  public function getOrganization()
  {
    return $this->organization = $organization;
  }

  public function getEntitled()
  {
    return $this->entitled = $entitled;
  }

  public function getStart()
  {
    return $this->start = $start;
  }

  public function getEnd()
  {
    return $this->end = $end;
  }

  public function getMondayMorning()
  {
    return $this->mondayMorning = $mondayMorning;
  }

  public function getMondayAfternoon()
  {
    return $this->mondayAfternoon = $mondayAfternoon;
  }

  public function getTuesdayMorning()
  {
    return $this->tuesdayMorning = $tuesdayMorning;
  }

  public function getTuesdayAfternoon()
  {
    return $this->tuesdayAfternoon = $tuesdayAfternoon;
  }

  public function getWednesdayMorning()
  {
    return $this->wednesdayMorning = $wednesdayMorning;
  }

  public function getWednesdayAfternoon()
  {
    return $this->wednesdayAfternoon = $wednesdayAfternoon;
  }

  public function getThursdayMorning()
  {
    return $this->thursdayMorning = $thursdayMorning;
  }

  public function getThurdayAfternoon()
  {
    return $this->thurdayAfternoon = $thurdayAfternoon;
  }

  public function getFridayMorning()
  {
    return $this->fridayMorning = $fridayMorning;
  }

  public function getFridayAfternoon()
  {
    return $this->fridayAfternoon = $fridayAfternoon;
  }

  public function getCategoryId()
  {
    return $this->categoryId = $categoryId;
  }

  function __construct(array $data = null)
  {
    if ($data) {
      this->hydrate($data)
    }
  }
}


 ?>
