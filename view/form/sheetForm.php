<form class="mx-auto w-50 my-5 container" method="post" action="">
  <input type="hidden" class="form-control" name="sheet_id" value="<?php echo (isset($sheet)?$sheet->getSheetId():""); ?>">
  <div class="form-group">
    <label for="organization">Organisme</label>
    <input type="text" class="form-control" id="organization" name="organization" placeholder="Organisme" value="<?php echo (isset($sheet)?$sheet->getOrganization():""); ?>">
  </div>
  <div class="form-group">
    <label for="entitled">Matière</label>
    <input type="text" class="form-control" id="entitled" name="entitled" placeholder="Intitule" value="<?php echo (isset($sheet)?$sheet->getEntitled():""); ?>">
  </div>
  <div class="form-group">
    <label for="start">Date de début :</label>
    <input type="date" id="start" name="start" min="2018-01-10" max="3000-04-30" value="<?php echo (isset($sheet)?$sheet->getStart():""); ?>">
  </div>
  <div class="form-group">
    <label for="end">Date de fin:</label>
    <input type="date" id="end" name="end" min="2018-01-10" max="3000-04-30" value="<?php echo (isset($sheet)?$sheet->getEnd():""); ?>">
  </div>
  <div>
    <label for="monday_morningChoice">Lundi Matin</label>
  </div>
  <div>
    <input type="radio" id="monday_morningChoice1" name="monday_morning" <?php echo (isset($sheet) && $sheet->getMondayMorning() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="monday_morningChoice1">Non</label>
    <input type="radio" id="monday_morningChoice2" name="monday_morning" <?php echo (isset($sheet) && $sheet->getMondayMorning() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="monday_morningChoice2">Oui</label>
  </div>
  <div>
    <label for="monday_afternoonChoice">Lundi Après-Midi</label>
  </div>
  <div>
    <input type="radio" id="monday_afternoonChoice1" name="monday_afternoon" <?php echo (isset($sheet) && $sheet->getMondayAfternoon() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="monday_afternoonChoice1">Non</label>
    <input type="radio" id="monday_afternoonChoice2" name="monday_afternoon" <?php echo (isset($sheet) && $sheet->getMondayAfternoon() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="monday_afternoonChoice2">Oui</label>
  </div>
  <div>
    <label for="tuesday_morningChoice">Mardi Matin</label>
  </div>
  <div>
    <input type="radio" id="tuesday_morningChoice1" name="tuesday_morning" <?php echo (isset($sheet) && $sheet->getTuesdayMorning() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="tuesday_morningChoice1">Non</label>
    <input type="radio" id="tuesday_morningChoice2" name="tuesday_morning" <?php echo (isset($sheet) && $sheet->getTuesdayMorning() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="tuesday_morningChoice2">Oui</label>
  </div>
  <div>
    <label for="tuesday_afternoonChoice">Mardi Après-Midi</label>
  </div>
  <div>
    <input type="radio" id="tuesday_afternoonChoice1" name="tuesday_afternoon" <?php echo (isset($sheet) && $sheet->getTuesdayAfternoon() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="tuesday_afternoonChoice1">Non</label>
    <input type="radio" id="tuesday_afternoonChoice2" name="tuesday_afternoon" <?php echo (isset($sheet) && $sheet->getTuesdayAfternoon() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="tuesday_afternoonChoice2">Oui</label>
  </div>
  <div>
    <label for="wednesday_morningChoice">Mercredi Matin</label>
  </div>
  <div>
    <input type="radio" id="wednesday_morningChoice1" name="wednesday_morning" <?php echo (isset($sheet) && $sheet->getWednesdayMorning() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="wednesday_morningChoice1">Non</label>
    <input type="radio" id="wednesday_morningChoice2" name="wednesday_morning" <?php echo (isset($sheet) && $sheet->getWednesdayMorning() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="wednesday_morningChoice2">Oui</label>
  </div>
  <div>
    <label for="wednesday_afternoonChoice">Mercredi Après-Midi</label>
  </div>
  <div>
    <input type="radio" id="wednesday_afternoonChoice1" name="wednesday_afternoon" <?php echo (isset($sheet) && $sheet->getWednesdayAfternoon() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="wednesday_afternoonChoice1">Non</label>
    <input type="radio" id="wednesday_afternoonChoice2" name="wednesday_afternoon" <?php echo (isset($sheet) && $sheet->getWednesdayAfternoon() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="wednesday_afternoonChoice2">Oui</label>
  </div>
  <div>
    <label for="thursday_morningChoice">Jeudi Matin</label>
  </div>
  <div>
    <input type="radio" id="thursday_morningChoice1" name="thursday_morning" <?php echo (isset($sheet) && $sheet->getThursdayMorning() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="thursday_morningChoice1">Non</label>
    <input type="radio" id="thursday_morningChoice2" name="thursday_morning" <?php echo (isset($sheet) && $sheet->getThursdayMorning() == 1?"checked = 'checked'":"") ?>  value="1">
    <label for="thursday_morningChoice2">Oui</label>
  </div>
  <div>
    <label for="thursday_afternoonChoice">Jeudi Après-Midi</label>
  </div>
  <div>
    <input type="radio" id="thursday_afternoonChoice1" name="thursday_afternoon" <?php echo (isset($sheet) && $sheet->getThursdayAfternoon() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="thursday_afternoonChoice1">Non</label>
    <input type="radio" id="thursday_afternoonChoice2" name="thursday_afternoon" <?php echo (isset($sheet) && $sheet->getThursdayAfternoon() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="thursday_afternoonChoice2">Oui</label>
  </div>
  <div>
    <label for="friday_morningChoice">Vendredi Matin</label>
  </div>
  <div>
    <input type="radio" id="friday_morningChoice1" name="friday_morning" <?php echo (isset($sheet) && $sheet->getFridayMorning() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="friday_morningChoice1">Non</label>
    <input type="radio" id="friday_morningChoice2" name="friday_morning" <?php echo (isset($sheet) && $sheet->getFridayMorning() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="friday_morningChoice2">Oui</label>
  </div>
  <div>
    <label for="friday_afternoonChoice">Vendredi Après-Midi</label>
  </div>
  <div>
    <input type="radio" id="friday_afternoonChoice1" name="friday_afternoon" <?php echo (isset($sheet) && $sheet->getFridayAfternoon() == 0?"checked = 'checked'":"") ?> value="0">
    <label for="friday_afternoonChoice1">Non</label>
    <input type="radio" id="friday_afternoonChoice2" name="friday_afternoon" <?php echo (isset($sheet) && $sheet->getFridayAfternoon() == 1?"checked = 'checked'":"") ?> value="1">
    <label for="friday_afternoonChoice2">Oui</label>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="button" value="<?php echo $value; ?>" class="btn btn-primary"><?php echo $value; ?></button>
    </div>
  </div>
</form>
