<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Alexander Raf</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <style>
        
      .logout{
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
            width: 150px auto;
            border: 0;
            margin-bottom: 25px;
            cursor: pointer;
      }
      .logout:hover{
                background: #ff39dc;
            background: -moz-linear-gradient(top, #ff39dc 0%, #a60084 100%);
            background: -webkit-linear-gradient(top, #ff39dc 0%, #a60084 100%);
            background: linear-gradient(to bottom, #ff39dc 0%, #a60084 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ff39dc', endColorstr='#a60084', GradientType=0);
            -webkit-box-shadow: 0px 6px 0px 0px rgba(102, 19, 85, 1);
            -moz-box-shadow: 0px 6px 0px 0px rgba(102, 19, 85, 1);
            box-shadow: 0px 6px 0px 0px rgba(102, 19, 85, 1);
            text-shadow: 5px 5px 0px rgba(166, 0, 132, 0.8);
      }
    </style>
</head>


<body>
    <!--=============================================
                    Menu part start
    ===========================================   -->
    <nav class="navbar navbar-expand-md menu_head">
        <div class="container p-md-0">
            <a class="navbar-brand" href="index.html"><img src="img/menu_logo.png" alt="menu_logo" class="img-fluid logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse main_menu" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="game.html">Spin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Purchase.html">Purchase Items</a>
                    </li>

                    <div class="dropdown">
  <button class="logout dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?=$_SESSION['username'] ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="Profile.php">Profile</a>
    <a class="dropdown-item" href="#">My tickets</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>


               
                
                      
                    
            </div>
        </div>
    </nav>
    <!--=============================================
                    Menu part end
    ==============================================-->