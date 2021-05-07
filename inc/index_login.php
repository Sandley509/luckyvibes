<?php require('db.php');
 include('auth_session.php');
  
?>
<header> <?php include('header_log.php'); ?></header>
<br> 
<body style="background-image: url('img/bg.jpg');background-position: center;
background-repeat: no-repeat;
background-size: cover; >
  
    
<!-- heading slider images -->
  <section>
  <div class="container-fluid mt-2">
                        
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
              <div class="carousel-inner">
                
            <div class="carousel-item active">
                  <img src="img/banner1.png"   alt="Los Angeles" class="img-fluid" width="100%">
                </div>
                <div 
            class="carousel-item">
                  <img src="img/banner2.png"   alt="Chicago" class="img-fluid" width="100%">
                </div>
                <div 
            class="carousel-item">
                  <img src="img/banner3.png" alt="New York" class="img-fluid" width="100%">
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
        <div class="row">
            <div class="col-md-8 ">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4">
                         <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                        </div>
                      
                        <div class="col-md-8">
                           <h3>Iphone 12 pro max</h3>
                           <p style="color:#000">Win an Iphone 12 pro max for less than 15$</p>
                     <div class="btn btn-danger">Buy tickets</div>
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
                        <div class="col-md-4">
                         <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                        </div>
                        <div class="col-md-8">
                           <h3>Galaxy Zflod2</h3>
                           <p style="color:#000">Win a Galaxy zfold2 for less than 15$</p>
                     <div class="btn btn-danger">Buy tickets</div>
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
                            <div class="col-md-4">
                             <img src="img/raf.png" alt="" srcset="" class="img-fluid" width="100px" style="border-radius:15px">
                            </div>
                            <div class="col-md-8">
                               <h3>S20 Ultra</h3>
                               <p style="color:#000">Win an Iphone 12 pro max for less than 15$</p>
                         <div class="btn btn-danger">Buy tickets</div>
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