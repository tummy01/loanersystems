<?php

function displayinsurance(){
    $con = mysqli_connect("localhost","root","","e-insurance") or die("conection was not created");

	$select = "select * from insurance_type  where status='1'";
    $run = mysqli_query($con,$select);
    while ($insurance = mysqli_fetch_array($run)){
    echo "<option value='".$insurance["insurance_id"]."'>". $insurance["name"]."</option>";
	
    }
	
}



?>
