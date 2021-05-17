 <?php include('header.php'); ?>
<br> 
<body style="background-color: #150035; ">
  <style>

      .jumbotron{
        background: -webkit-linear-gradient(top, #fdb125 45%, #e07e1e 48%, #fcb100 85%);;
         /* background-color:#F79F1A; */
         border-radius:18px;
         width:300px auto;
         box-shadow: 2px 2px 2px 2px #000;
      }
      hr{
          height:10px;
          width:100px;
          border-radius:10px;
          color:#fff;
          background-color:#fff;
      }
       
      .def{
                padding: 14px 30px;
            background: #9e4efc;
            background: -moz-linear-gradient(top, #9e4efc 0%, #570dc8 100%);
            background: -webkit-linear-gradient(top, #9e4efc 0%, #570dc8 100%);
            background: linear-gradient(to bottom, #9e4efc 0%, #570dc8 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#9e4efc', endColorstr='#570dc8', GradientType=0);
            border-radius: 5px;
            color: #ffffff;
            font-size: 20px;
            font-weight: 400;
            font-family: 'Anton', sans-serif;
            -webkit-box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
            -moz-box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
            box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
            text-shadow: 5px 5px 0px rgba(88, 19, 184, .8);
            width: 50px auto;
            height:50px;
            border: 0;
            margin-bottom: 25px;
            cursor: pointer;
           
      }
      .container-fluid{
        margin:0;
      }
  </style>


<br><br><br>
<!-- Caroussel start -->
<!-- Caroussel Section Items -->
<div id="carouselExampleCaptions" class="carousel slide mt-4 mt-sm-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="inc/img/banner0.png" class="d-block w-100" alt="...">
    
      </div>
      <div class="carousel-item ">
        <img src="inc/img/banner00.png" class="d-block w-100" alt="...">
       
      </div>
      <!-- <div class="carousel-item ">
      <img src="inc/img/banner1.png" class="d-block w-100" alt="...">
    
      </div> -->
      <div class="carousel-item ">
      <img src="inc/img/banner2.png" class="d-block w-100" alt="...">
    
      </div>
      <!-- <div class="carousel-item ">
      <img src="inc/img/banner3.png" class="d-block w-100" alt="...">
    
      </div> -->
      <div class="carousel-item ">
      <img src="inc/img/banner4.png" class="d-block w-100" alt="...">
    
      </div>
      <div class="carousel-item ">
      <img src="inc/img/banner5.png" class="d-block w-100" alt="...">
    
      </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>




  <br><br><br>
    

<?php require('faq.php'); ?>
</body>
<br><br>
<?php  include_once('footer.php');?>