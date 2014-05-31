<!DOCTYPE html>
<html lang="en">
  <head>
       <title>Sign In</title>
       
       <title>Curtin University Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/styles.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap-responsive.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/font-awesome.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/font-awesome-ie7.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/boot-business.css' ?>" rel="stylesheet">
  </head>
  <body>
   
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
<!--    <div class="content">-->
      <div class="container">
        <div class="page-header">
          <h2>Please Signin</h2>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><span  class ="glyphicon glyphicon-lock"></span> Signin</h4>
            <div class="widget-body">
              <div class="center-align">
                <form action="dashboard.php" method="post" class="form-horizontal form-signin-signup">
                  <input id="email" type="text" name="email" placeholder="Email">
                  <input id="password" type="password" name="password" placeholder="Password">
                  <div class="remember-me">
                    <div class="pull-left">
                      <label class="checkbox">
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="pull-right">
                      <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <li><a  class ="btn btn-primary btn-large" href ='<?php echo base_url()."main/dashboard" ?>'>Sign In</a>
                 </form>
                <h4><span class="glyphicon glyphicon-question-sign"></span> Don't have an account?</h4>
                <input type="submit" href="#" class="btn btn-default" value="Sign Up">
              
              </div>
            </div>
          </div> 
        </div>
      </div>
<!--    </div>-->
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>

