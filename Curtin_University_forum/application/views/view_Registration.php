<html>
    <head>
        <title>Curtin University Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/styles.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/dashboardNew.css' ?>" rel = "stylesheet">
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    </head>
    <body>
<div class="container">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Signup</strong></h3></center>
    		</div>
                    
    <div class="panel-body"> 
         
                    <img src="http://localhost/Curtin_University/img/my1.jpg" height="100" width="100" />
    		
	<?php
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('registration/signup_validate',$formattributes);
	?>
		<div class="form-group">
    		<label for="inputFullName" class="col-sm-3 control-label">Full Name &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
					$fnameattributes = array('class' => 'form-control','name'=>'fname');
      				echo form_input($fnameattributes,$this->input->post('fname'));
					if(form_error('fname')!=null)
						echo '<div class="alert alert-danger">'.form_error('fname').'</div>';
      			?>
                   
                
                </div>
  		</div>
  		<br />
  		<div class="form-group">
    		<label for="inputype" class="col-sm-3 control-label">Member type &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
                    
                    
      			<?php
      				$typeattributes = array('Student' =>'Student',
                                    
                                                        'Lecturer' =>'Lecturer',
                                                         'non_academic' =>'Non-Academic',
                                                          'Acedemic' =>'Acedemic'
                                    );
      				echo form_dropdown('type_of_member',$typeattributes,'Scrum Master');
                                        
//					if(form_error('type')!=null)
//						echo '<div class="alert alert-danger">'.form_error('type').'</div>';
      			?>
    		</div>
  		</div>
  		
                <div class="form-group">
    		<label for="inputFullName" class="col-sm-3 control-label">ID Number &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
					$fnameattributes = array('class' => 'form-control','id'=>'id');
      				echo form_input($fnameattributes,$this->input->post('id'));
					if(form_error('id')!=null)
						echo '<div class="alert alert-danger">'.form_error('id').'</div>';
      			?>
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="inputEmail" class="col-sm-3 control-label">Email Address &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$emailattributes = array('class' => 'form-control','name'=>'email');
      				echo form_input($emailattributes,$this->input->post('email'));
					if(form_error('email')!=null)
						echo '<div class="alert alert-danger">'.form_error('email').'</div>';
      			?>
                   
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<label for="inputUsername" class="col-sm-3 control-label">User Name &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$usernameattributes = array('class' => 'form-control','name'=>'username');
      				echo form_input($usernameattributes,$this->input->post('username'));
					if(form_error('username')!=null)
						echo '<div class="alert alert-danger">'.form_error('username').'</div>';
      			?>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<label for="inputPassword" class="col-sm-3 control-label">Password&nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$passwordattributes = array('class' => 'form-control','name'=>'password');
      				echo form_password($passwordattributes);
					if(form_error('password')!=null)
						echo '<div class="alert alert-danger">'.form_error('password').'</div>';
      			?>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<label for="inputConfirmPassword" class="col-sm-3 control-label">Confirm Password&nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$confirmpasswordattributes = array('class' => 'form-control','name'=>'confirmpassword');
      				echo form_password($confirmpasswordattributes);
					if(form_error('confirmpassword')!=null)
						echo '<div class="alert alert-danger">'.form_error('confirmpassword').'</div>';
      			?>
    		</div>
  		</div>
  		
  		<div class="form-group">
  			<div class="col-sm-12 col-sm-offset-3">
  				<p class="text-muted">By signingup you accept these <a href="#" class="text-primary">terms and conditions.</a></p>
  			</div>
  		</div>
  		<div class="form-group">
    		<div class="col-sm-offset-7 col-sm-5">
      			<?php
      				$clearbtnattributes = array('class' => 'btn btn-default','name'=>'clear','value'=>'Clear','type'=>'reset','content'=>'Clear','data-toggle'=>'tooltip', 'data-original-title'=>'this button will reset all the values in the text feilds');
      				echo form_button($clearbtnattributes);
      			?>
      			&nbsp;
      			<?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'register_submit','value'=>'Signup');
					echo form_submit($registerbtnattributes);
      			?>
    		</div>
  		</div>
  		
  		<?php
  			echo form_close();
  		?>
  		
		</div>
	</div>
	</div>
</div>
</body>
</html>