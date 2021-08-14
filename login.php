<?php
session_start();
?>
<?php
$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");

//$msg="";
//if(isset($_POST['submit'])){
	//$username=mysqli_real_escape_string($conn,$_POST['id']);
	//$password=mysqli_real_escape_string($conn,$_POST['pass']);
	
//	$res=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
//	if(mysqli_num_rows($res)>0){
	//	$_SESSION['IS_LOGIN']='yes';
//		header('location:home.php');
//		die();
//	}else{
//		$msg="Please enter valid login details";
//	}
//}

//$id= $_POST['id'];
       // $edate= $_POST['edate'];
       
if(isset($_POST['id']))
{
  $s = $_POST['id'];
   $pass= $_POST['pass'];
    $sql ="SELECT * from users where username = '$s' AND password='$pass' limit 1";
    $result = mysqli_query($conn,$sql);
    //$a=$sql;
   $queryresult = mysqli_num_rows($result);
    if($queryresult == 1){
    //	$username=mysqli_real_escape_string($conn,$_POST['id']);
//	$password=mysqli_real_escape_string($conn,$_POST['pass']);
	$_SESSION['IS_LOGIN']='yes';
	
 //while($row = mysqli_fetch_assoc($result)){
   echo"<script>alert('you have successfully login');</script>";
   header("location:home.php");
   //"<script>alert('incorrect id password');</script>";
   //exit(); 
  /*<input type="text" name="name" value=" <?php //echo "".$row. ""?>;"
    <!--<input type="text" name="name" value=" <?php  //echo $row['name'] ?>"/>-->*/
   }
   else{
   	echo"<script>alert('you have type incorrect id or paasword');</script>";
   //	alert("you have type incorrect Password");
   //	exit();
   }
   } 
   

?>
<html>
<head>
<title>Login Form</title>
<!--  <link rel="stylesheet" type="text/css" href="log.css">-->
<style type="text/css">
		body
	{
		margin:0;
		padding:0;
		background:url(ll.jpg);
		
		background-position:center;
		background-repeat:no-repeat;
		background-color:#303030;
		
	    background-size:cover;

	}
	

	
	button 
	{
	  background-color:#dcdcdc;
	  color: black;
	 	  padding: 14px 20px;
	  margin: 8px 0;
	  top: 70%;
	  border: outset;
	  cursor: pointer;
	  width: 100%;
	  border-color:#a6a6a6;
	  border-radius:12px;
    }

	button:hover 
	{
		opacity: 0.8;
	}
	
.loginbox
	{
		width:320px;
		height:360px;
		color:black;
		top:50%;
		left:20%;
		position:absolute;
		transform:translate(-50%,-50%);
		box-sizing: border-box;
		border-style:outset;
		border-color:black;
		padding: 70px 30px;
		opacity:1;
		border-radius:20px;
		border:4px  black solid;
	}


	.loginbox p
	{
		margin: 0;
		padding: 0;
		font-weight: bold;
		font-family:sans-serif;
		color: black;
	}
	.loginbox input
	{
		width: 100%;
		margin-bottom: 20px;

	}
	
	.loginbox input[type=text], input[type=password]
	{
		border:none;
		border-bottom:1px solid black;
		background: transparent;
		outline: none;
		display: inline-block;
		height: 40px;
		color: black;
		font-size: 16px;
	
	}
	h1{

		top:35%;
		left:200%;
		position:absolute;
		font-size: 50px;
		width: 500px;
		transform:translate(-50%,-50%);
		text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.50);
	}
	
	.loginbox input[type="submit"]
	{
		border:none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
	}

</style>
	<body>
		<div class="loginbox">
		


		<form method="post" action="">

				<p> Username</p>
				<input type="text" name="id" placeholder="Enter Username">
				<p> Password</p>
				<input type="Password" name="pass"  placeholder="Enter Password">
				
			<input class="button" type="submit"  name="insert" value="login" onclick="">
				 <a href="index1.php">Forget Password</a><br>
				<script>
					function openForm() 
						{
						  document.getElementById("myForm").style.display = "block";
						}
				</script>
				<h1><center>P.E.S.<br>MODERN COLLEGE OF ENGINEERING.</center></h1>
			<?php
			if(isset($_POST['insert'])){
$id=$_POST['id'];
	$_SESSION['id']=$id;
	//$pass=$_POST['pass'];
}
?>
			</form>
			</form>
		</div>
		
	</body>

</head>
</html>
