
<body style=" background-color: #150035;">
<?php  
include_once('header_log.php');

?>
<style>
    .raf{
        padding: 30px 0;
    background: #9e4efc;
    background: -moz-linear-gradient(top, #9e4efc 0%, #570dc8 100%);
    background: -webkit-linear-gradient(top, #9e4efc 0%, #570dc8 100%);
    background: linear-gradient(to bottom, #9e4efc 0%, #570dc8 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#9e4efc', endColorstr='#570dc8', GradientType=0);
    -webkit-box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
    -moz-box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
    box-shadow: 0px 6px 0px 0px rgba(58, 0, 144, 1);
    border-bottom: 6px solid #3a0090;
    height:170px;
    }
    .button{
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
    width: 150px;
    height:50px;
    border: 0;
    margin-bottom: 25px;
    cursor: pointer;
    }
</style>
<br><br><br><br>
<div class="container-fluid pt-4">

    <!-- Raff container for actually -->
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron raf">
                <div class="row">
                <div class="col-md-2">
                    <img src="images/raf.png" alt="" srcset="" class="img-fluid ml-4" width="100" style="border-radius:13px">
                </div>
                <div class="col-md-10">

                <h1>Raff for an iphone 12 pro max</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, id. Harum quaerat dolorum ad.</p>
                <div class="button" onclick="location.href='paypal.php'">
                    Buy Tickets
                </div>
                </div>
                </div>
                

                </div>
            </div>
            <div class="col-md-4">
                        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            
            
            
            </div>
        </div>
     
</div>
</body>




