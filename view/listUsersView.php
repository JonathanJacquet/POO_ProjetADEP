<?php
include "template/header.php";
 ?>

 <form class="container" method="post">
 <div class="form-row">
   <div class="form-group col-md-4">
     <label for="inputState">Triée par :</label>
     <select name="order" id="inputState" class="form-control">
       <option  value="name">Nom</option>
       <option  value="firstname">Prénom</option>
       <option  value="status">Statut</option>
     </select>
   </div>
   <button type="submit" class="btn btn-dark  col-md-2 mt-4" style="height: 3rem;">Trier</button>
 </div>
 </form>

 <table class="table table-light">
   <thead>
     <tr>
       <th scope="col">Nom</th>
       <th scope="col">Prénom</th>
       <th scope="col">Statut</th>
     </tr>
   </thead>
   <tbody>
     <?php
         foreach ($users as $key => $user) {
     ?>
         <tr>
           <td><?php echo $user->getName(); ?></td>
           <td><?php echo $user->getFirstname(); ?></td>
           <td><?php echo $user->getStatus(); ?></td>
         </tr>
     <?php
         }
     ?>
   </tbody>
 </table>




 <?php

 include "template/footer.php";
  ?>
