<?php require('db.php');
 include('auth_session.php');
  
?>
<style>
    .moncash{
        cursor:pointer;
    }
</style>
<script >
    function zelle(){
        alert('ancotard');
    }
    
</script>
<header> <?php include('header_log.php'); ?></header>
<br> <br>
<body class="">
    <div class="jumbotron ">
    <img src="img/banner1.png" alt="" srcset="" class="img-fluid">
    <h1>Iphone 12 Pro Max </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 style="color:#000">Apple’s new iPhone 12 Pro has been available since October 23 on the manufacturer’s 
                official website. Apple’s flagship hopes to win thanks to a solid technical sheet: a 6.1 ″ Super Retina XDR OLED display in 1242 x 2688 pixels resolution, the famous A14 Bionic chip engraved in 5 nm, 
                a triple camera capable of offer a professional rendering, and 6 GB of RAM.</h5>
              

            </div>
            <div class="col-md-6">
                <h3>Pay With</h3>
                <h5>Choose yout payment methods the ammount will be calculate based on the Daily rates of currency</h5>
                <br>
                <div class="row">
                        <div class="col-md-3 col-3">
                                <!-- moncash button integration -->
                                <a href="https://wa.me/message/VCXTSGV6IQ7AA1">
                                <img src="img/pay.png" alt="" srcset="" class="img-fluid moncash" ></a>

                        </div>
                        <div class="col-md-3 col-3">
                            <!-- Zelle -->
                           
                            <img src="img/zelle.png" alt="" srcset="" class="img-fluid  moncash" height="100px"   data-toggle="modal" data-target="#exampleModal">
                        </div>
                        <div class="col-md-3 col-3">  <!-- Zelle -->
                            <img src="img/cashapp.png" alt="" srcset="" class="img-fluid  moncash" height="100px"   data-toggle="modal" data-target="#cashapp"></div>
                        <div class="col-md-3 col-3">3</div>

                </div>
            </div>
            
        </div>
    </div>
    </div>

    <!-- model -->
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Pay with Zelle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          1)Go to your Zelle account <br>
          2)Use this email account: Ancotard@solarpanelmasters.com <br>
          2)Add the Participant's user Id<br>
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
       
      </div>
    </div>
  </div>
</div>





<!--  Cashapp Modal -->
<div class="modal fade" id="cashapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Pay with Cash app</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          1)Send Us the user Id  <br>
          2)<a href="https://cash.app/$newbypat">Pay here</a>
          
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
       
      </div>
    </div>
  </div>
</div>

     
</body>


<br><br>
<?php  include_once('footer.php');?>