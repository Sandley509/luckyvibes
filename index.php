
<?php 
include_once('header.php');

?>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})


		var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhon
        e|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if( isMobile.any() ){
      window.location.href="mobile.php";
      //window.location.href="https://ijustpayht.com/comingsoon/";

}

	</script>
    <!--=============================================
                    Banner part start
    ==============================================-->
    <section id="claim_part">
        <div class="container">
            <div class="row">
            <div class="col-sm-6 col-12 col-md-7 col-lg-6 pr-md-0 offset-lg-1">
                    <div class="claim_text">
                        <h2>Welcome to luckyvibe !!!</h2>
                        <h2>where everyday is somebody's luckyday</h2>
                        <p class="d-sm-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                            <span>Excepteur sint occaecat cupidatat non proident, sunt inrunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</span></p>
                        <p class="d-none d-sm-block d-md-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <span>Excepteur sint occaecat cupidatat non proident, sunt inrunt mollit anim id est laborum.</span></p>
                        <div class="clm_btn">
                            <a href="#">Buy the ticket</a>
                        </div>
                    </div>
                    </div>
                <div class="col-sm-5 col-12 col-md-5 pl-md-0">
                    <div class="claim_img">
                        <img src="images/2.png" class="img-fluid" alt="claim_part">
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <!--=============================================
                    Banner part end
    ==============================================-->

    <!--=============================================
                    Game part start
    ==============================================-->
    <section id="game_part">
        <div class="container text-center">
            <div class="row flow_sha d-none d-md-block">
                <div class="col-lg-12">
                    <div class="game_flow">
                        <div class="row m-0">
                            <div class="col-md-4 border_shadow">
                                <div class="game_text">
                                    <h2><span>0</span><span>1</span></h2>
                                    <h3>Register</h3>
                                    <p>Open an account</p>
                                </div>
                            </div>
                            <div class="col-md-4 border_shadow">
                                <div class="game_text">
                                    <h2>02</h2>
                                    <h3>Paid your ticket</h3>
                                    <p>Buy one or two  or three even 10 ticket </p>
                                </div>
                            </div>
                            <div class="col-md-4 border_shadow">
                                <div class="game_text">
                                    <h2>03</h2>
                                    <h3>Enjoy</h3>
                                    <p>You have the Chance to win </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flow_sha d-md-none">
                <div class="col-lg-12">
                    <div class="game_flow">
                        <div class="row flow_slider">
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2><span>0</span><span>1</span></h2>
                                    <h3>Register</h3>
                                    <p>Download the app and signup for account</p>
                                </div>
                            </div>
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2>02</h2>
                                    <h3>Get Ready</h3>
                                    <p>Deposit &amp; get ready for play betting</p>
                                </div>
                            </div>
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2>03</h2>
                                    <h3>Enjoy</h3>
                                    <p>Betting more and more &amp; enjoy game</p>
                                </div>
                            </div>
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2><span>0</span><span>1</span></h2>
                                    <h3>Register</h3>
                                    <p>Download the app and signup for account</p>
                                </div>
                            </div>
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2>02</h2>
                                    <h3>Get Ready</h3>
                                    <p>Deposit &amp; get ready for play betting</p>
                                </div>
                            </div>
                            <div class="col-lg-12 border_shadow">
                                <div class="game_text">
                                    <h2>03</h2>
                                    <h3>Enjoy</h3>
                                    <p>Betting more and more &amp; enjoy game</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="game_head">
                        <span>Purchasable Items</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"> 
                            <img src="images/iphone-12-mini-white.png">
                            <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <h6 class="title text-dots"><a href="#">iPhone 12 mini</a></h6>
                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$1280</span>
                                    <del class="price-old">$1980</del>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- action-wrap -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/iphone12.jpg">
                        <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <h6 class="title text-dots"><a href="#">iPhone 12 Pro Max</a></h6>
                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$280</span>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- action-wrap -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/iphone-xr.png"> 
                        <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <h6 class="title text-dots"><a href="#">iPhone Xr</a></h6>
                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$280</span>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- action-wrap -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/zflod2.jpg">
                            <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                        </div>
                        <figcaption class="info-wrap">
                            <h6 class="title text-dots"><a href="#">zfold2</a></h6>
                            <div class="action-wrap">
                                <a href="#" class="btn btn-primary btn-sm float-right"> Order </a>
                                <div class="price-wrap h5">
                                    <span class="price-new">$280</span>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- action-wrap -->
                        </figcaption>
                    </figure> <!-- card // -->
                </div> <!-- col // -->
                </div> <!-- row.// -->
                
                
                </div> 
                <!--container end-->










            
    </section> 
    <!--=============================================
                    Game part end
    ===========================================   -->

    <!--=============================================
                    Claim part start
    ===========================================   -->
    <section id="claim_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 col-md-5 pl-md-0">
                    <div class="claim_img">
                        <img src="images/2.png" class="img-fluid" alt="claim_part">
                    </div>
                </div>
                <div class="col-sm-6 col-12 col-md-7 col-lg-6 pr-md-0 offset-lg-1">
                    <div class="claim_text">
                        <h2>Get The chance to Win an iphone 12 pro max</h2>
                        <p class="d-sm-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
                            <span>Excepteur sint occaecat cupidatat non proident, sunt inrunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</span></p>
                        <p class="d-none d-sm-block d-md-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <span>Excepteur sint occaecat cupidatat non proident, sunt inrunt mollit anim id est laborum.</span></p>
                        <div class="clm_btn">
                            <a href="#">Buy the ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================================
                    Claim part end
    ===========================================   -->

    <!--=============================================
                    Membership part start
    ===========================================   -->
    <section id="pricing_part">
        <div class="container text-center p-md-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="pricing_head">
                        <h2>Our Tickets Prices</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6  price_main">
                    <div class="pricing_inner">
                        <div class="pricing_inner_head">
                            <h2>Featured</h2>
                        </div>
                        <h3>Zfold-2</h3>
                        <h4>15.00</h4>
                        <p>USD/Per tickets</p>
                        <ul>
                            <li>Get the chance to win</li>
                            <li>Online access to the RAF</li>
                            <li>New Zfold-2 full unlocked</li>
                            <li>With box + Chargeur</li>
                            
                        </ul>
                        <a href="#">Buy tickets</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 price_main">
                    <div class="pricing_inner">
                        <div class="pricing_inner_head">
                            <h2>New</h2>
                        </div>
                        <h3>Iphone 12 pro Max</h3>
                        <h4>9.99</h4>
                        <p>USD/Per Month</p>
                        <ul>
                            <li>Get The Chance to Win</li>
                            <li>Online access to the RAF</li>
                            <li>New Iphone 12 Pro MAx</li>
                            <li>With box + Chargeur</li>
                           
                        </ul>
                        <a href="#">Buy tickets</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--=============================================
                    Membership part end
    ===========================================   -->

    <!--=============================================
                    Tounament part Start
    ===========================================   -->
    <section id="tounament_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pl-md-0">
                    <div class="touna_head_left">
                        <h3>Frequently Ask Questions
                            <div class="effect2">
                                <img src="images/shape.png" alt="shape">
                            </div>
                        </h3>

                        <div class="accordion touna_left_inner" id="accordionExample">
                            <div class="card add_border">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01. How can get my ticker</span>
                                        <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Register To the App, choose a Raf,  Choose your payments methods, Paid the tickets and Win.... </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>02. How do we Choose the winner?</span>
                                        <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>We make a RAf ONLINE the Number who win Get The Gift !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>03. if i win how did i get my gift?</span>
                                        <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incnt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn btn-link collapsed " type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <span>04. What are the benefits for gambiling?</span>
                                        <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>When you win we will get all your information that you registred with and the prices will be delivered to you by a Worldwide Shipping Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pr-md-0 jhamela">
                    <div class="touna_head_left">
                        <h3>Today’s Tournaments
                            <div class="effect3">
                                <img src="images/shape.png" alt="shape">
                            </div>
                        </h3>
                    </div>
                    <div class="row pad_today">
                        <div class="col-lg-5">
                            <div class="coun_text">
                                <h4>New Raf Delay :</h4>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="coundown cou_mar">
                                <span class="coun_down"></span>
                                <p>Hours</p>
                            </div>
                            <div class="coundown">
                                <span class="coun_down2"></span>
                                <p>Mins</p>
                            </div>
                            <div class="coundown">
                                <span class="coun_down3"></span>
                                <p>Secs</p>
                            </div>
                        </div>
                    </div>
                    <div class="tun_scroll">
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>01. Rozina Khan</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll1.png" alt="scroll1"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>02. Gozina Hezzez</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll2.png" alt="scroll2"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>03. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll3.png" alt="scroll3"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>04. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll4.png" alt="scroll4"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>05. Omer Rinki</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll5.png" alt="scroll5"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>06. Aaron Jack</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll1.png" alt="scroll1"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>07. Jarvis Malcolm</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll2.png" alt="scroll2"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>08. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll3.png" alt="scroll3"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>09. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll4.png" alt="scroll4"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>10. Omer Rinki</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll5.png" alt="scroll5"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>11. Rozina Khan</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll1.png" alt="scroll1"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>12. Gozina Hezzez</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll2.png" alt="scroll2"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>13. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll3.png" alt="scroll3"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>14. Redwan Rizaj</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll4.png" alt="scroll4"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                        <div class="row scl_pad">
                            <div class="col-lg-5 col-5">
                                <div class="toun_scroll_name tun_border">
                                    <h5>15. Omer Rinki</h5>
                                </div>
                            </div>
                            <div class="col-lg-2 col-2 text-center">
                                <div class="toun_scroll_flag tun_border"><img src="images/scroll5.png" alt="scroll5"></div>
                            </div>
                            <div class="col-lg-5 col-5 text-right">
                                <div class="toun_scroll_name tun_border">
                                    <p>$365.25</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!--=============================================
                    Tounament part end
    ===========================================   -->

    <?php  include_once('footer.php');?>