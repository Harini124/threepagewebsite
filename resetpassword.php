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
                                     <p><b>Password Reset </b></p>
                                     <p>Please provide your email,we'll mail you the rest link </p>
                                     <div class="form-group">
                                    <input class="form-control" type="text" name="Enter Email" id="user_email" placeholder="Enter Your Email">
                                    <span id="email_error" class="text-danger" ></span>
                                    <br> 
                                    
                                    <input type="reset password" class="btn btn-block btn-success" value="Reset Password">
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
            <header> 
            <?php include "includes\\footer.php"; ?>
        </header>
            
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