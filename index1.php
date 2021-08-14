<?php

		//$conn = mysqli_connect("localhost", "root", "", "blog_samples");
		$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");
if(isset($_POST['exit'])){
      header("location:login.php");
      echo "yes";
      } 
      	if(!empty($_POST["forgot-password"])){ 
/*$user=$_POST['user-email'];
echo"<script>alert('$user');</script>";
if($user==""){
	 //$msg = "enter id";
	echo"<script>alert('Enter Email ID');</script>";
}
else{
	$sql = "Select * from login where userid = '$user'";
		$result = mysqli_query($conn,$sql);
		
        $queryresult = mysqli_num_rows($result);
    if($queryresult > 0){
 while($row = mysqli_fetch_array($result)){
$userid=$row['userid'];
}
}
	}
if($user==$userid){
	header("location:forgot-password-recovery-mail.php");
}
else{
	echo"<script>alert('Wrong Email ID');</script>";
}*/
		/*$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " userid = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " emailed = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}*/

		$sql = "Select * from users where username= '".$_POST["user-login-name"]."' AND email= '".$_POST["user-email"]."'" ;
		//. $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		//echo"<script>alert('$user');</script>";
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			//$error_message = 'No User Found';
			 echo "<script>alert('No user found');</script>";  
		}
	}
?>
<html>
<title>FORGET PASSWORD</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="mail.css" rel="stylesheet" >
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script> -->
 <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
	body{
  
background:url("f4.jpg" );

 
}
.con1{
  height:auto;
 
}
.r1{
 
 height:auto;
}
.r2{
 
 height:auto;
}

.prd{
  
  font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 29px;


text-decoration-line: underline;

color: #8D1674;
margin-left: -13%;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}


.box{
    
 box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
transition: border-width border-color 0.1s;


  }      
.exit{
	position: absolute;
	top:60%;
}
.submit{
	position: absolute;
	top:90%;
}
.box:hover{
animation-name: swing ;
        animation-duration:1s;

        animation-iteration-count: 1;

  border: 1px inset black;
 
}
@keyframes swing
{
    25%
    {
      border-left-color:   black;
      border-bottom-color:   white;
      border-right-color:   white;
      border-top-color:   white;
      
        
    }
    50%
    {
        border-left-color:   white;
      
      border-right-color:   white;
      border-top-color:   white;
border-bottom-color:   black;
        
    }
    75%
    {
      border-right-color:   black;
       border-left-color:   white;
      
      
      border-top-color:   white;
border-bottom-color:   white; 
    }
    100%
    {
      border-top-color:   black;
       border-right-color:   white;
       border-left-color:   white;
      border-bottom-color:   white; 

    }

  

    
  }
</style>
<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		 // document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
		 alert("Login name or Email is required!");
		return false;
	}
	return true
}
</script>

<body>
<div class="container mt-5 ">
<div class="box  h-75  " style="width: 500px;margin-left: 300px;margin-top:80px; "> 
<form name="frmForgot" id="frmForgot" method="post" onSubmit="">

<div class="form-group form-inline pt-5" >
 <a class="fas fa-lock offset-3" style="color:black;font-size: 28px;"></a>
 <h5 class="ml-3" style="text-align: center;color:black;font-size: 28px;">Forget Password</h5>
 </div>
<!-- <h5>Forgot Password?</h5> -->
	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?> 
		
	</div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<!-- <div class="field-group">
 -->		<!-- <div><label for="username">Username</label></div>
		<div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> Or</div>
	</div> -->

	<div class="form-group form-inline pt-5" >

<label class="col-form-label col-5 user pt-3" style="font-weight: bold;font-size: 20px" id="us">User ID:-</label>
  <div class="col-2">
      <input type="text" class="  userid  form-control input-field" name="user-login-name" id="user-login-name" autocomplet="off" placeholder="Enter Username " value="" style="background-color:white;border: none;border-bottom: 2px solid #000000;" >
</div>
</div>
	
	<!-- <div class="field-group">
		<div><label for="email">Email:-</label></div>
		<div><input type="text" name="user-email" id="user-email" class="input-field"></div>
	</div> -->

<div class="form-group form-inline pt-3" >

<label class="col-form-label col-5 user pt-3" style="font-weight: bold;font-size: 20px" id="us">Email ID:-</label>
  <div class="col-2">
      <input type="text" class="emailid form-control input-field" name="user-email" id="user-email" autocomplet="off" placeholder="Enter Email Id " value="" style="background-color:white;border: none;border-bottom: 2px solid #000000; " >
</div>
</div>

<div class="form-group form-inline pt-3" >
<div class="col-2 offset-2">
<!-- <img   src="update.jpg" height="30" width="30"  class="upd ml-3" style=""> -->

<input class="form-submit-button mt-2 submit" type="submit" onclick="validate_forgot();" name="forgot-password" value="Submit" id="forgot-password" style="color:black;">

</div>
<div class="col-2 offset-3 ">
<!-- <img   src="exit.jpg" height="30" width="30" style="" class="ex ml-3"> -->
<br>
<input  class="exit mt-2" type="submit" name="exit" value="EXIT" onclick="" style="width:70px;color:black;text-align: center;height: 28px;">
</div>

</div>

	
	<!-- <div class="field-group">
		<div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
	</div>	
<div class="field-group">
		<div></div>
	</div>	 -->
	
</form>


<!-- <form method="post" action="login.php">
 <input type="submit" name="exit" value="EXIT">
</form> -->
</div>
</div>
</body>
</html>