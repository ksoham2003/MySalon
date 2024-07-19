<head>
        <meta charset="utf-8"> <!-- -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="JS/jquery.slim.min.js"> </script><!-- link of JS Lib-->
        <script type="text/javascript" src="JS/bootstrap.bundle.min.js"> </script><!-- link of Bootstrp Lib -->
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"><!-- link of Bootstrp Lib -->
        <link rel="stylesheet" type="text/css" href="CSS/style.css"><!-- link of CSS  file of page Style.css -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- link of slider Lib-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!-- link of slider Lib-->
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!-- link of slider JS Lib-->
        <!-- link of JS Lib-->
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" media><!-- link of Font Family-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media><!-- link of Font family-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" media="">
        <script>$(document).ready(function(){$('.slider').bxSlider({ auto:true, mode:'fade', controls:false, pager:true, touchEnabled:false, speed: 1000 });});</script><!-- code of Slidder-->
   

        <link rel="stylesheet" href="css/style.css"> <!--Link of Style.css -->
        <title>My Salon</title>
        <link rel="icon" type="image/x-icon" href="images/logo.jpg">
    </head>

    <!--Div of navbar,start-->
    <header>
            <div class="nav padd">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand logo" href="index.php"><img src="images/logo.jpg" height="70px" width="70px" alt="brandlogo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav ml-auto">
                            <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="appointment.php">Appointment</a>
                            <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                     Our Services
                                 </a><!--products link -->
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="service-gents.php">GENTS</a>
                                  <a class="dropdown-item" href="service-ladies.php">LADIES</a>
                                  <a class="dropdown-item" href="appointment.php">Get an appointment</a>
                                </div>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                     Our Products
                                 </a><!--products link -->
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="haircare.php">Hair Care</a>
                                  <a class="dropdown-item" href="facialcare.php">Facial</a>
                                  
                                </div>
                             </li>
                             <li>
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                            <li class="nav-item">
                              <a href="hms/user-login.php"><button name='login' id='login'>Signin/Login</button></a>
                            </li>
                            <li class="nav-item"id='cart'>
						                  <a href="cart.php"><i class="fa fa-shopping-cart cart" 
                              style="font-size:30px; color: black;"></i><span 
                              class='badge badge-warning' id='cart-item'> </span></a>
					                  </li>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </header>
        <!--navbar End-->