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
 
</head>


<body>
    <!--=============================================
                    Menu part start
    ===========================================   -->
    <nav class="navbar navbar-expand-md menu_head">
        <div class="container p-md-0">
            <a class="navbar-brand" href="index.html"><img src="images/menu_logo.png" alt="menu_logo" class="img-fluid"></a>
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
                        <a class="nav-link" href="promotion.html">Raf for items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="game.html">Spin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Purchase.html">Purchase Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Purchase.html">Welcome  <?php  session_start() ;echo$_SESSION['username']; ?> <i class="fas fa-user"></i> </a>
                    </li>
               
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="error404.html">404</a>
                    </li> -->
                </ul>
                <!-- <a href="sign_up.php">Singup</a> -->
                <form action="logout.php" method="post">
                <a href="login.php" name="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    <!--=============================================
                    Menu part end
    ==============================================-->