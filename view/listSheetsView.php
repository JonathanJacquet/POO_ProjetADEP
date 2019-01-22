<?php
include "template/header.php";
?>
<a href="sheetAdd">Ajouter</a>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Trier par:
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Date</button>
    <button class="dropdown-item" type="button">Nom de prof</button>
    <button class="dropdown-item" type="button">Matière</button>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Organisme</th>
      <th scope="col">Intitulé</th>
      <th scope="col">Start</th>
      <th scope="col">end</th>
      <th scope="col">Lundi_matin</th>
      <th scope="col">Lundi_aprèm</th>
      <th scope="col">Mardi_matin</th>
      <th scope="col">Mardi_aprèm</th>
      <th scope="col">Mercredi_matin</th>
      <th scope="col">Mercredi_aprèm</th>
      <th scope="col">Jeudi_matin</th>
      <th scope="col">Jeudi_aprèm</th>
      <th scope="col">Vendredi_matin</th>
      <th scope="col">Vendredi_aprèm</th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($sheets as $key => $sheet) {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $sheet->getSheetId() ?></th>
      <td><?php echo $sheet->getOrganization() ?></td>
      <td><?php echo $sheet->getEntitled() ?></td>
      <td><?php echo $sheet->getStart() ?></td>
      <td><?php echo $sheet->getEnd() ?></td>
      <td><?php echo $sheet->getMondayMorning() ?></td>
      <td><?php echo $sheet->getMondayAfternoon() ?></td>
      <td><?php echo $sheet->getTuesdayMorning() ?></td>
      <td><?php echo $sheet->getTuesdayAfternoon() ?></td>
      <td><?php echo $sheet->getWednesdayMorning() ?></td>
      <td><?php echo $sheet->getWednesdayAfternoon() ?></td>
      <td><?php echo $sheet->getThursdayMorning() ?></td>
      <td><?php echo $sheet->getThursdayAfternoon() ?></td>
      <td><?php echo $sheet->getFridayMorning() ?></td>
      <td><?php echo $sheet->getFridayAfternoon() ?></td>
      <td>
      <a class="btn" href="sheetUpdate?id=<?php echo $sheet->getSheetId() ?>">Modifier</a>
      <a class="btn" href="sheetDelete?id=<?php echo $sheet->getSheetId() ?>">Supprimer</a>
      <?php
      }
      ?>
      </td>
    </tr>
  </tbody>
</table>

<?php
include "template/footer.php";
?>
