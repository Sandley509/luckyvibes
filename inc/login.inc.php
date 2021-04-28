<?php 
session_start();
require('db.php');

if (isset($_POST['submit'])) {

    $email=mysqli_real_escape_string($pdo,$_POST['email']);
    $psw=$_POST['psw'];
      // error handlers
    // letsh check for empty field
    if( empty($psw & $email)){
        header("Location: ../login.php?=Empty_field");
        exit();

    }
    
           else{

            
               $sql="SELECT * FROM users WHERE email='$email' ";
               $result=mysqli_query($pdo,$sql);
               $resultCheck=mysqli_num_rows($result);
               if ($resultCheck < 1) {
                header("Location: ../login.php?=error");
                exit();
               }
               else{
                   if($row=mysqli_fetch_assoc($result)){
                        $hashedpasswordCheck=password_verify($psw,$row['psw']);
                        if($hashedpasswordCheck == false){
                            header("Location: ../login.php?=wrong password");
                            exit();
                        }elseif($hashedpasswordCheck==true){
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['u_id']=$row['id'];
                            $_SESSION['username']=$row['username'];
                        
                            header("Location: index_login.php");
                            exit();



                        }
                   }
               }

           }
    }
else{
    header("Location: ../login.php=empty");
    exit();
}



?>