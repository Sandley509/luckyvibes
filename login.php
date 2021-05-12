<?php  include_once('header.php');?>


    <section id="claim_part" class="client_bg client_bg2 sign_form_part login_form_part mt-0">
        <div class="container">
            
         <div class="row signup_form_pad log_form_pad">
         <center>
                <div class="col-lg-12 offset-lg-7">
                    <div class="main_signup login_main">
                        <h4>Log in</h4>
                        <p>Log in quickly to get all other facilities</p>
                        <form action="inc/login.inc.php" method="POST">
                            <div class="signup_inner log_inner">
                                <div class="sign_input_inner">
                                    <input type="email" placeholder="your e-mail here" name="email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="sign_input_inner">
                                    <input type="password" placeholder="your password here" name="psw">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <button type="submit" name="submit">Log in</button>
                                <a href="#">Forget password</a>
                                <p class="log_acc_yet">Don’t you have any account yet? <a href="sign_up.php">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                </center>
            </div>
        </div>
    </section>

    <!--=============================================
                    Login part end
    ===========================================   -->

    <?php include_once('footer.php'); ?>