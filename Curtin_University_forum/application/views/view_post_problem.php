


<div class="container">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Post your problem</strong></h3></center>
    		</div>
                    
    <div class="panel-body"> 
         
                 
    		
	<?php
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('registration/signup_validate',$formattributes);
	?>
		<div class="form-group">
    		<label for="inputFullName" class="col-sm-3 control-label">Title &nbsp;&nbsp;</label>
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
    		<label for="inputype" class="col-sm-3 control-label">Select Category &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
                    
                    
      			<?php
      				$typeattributes = array('Student' =>'Tutorial',
                                    
                                                        'Lecturer' =>'Courses',
                                                         'non_academic' =>'Facilities',
                                                          'Acedemic' =>'Sports',
                                                           'Acedemic' =>'Other'
                                    
                                    );
      				echo form_dropdown('type_of_member',$typeattributes,'Scrum Master');
                                        
//					if(form_error('type')!=null)
//						echo '<div class="alert alert-danger">'.form_error('type').'</div>';
      			?>
    		</div>
  		</div>
                <br>
                 <label for="inputype" class="col-sm-3 control-label">Description &nbsp;&nbsp;</label>
                <br>
                <br>
                <br>
                
                
               
             

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>

                	
                
                
                
                
                
        <textarea>Your content here.</textarea>

        <br>
        <br>
  		<div class="form-group">
    		<div class="col-sm-offset-7 col-sm-5">
      			<?php
      				$clearbtnattributes = array('class' => 'btn btn-default','name'=>'clear','value'=>'Clear','type'=>'reset','content'=>'Clear','data-toggle'=>'tooltip', 'data-original-title'=>'this button will reset all the values in the text feilds');
      				echo form_button($clearbtnattributes);
      			?>
      			&nbsp;
      			<?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'register_submit','value'=>'Check me');
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