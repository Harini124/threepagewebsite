<!DOCTYPE html>
<html lang="en">
    <head>
        <title> DASHBOARD SCREEN </title>
        <?php include "includes\header.php"; ?>

        
        <style>
            .navbar-nav{
               flex-direction: row;
           }
           .nav-item{
               padding-left: 10px !important
           }
           #circle{
               width: 50px;
               height: 50px;
               background: grey;
               border-radius: 50%;
           }
        </style>

    </head>

    <body> 
        <header> </header> 
        <nav class="navbar">
            <a class="navbar-brand" href="#">   
               <img src="assets4/images4/cbitlogo.jfif" width="50" height="50" alt="LOGO">
            </a>
            <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link custom-font-color">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link custom-font-color">
                                About Us        
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contactus.php" class="nav-link custom-font-color">
                                Contact Us   
                            </a>
                        </li>
                        
                    </ul>
                <!-- </div> -->
                
            </nav>
        </nav>
        
    </body>
</html>