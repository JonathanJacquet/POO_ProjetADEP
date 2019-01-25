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

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function setMondayMorning($mondayMorning)
  {
    $this->mondayMorning = $mondayMorning;
  }

  public function setMondayAfternoon($mondayMorning)
  {
    $this->mondayAfternoon = $mondayAfternoon;
  }

  public function setTuesdayMorning(bool $tuesdayMorning)
  {
    $this->tuesdayMorning = $tuesdayMorning;
  }

  public function setTuesdayAfternoon(bool $tuesdayAfternoon)
  {
    $this->tuesdayAfternoon = $tuesdayAfternoon;
  }

  public function setWednesdayMorning(bool $wednesdayMorning)
  {
    $this->wednesdayMorning = $wednesdayMorning;
  }

  public function setWednesdayAfternoon(bool $wednesdayAfternoon)
  {
    $this->wednesdayAfternoon = $wednesdayAfternoon;
  }

  public function setThursdayMorning(bool $thursdayMorning)
  {
    $this->thursdayMorning = $thursdayMorning;
  }

  public function setThursdayAfternoon(bool $thursdayAfternoon)
  {
    $this->thursdayAfternoon = $thursdayAfternoon;
  }

  public function setFridayMorning(bool $fridayMorning)
  {
    $this->fridayMorning = $fridayMorning;
  }

  public function setFridayAfternoon(bool $fridayAfternoon)
  {
    $this->fridayAfternoon = $fridayAfternoon;
  }

  public function setCategoryId(int $categoryId)
  {
    $this->categoryId = $categoryId;
  }

  // -------------------- getters ---------------------

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

  public function getMondayMorning()
  {
    return $this->mondayMorning;
  }

  public function getMondayAfternoon()
  {
    return $this->mondayAfternoon;
  }

  public function getTuesdayMorning()
  {
    return $this->tuesdayMorning;
  }

  public function getTuesdayAfternoon()
  {
    return $this->tuesdayAfternoon;
  }

  public function getWednesdayMorning()
  {
    return $this->wednesdayMorning;
  }

  public function getWednesdayAfternoon()
  {
    return $this->wednesdayAfternoon;
  }

  public function getThursdayMorning()
  {
    return $this->thursdayMorning;
  }

  public function getThursdayAfternoon()
  {
    return $this->thursdayAfternoon;
  }

  public function getFridayMorning()
  {
    return $this->fridayMorning;
  }

  public function getFridayAfternoon()
  {
    return $this->fridayAfternoon;
  }

  public function getCategoryId()
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
