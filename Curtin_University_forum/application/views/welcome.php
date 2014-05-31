<!DOCTYPE HTML>
<html>
	<head>
		<title>Agile Project Management Software</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/styles.css" rel = "stylesheet">
		<link href = "css/bootstrap.css" rel = "stylesheet">
	</head>
	<body>
	
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Curtin University Forum</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
                
               <p>  <li><a  class ="btn btn-success" href ='<?php echo base_url()."main/registration" ?>'>Register</a>
                     <a  class ="btn btn-success" href ='<?php echo base_url()."main/login" ?>'>Sign In</a></li></p>
             
<!--            <button type="submit" class="btn btn-success">Sign in</button></p>-->
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	</div>
	<div class="jumbotron">
	<div class="container">
	<h2>Welcome!!!!</h2>
	<h4>Keep & share insights with simplicity</h4>
	<div id = "mytest" class = "carousel slide">
			
			<ul class = "carousel-indicators">
				<li data-target = "#mytest" data-slide-to ="0" class = "active"></li>
				<li data-target = "#mytest" data-slide-to ="1"></li>
				<li data-target = "#mytest" data-slide-to ="1"></li>
			</ul>
			
			<div class = "carousel-inner">
				<div class = "item active">
					<img src = "img/img1.jpg" alt = "1" class = "img-responsive">
				</div>
				<div class = "item">
					<img src = "img/img2.jpg" alt = "1" class = "img-responsive">
				</div>
				<div class = "item">
					<img src = "img/img3.jpg" alt = "1" class = "img-responsive">
				</div>
				
			</div>
			<a class = "carousel-control left" href = "#mytest" data-slide = "prev">
				<span class = "icon-prev"></span>
			</a>
		</div>
	</div>
	</div>
		<div class = "navbar navbar-default navbar-fixed-bottom">
			
				<div class = "container">
					<p class = "navbar-text pull-left">Site Built by Curtin C4</p> 
				</div>			
			</div>	
			
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "js/bootstrap.js"></script>
	</body>
	
</html>	