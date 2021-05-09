<?php require('db.php');
 include('auth_session.php');
  
?>
<header> <?php include('header_log.php'); ?></header>
<br> 
<body style="background-image: url('img/bg.jpg');background-position: center;
background-repeat: no-repeat;
background-size: cover; ">
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
  </style>
    
<!-- heading slider images -->
  <section>
  <div class="container-fluid mt-2 " style="max-width:100%">
                        
            <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- 
            Indicators -->
              <ul class="carousel-indicators">
                
            <li data-target="#demo" data-slide-to="0" class="active"></li>
                
            <li data-target="#demo" data-slide-to="1"></li>
                <li 
            data-target="#demo" data-slide-to="2"></li>
              </ul>

              <!-- 
            The slideshow -->
              <div class="carousel-inner m-0 p-0">
                
            <div class="carousel-item active">
                  <img src="img/banner0.png"   alt="Luckyvibes" class="img-fluid" width="100%">
                </div>
                <div 
            class="carousel-item">
                  <img src="img/banner00.png"   alt="luckyvibes" class="img-fluid" width="100%">
                </div>
                <div 
            class="carousel-item">
                  <img src="img/banner3.png" alt="luckyvibes" class="img-fluid" width="100%">
                </div>
              </div>

              
            <!-- Left and right controls -->
              <a class="carousel-control-prev" 
            href="#demo" data-slide="prev">
                <span 
            class="carousel-control-prev-icon"></span>
              </a>
              <a 
            class="carousel-control-next" href="#demo" data-slide="next">
                
            <span class="carousel-control-next-icon"></span>
              </a>

            </div>
 
    </div>

  </section>


<!-- raffle  -->
<section>

<div class="container">
    
    <h1 class="text-white">Current Raffle</h1>
      <hr>
        <div class="row">
                        
        </div>
    </div>

</section>


   
   <!-- First Section of raffle -->
    <section>
        
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4 col-4">
                         <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                        </div>
                        <div class="col-md-8 col-8">
                           <h3 class="text-white">Iphone 12 pro max</h3>
                           <p class="text-white">Win a Galaxy zfold2 for less than 15$</p>
                           <div class=" btn def"> <a href="12promax.php"><span style="text-decoration:none; color:#fff">Buy tickets</span></a>  </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="col-md-4"></div>
        
        </div>
    </div>


    </section>
   <!-- second Section of raffle -->
    <section>
        
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4 col-4">
                         <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                        </div>
                        <div class="col-md-8 col-8">
                           <h3 class="text-white">Galaxy Zflod2</h3>
                           <p class="text-white">Win a Galaxy zfold2 for less than 15$</p>
                           <div class="btn def">Buy tickets</div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="col-md-4"></div>
        
        </div>
    </div>


    </section>

     <!-- thirth Section of raffle -->
     <section>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-4 col-4">
                             <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                            </div>
                            <div class="col-md-8 col-8">
                               <h3 class="text-white">S20 Ultra</h3>
                               <p class="text-white">Win an Iphone 12 pro max for less than 15$</p>
                         <div class="btn def">Buy tickets</div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="col-md-4"></div>
            
            </div>
        </div>
    
    
        </section>
</body>
<br><br>
<?php  include_once('footer.php');?>