<?php
class lessonsManagement extends manager
{
  //Function that retrieves all the lessons in DB
  function getAllLessons()
  {
    $query = $this->_db->query("SELECT * FROM lessons");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return new lessons($result);
  }

  //Function that retrieves a single lesson of the DB based on its ID
  function getLesson($id)
  {
    $query = $this->_db->prepare("SELECT * FROM lessons WHERE lesson_id = ?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return new lessons($result);
  }

  //Add a lesson in DB
  function addLesson(lessons $lessons)
  {
    $query = $this->_db->prepare("INSERT INTO lessons (week, date, morning, afternoon, evening) VALUES (:week, :date, :morning, :afternoon, :evening)");
    $result = $query->execute([
      "week" => $lessons->getWeek(),
      "date" => $lessons->getDate(),
      "morning" => $lessons->getMorning(),
      "afternoon" => $lessons->getAfternoon(),
      "evening" => $lessons->getEvening(),
    ]);
    $query->closeCursor();
    return $result;
  }

  //Update lesson in DB
  function updateLesson(lessons $lessons)
  {
    $query = $this->_db->prepare("UPDATE lessons SET week = :week, date = :date, morning = :morning, afternoon = :afternoon, evening = :evening WHERE lesson_id = :lesson_id)");
    $result = $query->execute([
      "week" => $lessons->getWeek(),
      "date" => $lessons->getDate(),
      "morning" => $lessons->getMorning(),
      "afternoon" => $lessons->getAfternoon(),
      "evening" => $lessons->getEvening(),
    ]);
    $query->closeCursor();
    return $result;
  }
  //Delete lesson in DB
  function deleteLesson($id)
  {
    $query = $this->_db->prepare("DELETE FROM lessons WHERE lesson_id = ?");
    $result = $query->execute([$id]);
    $query->closeCursor();
    return $result;
  }
}
?>
