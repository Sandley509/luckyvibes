<?php include('header.php'); ?>

   

    <!--=============================================
                  Signup part start
    ==============================================-->
    <section id="claim_part" class="client_bg client_bg2 sign_form_part">
        <div class="container">
         
                <div class="col-lg-7 offset-lg-5">
                    <div class="main_signup">
                        <h4>Signup</h4>
                        <p>Register quickly to get all other facilities</p>
                        <form action="inc/signup_inc.php" method="POST">
                            <div class="signup_inner">
                                <div class="row fast_input">
                                    <div class="col sign_input_inner">
                                        <input type="text" placeholder="your full name" name="fullname">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="col sign_input_inner">
                                        <input type="text" placeholder="user name" name="username">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="sign_input_inner">
                                    <input type="email" placeholder="your e-mail here" name="email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="sign_input_inner">
                                    <input type="password" placeholder="your password here" name="psw">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="sign_input_inner">
                                    <input type="texte" placeholder="your Adress here" name="adresse">
                                    <i class="fas fa-location-arrow"></i>
                                </div>
                                <div class="sign_input_inner">
                                    <input type="texte" placeholder="your phone number" name="phone">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="sign_input_inner">
                                
                                <p color="#fff"> <span></span>By checking the box you are agreeing to ours <a href="terms.php"> terms and conditions</a>       </p>
                                <input type="checkbox" name="" id="" required>
                                </div>
                                <button type="submit" name="submit">Signup</button>
                                <p>Do you have already an account? <a href="login.php">Sign in</a></p>
                                <h6>
                                    <span>Or Register with</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                </h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================
                    Signup part end
    ===========================================   -->
<?php include_once('footer.php'); ?>