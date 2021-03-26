<!DOCTYPE html>
<html>
<head>
     <title>Loan System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
<!-- Needed for slider -->
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/slider/jquery-ui.min.js"></script>
<link href="bootstrap/slider/jquery-ui.min.css" rel="stylesheet" type="text/css">
<script src="bootstrap/slider/jquery-ui-slider-pips.js"></script>
<link href="bootstrap/slider/jquery-ui-slider-pips.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
/*#submit {
    border: 0;
    background-color: rgba(237,89,35,1.00);
    color: #FFFFFF;
    font-weight: bold;
    width: 100px;
    height: 40px;
    margin-bottom: 20px;
}*/
label {
    margin-top: 10px;
}
.container p {
    margin-top: 20px;
}
</style>

    <!-- Bootstrap -->
            <link href="css/bootstrap.css" rel="stylesheet" media="screen">
            <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
            <link href="css/docs.css" rel="stylesheet" media="screen">
            <link href="css/diapo.css" rel="stylesheet" media="screen">
            <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <!-- js -->         
   
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
            <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
            
        <?php session_start(); ?>   
                    <link rel="stylesheet" type="text/css" href="css/style.css" />
        <noscript>
            <style>
                .da-thumbs li a div {
                    top: 0px;
                    left: -100%;
                    -webkit-transition: all 0.3s ease;
                    -moz-transition: all 0.3s ease-in-out;
                    -o-transition: all 0.3s ease-in-out;
                    -ms-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .da-thumbs li a:hover div{
                    left: 0px;
                }
            </style>
        </noscript>
         <!--slider -->
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" /> 

    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        });
    </script>
    <!--end slider -->
        
        <!--sa calendar-->  
        <script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
        //<![CDATA[

        /*
                A "Reservation Date" example using two datePickers
                --------------------------------------------------

                * Functionality

                1. When the page loads:
                        - We clear the value of the two inputs (to clear any values cached by the browser)
                        - We set an "onchange" event handler on the startDate input to call the setReservationDates function
                2. When a start date is selected
                        - We set the low range of the endDate datePicker to be the start date the user has just selected
                        - If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

                * Caveats (aren't there always)

                - This demo has been written for dates that have NOT been split across three inputs

        */

        function makeTwoChars(inp) {
                return String(inp).length < 2 ? "0" + inp : inp;
        }

        function initialiseInputs() {
                // Clear any old values from the inputs (that might be cached by the browser after a page reload)
                document.getElementById("sd").value = "";
                document.getElementById("ed").value = "";

                // Add the onchange event handler to the start date input
                datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
        }

        var initAttempts = 0;

        function setReservationDates(e) {
                // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
                // until they become available (a maximum of ten times in case something has gone horribly wrong)

                try {
                        var sd = datePickerController.getDatePicker("sd");
                        var ed = datePickerController.getDatePicker("ed");
                } catch (err) {
                        if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                        return;
                }

                // Check the value of the input is a date of the correct format
                var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

                // If the input's value cannot be parsed as a valid date then return
                if(dt == 0) return;

                // At this stage we have a valid YYYYMMDD date

                // Grab the value set within the endDate input and parse it using the dateFormat method
                // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
                var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

                // Set the low range of the second datePicker to be the date parsed from the first
                ed.setRangeLow( dt );
                
                // If theres a value already present within the end date input and it's smaller than the start date
                // then clear the end date value
                if(edv < dt) {
                        document.getElementById("ed").value = "";
                }
        }

        function removeInputEvents() {
                // Remove the onchange event handler set within the function initialiseInputs
                datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
        }

        datePickerController.addEvent(window, 'load', initialiseInputs);
        datePickerController.addEvent(window, 'unload', removeInputEvents);

        //]]>
        </script>
</head>
<body>
 <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container"  >
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav">

                </ul>
                

            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="margin-top">
    <div class="row">   
        <div class="span3">
            <?php include('sidebarc.php'); ?>
            <?php //echo  $_SESSION['id']; ?>
        </div>
        <div class="span9">
            <hr>
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><i class="icon-tasks icon-large"></i>&nbsp;Application Forms</strong>

            </div>
                     <div class="well" >
                        <div></div>

                   

                        <?php

$con = mysqli_connect("localhost","root","","loan_system") or die("conection was not created");
 
    $user_id = $_SESSION['id'];
    $select = "select * from  loanapplication where user_id ='$user_id'";
