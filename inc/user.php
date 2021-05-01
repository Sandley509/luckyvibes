    <!-- Layout include -->
 <?php include_once('layout.php'); ?> 
    <?php include_once('db.php'); ?>

 
 <h1>NOS UTILISATEURS</h1>
     
<style>
tr{
  width:100px;
}
</style>

<?php
            $sql = "SELECT * FROM users";
            $result = $pdo->query($sql);
              ?>
            <?php  while($row = $result->fetch_assoc()) {?>
           <?php 
        ?>
         
           <!-- tableau integration -->
  <table class="table table-hover mt-0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Accreditation</th>
      <th scope="col">Action</th>
    </tr><br>
  </thead>
  <tbody>
       <div class="row">
            <div class="col-lg-3">
              
              <tr class="table-success">
              
              <td><?= $row["id"]?> </td>
              <td><?= $row["pseudo"]?> </td>
              <td><?= $row["permissions"]?> </td>
              <td><div class="btn btn-danger"> Supprimer</div> </td>
         </div>
          </div>



  </tbody>
</table>
            
   
        <?php  }?>


   
