
<?php

        if(isset($_POST['submit']) && session_start()){
            
                        session_abort();
                        header('Location:login.php');
       
}
?>