/*
     $select = mysqli_query("select loanapplication.id, loanapplication.user_id, loanapplication.Address, loanapplication.phone, loanapplication.gender, loanapplication.acc_type, loanapplication.acc_no, loanapplication.BVN, loanapplication.loan_amount, loanapplication.modeOfrepayment, loanapplication.repaymentDate, loanapplication.status, loanapplication.application_status, customers.name

                        from (loanapplication
            inner join customers on loanapplication.user_id=customers.id) 
             WHERE ((loanapplication.status = '1') and 
             (loanapplication.user_id = '$user_id'))
                            ")or die(mysqli_error($con));*/
    $run = mysqli_query($con,$select);
    $row = mysqli_fetch_array($run);
    $check = mysqli_num_rows($run);
    if($check == 1 ) {
     ?>
      <div class="alert alert-success"><button type='button' class='close' data-dismiss='alert'>&times;</button>Thank you for submission your application</div>
    <?php
        } 
        else 
        {
   
    
            ?> 
                                <div class="alert alert-info"><strong>Application Forms</strong></div>
             <form action="loanApplicationForm.php" method="POST">
                        <div class="form-group">
                            <label for="regno">Full Name</label>
                            <input type="text" name="fullname" class="form-control" width="100" value="<?php echo  $_SESSION['name'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="text" name="phone" class="form-control" >
                        </div>
                        
                            
                        <div class="form-group">
                            <label for="password">Address</label>
                            <input type="text" name="address" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <select name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Account Type</label>
                            <input type="text" name="acc_type" class="form-control" >
                        </div>
                            <div class="form-group">
                            <label for="password">Account Number</label>
                            <input type="text" name="acc_no" class="form-control" >
                        </div>
                            <div class="form-group">
                            <label for="password">BVN</label>
                            <input type="text" name="BVN" class="form-control" >
                        </div>
                            <div class="form-group">
                            <label for="email">Amount</label>
                            <select name="loan_amount">
                                <option value="50,000">50,000</option>
                                <option value="100,000">100,000</option>
                                <option value="100,000">200,000</option>
                                <option value="500,000">500,000</option>
                              <option value="500,000">1,000,000</option>                                
                            </select>
                        </div>
                            <div class="form-group">
                            <label for="email">Mode of re-payment</label>
                            <select name="modeOfrepayment">
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>                                
                            </select>
                        </div>
                            <div class="form-group">
                            <label for="password">Propose re-payment date</label>
                            <input type="Date" name="repaymentDate" class="form-control" >
                        </div>
                        
                         <div class="control-group">
                            <div class="controls">
                                <button id="login" name="add_client" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Apply</button>
                            </div>
                            </div>
                        </form>
    <script type="text/javascript">
                
                setTimeout(function (){
        $("#success").fadeOut('slow');
     }, 5000);

         </script>
 
     
<?php }

?>


                    </div>

        </div>
    </div>
<?php

$con = mysqli_connect("localhost","root","","loan_system") or die("conection was not created");
 if (isset($_POST['add_client'])) {
   $user_id =  $_SESSION['id'];
   $phone = $_POST["phone"];
   $address = $_POST["address"];
   $gender = $_POST["gender"];
   $acc_type = $_POST["acc_type"];
   $acc_no = $_POST["acc_no"];
   $BVN = $_POST["BVN"];
   $loan_amount = $_POST["loan_amount"];
   $modeOfrepayment = $_POST["modeOfrepayment"];
   $repaymentDate = $_POST["repaymentDate"];
   
    $select = "select * from  loanapplication where BVN ='$BVN'";
    $run = mysqli_query($con,$select);
    $row = mysqli_fetch_array($run);
    $check = mysqli_num_rows($run);
    if($check == 1 ) {
     ?>
      <div class="alert alert-danger"><button type='button' class='close' data-dismiss='alert'>&times;</button> This BVN <?php  echo   $row['BVN'] ;?> is already been registered</div>
    <?php
        } 
        else 
        {
   $insert = "INSERT INTO  loanapplication
          (user_id,address,phone,gender,acc_type,acc_no,BVN,loan_amount,modeOfrepayment,repaymentDate,application_status,status) 
   VALUES ('$user_id','$address','$phone','$gender','$acc_type','$acc_no','$BVN','$loan_amount','$modeOfrepayment','$repaymentDate','Pending','1')";
/*       mysqli_query($con, "insert into loanapplication(user_id,address,phone,gender,acc_type,acc_no,BVN,loan_amount,modeOfrepayment,repaymentDate,status) values('$user_id','$address','$phone','$gender','$acc_type','$acc_no','$BVN','$loan_amount','$modeOfrepayment','$repaymentDate','Pending')")or die(mysqli_error($con));*/
    // var_dump($insert);
   $run_insert = mysqli_query($con,$insert);
    //$last_id = mysqli_insert_id($con);
    
      //var_dump($run_insert);

     if($run_insert){ echo "<div id='success'><div class='alert alert-success' align='center'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong><i class='close icon-large'></i>" ."<h5 class='bg-success text-success'><b>APPLICATION SUCCESSFULLY. </b> </h5>"."</strong></div></div>";
    
      echo "<script>window.open('loanApplicationForm.php','_self')</script>";
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
 

<?php include('footer.php') ?>
