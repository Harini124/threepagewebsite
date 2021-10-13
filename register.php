<!DOCTYPE html>
<html lang="en">
    <head> 
        <title> LOGIN PAGE </title>
        <?php include "includes\header.php"; ?>
        
        <style>
             .navbar-nav{
                flex-direction: row;
            }
            .nav-item{
                padding-left: 10px !important
            }
         </style>

    </head>

    <body>
        <header> 
        <?php include "includes\landing_nav.php"; ?>
        </header> 


            <center>
           
                <div class="col-sm-12 col-sm-12 col-lg-4">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body">
                            <div class="text-center">
                                <form>
                                    <a class="navbar-brand" href="#">   
                                        <img src="assets4/images4/cbitlogo.jfif" width="50" height="50" alt="LOGO">
                                     </a> <br>
                                     <p><b>USER LOGIN FORM </b></p>
                                     <p>Please fill in your credentials to continue </p>
                                     <div class="form-group">
                                    <input class="form-control" type="text" name="Enter Email id" id="user_email" placeholder="Enter Your name">
                                    <span id="name_error" class="text-danger"></span>
                                    <br> 
                                    <input class="form-control" type="phone number name="phone number"  id="user_email" placeholder="Enter Your phone number">
                                    <span id="phone number-error" class="text-danger"></span>
                                    <br> 
                                    <input class="form-control" type="email" name="email" placeholder="Enter Your email">
                                    <span id="email-error" class="text-danger"></span>
                                    <br>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Your password">
                                    <span id="password_error" class="text-danger"></span>
                                    <br>
                                    <input class="form-control" type="confirm password" name=" confirm password" placeholder="confirm password">
                                    <span id="confirm password-error" class="text-danger" ></span>
                                    <br>
                                    
                                    <input type="submit" class="btn btn-block btn-success" value="SIGN UP">
                                    <br> 
                                    <label> Already have an account? 
                                        <a href="login.php"> login instead </a> 
                                     </label>
                                     
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
            <script>
         $("#user_email").on('keyup',function(){
             if($("#user_email").val()==''){
                 $("#email_error").text('email is required');
             }else{
                 $("#email_error").text('');
             }
         });


         $("#user_password").on('keyup',function(){
             if($("#user_password").val()==''){
                 $("#password_error").text('password is required');
             }else{
                 $("#password_error").text('');
             }
         });
</script>

    </body>
</html>