<?php include('header.php'); ?>
<?php include('navbarc.php'); ?>
<?php include('display.php');?>
               <div class="container">
    <div class="margin-top">
        <div class="row">	
           <div class="span12" align="center">
           
                <?php //include('banner.php'); ?>
          </div>
            <hr />
                <div class="well lgoin_terry" >
                    <div class="alert alert-info"><strong>Enter Registration Details Below..</strong></div>
                    <form role="form" action="register.php" method="POST" >

						<div class="form-group">
							<label for="regno">Full Name</label>
							<input type="text" name="fullname" class="form-control" width="100" >
						</div>
						<div class="form-group">
							<label for="email">Email/Username</label>
							<input type="text" name="email" class="form-control" >
						</div>
						
							
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" >
						</div>
						 <div class="control-group">
                            <div class="controls">
                                <button id="login" name="add_client" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
                            </div>
							</div>
						</form>
					</div>
				</div>
<?php

$con = mysqli_connect("localhost","root","","loan_system") or die("conection was not created");
 if (isset($_POST['add_client'])) {
   $fullname = $_POST["fullname"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   
    $select = "select * from customers where username = '$email'";
	$run = mysqli_query($con,$select);
	$row = mysqli_fetch_array($run);
	$check = mysqli_num_rows($run);
	if($check == 1 ) {
	 ?>
	  <div class="alert alert-danger"><button type='button' class='close' data-dismiss='alert'>&times;</button> This Email <?php  echo   $row['username'] ;?> is already been registered</div>
	<?php
		} 
		else 
		{
   
$con = mysqli_connect("localhost","root","","loan_system") or die("conection was not created");
   $insert = "INSERT INTO customers (name,username,password,status) 
   VALUES ('$fullname','$email','$password','1')";
	
	$run_insert = mysqli_query($con,$insert);
	//$last_id = mysqli_insert_id($con);
	
	
     if($run_insert){ echo "<div id='success'><div class='alert alert-success' align='center'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong><i class='close icon-large'></i>" ."<h5 class='bg-success text-success'><b>REGISTRATION SUCCESSFULLY. </b> </h5>"."</strong></div></div>";
	
      echo "<script>window.open('loginc.php','_self')</script>";
   }
    //mysqli_query($con, "insert into staff (staff_name,staff_email,staff_pos) values('$name','$email','$pos')")or die(mysql_error());
	
			?> 
	<script type="text/javascript">
				
				setTimeout(function (){
		$("#success").fadeOut('slow');
	 }, 5000);

		 </script>
 
	 
<?php }
}
?>
