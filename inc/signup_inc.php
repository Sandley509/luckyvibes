
    <?php


if (isset($_POST['submit'])) {
    // database include
    include_once('db.php');
    // recover values
    $fullname=mysqli_real_escape_string($pdo,$_POST['fullname']);
    $username=mysqli_real_escape_string($pdo,$_POST['username']);
    $email=mysqli_real_escape_string($pdo,$_POST['email']);
    $psw=($_POST['psw']);
    $adresse=mysqli_real_escape_string($pdo,$_POST['adresse']);
    $phone=mysqli_real_escape_string($pdo,$_POST['phone']);
   


    // error handlers
    // letsh check for empty field
    if(empty($fullname|| $username || $email || $psw || $adresse || $phone)){
        header("Location: signup.php=?Empty_field");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$^/",$username & $fullname)) {
            header("Location:signup.php=?Character_invalid");
            exit();
        }
            else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM users WHERE username='$username'";
                $result=mysqli_query($pdo,$sql);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck > 0){
                    header("Location: signup.php?=user_already_taken_choose_another_one");
                    exit();
                }else{
                    // lets Hashing the password
                  
                        $hashpassword=password_hash($psw,PASSWORD_DEFAULT);
                    
                    
                    $sql="INSERT INTO users (fullname,username,email,psw,adresse,phone)
                                     VALUES ('$fullname','$username','$email','$hashpassword','$adresse','$phone')";
                    mysqli_query($pdo,$sql);


                    $_SESSION['username']=$username;
                    header("Location: ../login.php?=Connection_Success");
              
                    exit();
                }
            }
        }

    }
    
  

    
    



















else{
    header("Location: ../inc/register.php?=error-LOGIN");
    exit();
}

?>