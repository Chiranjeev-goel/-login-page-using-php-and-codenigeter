<?php include('header.php');?>


	<div class="row">
		<center> <h1>Forgot Password</h1></center

    <?php echo form_open('Articles/index');?> 

    
		<h6 class="information-text"> Enter your registered email to reset your password.</h6>
		<div class="form-group">
			<!-- <input type="email" name="user_email" id="user_email"> -->
      <?php echo form_input(['id'=>'user_email','name'=>'user_email','placeholder'=>'Enter Email','type'=>'email','class'=>'form-control']);
                ?>
			<p><label for="username">Email</label></p>

			<button onclick="showSpinner()">Reset Password</button>
      <a href="<?php echo base_url();?>login">Already have account? Sign In</a>
		</div>
	
	</div>
<!-- </body> -->
<?php include('footer.php');?>
