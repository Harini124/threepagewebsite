<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ABOUT US</title>
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
                    <img src="assets4/images4/cbitlogo.jfif" height="100" width="100" alt="logo">
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
                                        <li class="nav-item">
                                            <a href="dashboard.php" class="nav-link custom-font-color">
                                                login  
                                            </a>
                                        </li>
                                        
                                    </ul>
                                <!-- </div> -->
                            </nav>
    <body>
        <header>
            <main>
                <section>
                    <div class="container heading-space">
                                            
                        <div class="row content-space content-spacing-bottom">
                            <div class="col-sm-12 col-md-6">
                                <img src="assets4/images4/students.jpg" width="550" height="625" alt="ABOUT US">
                            </div>
                            <div class="col-sm-12 col-md-6">
                            <h2>ABOUT C BYREGOWDA INSTITUTE OF TECHNOLOGY</h2>
                            <BR>
                                <BR>
                                <p>
                                    C BYREGOWDA INSTITUTE OF TECHNOLOGY [C.B.I.T] was promoted by C
                                     Byregowda Educational and Cultural Trust ® in the memory of great
                                      visionary the late Sri C Byregowda, Ex-Agriculture Minister,
                                       Govt. of Karnataka, in the year 2009.</p>
                                <br>
    
                                <p>
                                    The college has been approved by All India Council of Technical Education [AICTE], New Delhi,
                                     Affiliated to Visvesvaraya Technological University [VTU], Belgaum and Recognized by Government of Karnataka.</p>
    
                                <br>
    
                                <p>C.B.I.T is affiliated to Visvesvaraya Technological University (V.T.U) Belgaum 
                                    and approved by All India Council for Technical Education (A.I.C.T.E ), New Delhi, 
                                    recognized by State Government of Karnataka.</p>
                                    <br>
                                    <p>
                                        C.B.I.T is located just 5 km from Kolar city. Kolar is well Connected to Bangalore 
                                        (About 60 km away from Bangalore) by National Highway and Railways.
                                         The campus is situated in green serene environment spread over 18 acres, 
                                         on Kolar-Srinivaspur Main Road. C.B.I.T. emphasizes on comprehensive educational programme leading to high academic standards.


                                    </p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include "includes\\footer.php"; ?>
       <script>
           //$("#user_email").on('keyup',function(){
              //  if($("#user_email").val()==''){
                //    $("#email-err").text('Email is Required');
               // }
               // else{
                //    $("#email-err").text('');
                //}
           // });


            
           // $("#user_password").on('keyup',function(){
              //  if($("#user_password").val()==''){
               //     $("#password-err").text('password is Required');
               // }
               // else{
               //     $("password-err").text('');
               // }
           // });
       


           function printError(elemId, hintMsg){
    document.getElementById(elemId).innerHTML = hintMsg;
           }

           function validateForm() {
                event.preventDefault();

                var email = document.getElementById('user_email').value;

                var password=document.getElementById('user_password').value;

                var emailErr = passwordErr= true;


                //Validate email address
                if(email == "") {
                    printError("email-err", "Please enter your email");
                } else {
                    var regex = /^\S+@\S+\.\S+$/;
                    if(regex.test(email) == false) {
                        printError("email-err", "Please enter a valid email");
                    } else {
                        printError("email-err", "");
                        user_emailErr = false;
                    }
                }

                //validate password
                if(password==""){
                    printError("password-err", "Please enter your password");
                }else {
                    printError("password-err", "");
                    user_passwordErr = false;
                }
                

    //return false;

    //cosole.log(email+password);
}
            </script>



    </body>
</html>
    