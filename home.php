<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .navbar-nav{
                flex-direction: row;
                
            }
            .nav-item{
                padding-left: 10px !important
            }
            .herosection{
                background-size: cover;
                background-repeat: no-repeat;
            }
            .top-medium-spacing{
                padding-top: 10px;
            }
            .bottom-medium-spacing{
                padding-bottom:10px;
            }
            .icon-spacing{
                padding-left: 10px;
                padding-right: 10px;
            }
            .heading-space{
                padding-top: 23px;
            }
            .content-space{
                padding-top:50px;
            }
            .content-spacing-bottom{
                padding-bottom: 60px;
            }
            .team-section-bg{
                background-color: #c4c4c4;
            }
            .footer-section-bg{
                background-color: #F5F5F5;
            }
            .copyrights-section{
                padding-top: 20px;
                padding-bottom: 15px;
                background-color: black;
                color: white;
            }
            .custom-font-color{
                color:#595D62;
                text-decoration: none;
            }
            .custom-font-color:hover{
                color:#595D62;
                text-decoration: none;
            }
            .contact-us-spacing{
                padding-top: 15px;
            }

        </style>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a class="navbar-brand" href="#">
                    <img src="assets4/images4/logo.jpeg" height="100" width="100" alt="logo">
                </a>
                <!-- <div class="navbar-nav"> -->
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
            <div>
                <img src="assets4/images4/pexels-sevenstorm-juhaszimrus-443383.jpg" width="auto" height="500" width="500" >
            </div>
        </header>
        <main>
            <section>
                <div class="container heading-space">
                    <center><h5>About Us</h5></center>                    
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-sm-12 col-md-6">
                            <img src="assets4/images4/seven storm.jpg" width="500" height="500" alt="about-us">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi porta eleifend magna dignissim varius. Nunc 
                            tincidunt dui pulvinar tempus rhoncus. Ut</p>
                            <br>

                            <p>
                            vitae pulvinar magna, sit amet sollicitudin eros. Donec 
                            lobortis consectetur semper. Suspendisse mi quam,
                            tempus sit amet tempus ac, faucibus eu lacus.</p>

                            <br>

                            <p>sAliquam eu nibh et mauris hendrerit vestibulum at in ex. 
                            Nunc at nisl euismod, rhoncus sem et, finibus diam. 
                            Donec tristique id urna quis rhoncus.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" team-section-bg">
                <div class="container heading-space">
                    <center><h5>Our Amazing Team</h5></center>
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                            <img src="assets4/images4/pexels-sevenstorm-juhaszimrus-443383 (1).jpg" class="card-img-top" width="500" height="500" alt="team1">
                                <div class="card-body">
                                    <div class="text-center"> 
                                        <span class="fa fa-instagram icon-spacing"></span>
                                        <span class="fa fa-facebook-f icon-spacing"></span>
                                        <span class="fa fa-linkedin icon-spacing"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                                <img src="assets4/images4/company.jpeg" class="card-img-top" width="200" height="500" alt="team2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <span class="fa fa-instagram icon-spacing"></span>
                                        <span class="fa fa-facebook-f icon-spacing"></span>
                                        <span class="fa fa-linkedin icon-spacing"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                            <img src="assets4/images4/girl image.jpg" class="card-img-top" width="200" height="500" alt="team3">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="fa fa-instagram icon-spacing"></span>
                                    <span class="fa fa-facebook-f icon-spacing"></span>
                                    <span class="fa fa-linkedin icon-spacing"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container heading-space">
                    <center><h5>Contact US</h5></center>
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-6 text-center">
                            <h5>Find us @</h5>
                            <BR>
                            <div class="contact-us-spacing">
                                <span class="fa fa-envelope-o fa-3x"></span>
                                <p>somemail@example.com</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-phone fa-3x"></span>
                                <p>1234567890</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-map-marker fa-3x"></span>
                                <p>#24, 2nd Main Road,<br> Some road KB Nagar<br> Bangalore</p>
                            </div>    
                        </div>
                        <div  class="col-6">
                            <div class="text-center">
                            <h5>Write to Us</h5>
                            <p>We'll get back to you</p>
                        </div>
                            <div class="card">
                                <form class="container top-medium-spacing bottom-medium-spacing">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your Phone No.">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" placeholder="Tell us your Requirements"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-dark" type="button">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </section>

        </main>
        <footer>
            <div class="top-medium-spacing bottom-medium-spacing footer-section-bg">
                <div class="row content-spacing-bottom">
                    <div class="col-4">
                        <h5 class="custom-font-color" >Name</h5>
                        <p class="custom-font-color">Lorem ipsum dolor sit amet,<br> 
                            consectetur adipiscing elit.<br> 
                            Morbi porta eleifend magna <br>
                            dignissim varius. <br>
                            Nunc tincidunt dui pulvinar<br>
                            tempus rhoncus. </p>
                    </div>
                    <div class="col-4">
                        <h5 class="custom-font-color">Quick Links</h5>
                        <a href="#" class="custom-font-color">Home</a>
                    </div>
                    <div class="col-4">
                        <h5 class="custom-font-color">Policies</h5>
                        <a href="#" class="custom-font-color">Privacy Policy</a>
                    </div>
                </div>
            </div>

            <div class="copyrights-section">
                <center>All Rights Reservered &copy; 2021 Some Website</center>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>

</html>