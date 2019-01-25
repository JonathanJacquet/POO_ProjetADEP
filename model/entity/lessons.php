<?php

/**
 *
 */
class lessons extends entity
{

  // Attribut : lessons_id(int), week(int), date(datetime), morning(bool), afternoon(bool), evening(bool) et sheet_id(int)

  protected $lessonsId;
  protected $week;
  protected $date;
  protected $morning;
  protected $afternoon;
  protected $evening;
  protected $sheetId;

  // ---------------------- setters ---------------------------

  public function setLessonsId(int $lessonsId)
  {
    $this->lessonsId = $lessonsId;
  }

  public function setWeek(int $week)
  {
    $this->week = $week;
  }

  public function setDate(datetime $date)
  {
    $this->date = $date;
  }

  public function setMorning(bool $morning)
  {
    $this->morning = $morning;
  }

  public function setAfternoon(bool $afternoon)
  {
    $this->afternoon = $afternoon;
  }

  public function setEvening(bool $evening)
  {
    $this->evening = $evening;
  }

  public function setSheetId(int $sheetId)
  {
    $this->sheetId = $sheetId;
  }

  // ------------------------- getters -----------------------

  public function getLessonsId()
  {
    $this->lessonsId;
  }

  public function getWeek()
  {
    $this->week;
  }

  public function getDate()
  {
    $this->date;
  }

  public function getMorning()
  {
    $this->morning;
  }

  public function getAfternoon()
  {
    $this->afternoon;
  }

  public function getEvening()
  {
    $this->evening;
  }

  public function getSheetId()
  {
    $this->sheetId;
  }

  // ------------------- contruct ----------------------

  function __construct(array $data = null)
  {
    if ($data) {
      $this->hydrate($data);
    }
  }
}


 ?>
