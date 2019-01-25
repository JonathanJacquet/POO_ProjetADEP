<?php
include "template/header.php";
 ?>


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
