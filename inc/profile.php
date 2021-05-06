<?php include('auth_session.php'); 

require('header_log.php');



?>

<style>
body{
    margin-top:20px;
    background: #f5f5f5;
}

.ui-w-100 {
    width: 100px !important;
    height: auto;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.user-view-table td:first-child {
    width: 9rem;
}
.user-view-table td {
    padding-right: 0;
    padding-left: 0;
    border: 0;
}

.text-light {
    color: #babbbc !important;
}

.card .row-bordered>[class*=" col-"]::after {
    border-color: rgba(24,28,33,0.075); 
    font-size: 170% !important;
}

</style>

<body>
     <br><br><br>


     <?php
     
     require('db.php');
      require('functions.php');

     $id= userid();
            $sql = "SELECT * FROM users where id='$id' ";
            $result = $pdo->query($sql);
              ?>
            <?php  while($row = $result->fetch_assoc()) {?>
           
<!-- users information -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey flex-grow-1 container-p- mt-4">

            <div class="media align-items-center py-3 mb-3">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
              <div class="media-body ml-4">
                <h4 class="font-weight-bold mb-0"><?= $row["fullname"]?> <span class="text-muted font-weight-normal">@<?= $row["username"]?> </span></h4>
                <div class="text-muted mb-2">ID:4586<?= $row["id"]?> </div>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit</a>&nbsp;
                <a href="javascript:void(0)" class="btn btn-default btn-sm">Profile</a>&nbsp;
                <a href="javascript:void(0)" class="btn btn-default btn-sm icon-btn"><i class="fa fa-mail"></i></a>
              </div>
            </div>

           
            <div class="card">
              
              <hr class="border-light m-0">
              <div class="card-body">

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Username:</td>
                      <td><?= $row["username"]?></td>
                    </tr>
                    <tr>
                      <td>Name:</td>
                      <td><?= $row["fullname"]?></td>
                    </tr>
                    <tr>
                      <td>E-mail:</td>
                      <td><?= $row["email"]?></td>
                    </tr>
                    <tr>
                      <td>Adresse:</td>
                      <td><?= $row["adresse"]?></td>
                    </tr>
                  </tbody>
                </table>

                
                <h6 class="mt-4 mb-3">Contacts</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Phone:</td>
                      <td><?= $row["phone"]?></td>
                    </tr>
                  </tbody>
                </table>

                <h6 class="mt-4 mb-3">Security</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td>Password:</td>
                      <td>
                      <?= $row["psw"]?>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>

              </div>
            </div>

          </div>

</body>
<?php  }?>



<?php require('footer.php'); ?>