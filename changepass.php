<?php
session_start();
?>
<?php
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
/*else{
 $i=$_SESSION['id'];
 if($i != "sarthak"){
  header("location:index.php");

 }*/
  
?>
<?php
$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");
  
    if(isset($_POST['exit'])){
      header("location:home.php");
      
      }  

if(isset($_POST['update'])){
  $pass= $_POST['pass'];
        $userid= $_POST['userid'];
      $cpass=$_POST['descp'];
        $opass=$_POST['opass'];
        if($pass==""||$userid==""||$cpass==""||$opass=="")
{
   echo "<script>alert('Enter all fields');</script>";
}
  $sql ="SELECT * from users where username = '$userid' ";
    $result = mysqli_query($conn,$sql);
    //$a=$sql;
   $queryresult = mysqli_num_rows($result);

    if($queryresult > 0){

 while($row = mysqli_fetch_assoc($result)){
    
   
   $opass1 = $row['password'];
  $id=$row['username'];
  
}
if ($opass==$opass1) {
  # code...
if($pass==$cpass){
        
        $sql=mysqli_query($conn,"UPDATE users set password ='$pass' where username ='$userid'");
         
         if ( $sql)
          {
            echo "";
          echo "<script>alert('Password Changed Successfully');</script>"; 
            $userid= "";
            $pass= "";
       
      $cpass="";
        $opass="";
          } 
          
         else 
           
          {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
          }
        }
        else{
          echo "<script>alert('Password Miss-match');</script>";


        }
     
    }
    else{
      echo "<script>alert('Old Password Incorrect');</script>";
    }
  
}
  else{
     echo "<script>alert('UserId Incorrect');</script>";  
  }
       
        


    


    }
 mysqli_close($conn);
?>
<html>
<title>CHANGE PASSWORD</title>
   <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<script type="text/javascript">
   
</script>
<style type="text/css">
  body{
  
background: linear-gradient(180deg, rgba(0, 0, 0, 0.28) 0%, rgba(245, 245, 245, 0) 100%);
background-image: url("f4.jpg");
 
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
.user{
  
font-family: Calibri;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;



color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

}
.user1{
 

background-color:white;

  border: none;
  border-bottom: 2px solid #000000;

}
.old{
 
font-family: Calibri;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;


color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);


}
.old1{

background-color:white;

  border: none;
  border-bottom: 2px solid #000000;

}
.comp{
  
font-family: Calibri;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;


color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.comp1{
  
background-color:white;
 
  border: none;
  border-bottom: 2px solid #000000;
}
.new{
 
font-family: Calibri;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.new1{
  

background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}
.conf{
 
font-family: Calibri;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 22px;
color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.conf1{
  

background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}

.exit{

}


.con1{
 border:1px solid red;
}


.box{
    
 box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 20px;
transition: border-width border-color 0.1s;


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
  
form-inline{
  width: auto;

}

</style>
<body onload="abc();">


      <div class="container-fluid con">
	<div class="row ">
		<div class="col-4">
			<!-- <div class="media">
		<img src="change.png" height="70" width="70" class="align-self-center mr-2">
	
	<div class="media-body">
		<a></a>
		<h4 class="mt-3" style="color:#910E80;">CHANGE PASSWORD</h4>
		</div>	
	</div>
 -->	</div>

	<div class=" offset-xl-6 col-xl-2 offset-sm-5 col-sm-3 offset-4 col-4">
		<div class="media">
		<!-- <img src="" height="50" width="50" class="align-self-center mr-2"> -->
	
	<div class="media-body">

		
		<a class=' btn fas fa-user align-style-center offset-4' id="btn" style='font-size: 2vw;color:#910E80;margin-left:4vw; '></a>
  
 
		<!-- <input class="" style="font-size:12px;" value="<?php echo @$admin ?>;"> -->
    <a class="admin" style="color:black;font-size:20px;"><span id="user"></span></a>
<!-- <a class="employee" style="color: #8D1674;font-size:12px;"><span id="user1"></span></a>
 --> 		</div>	
	</div>

	</div>
	</div>
  </div>


	
  
	

<div class="container mt-5 ">
	<form action="" method="POST">
  <!-- <div class="card" style="width:200px;">-->
  <div class="box  h-75 " style="width: 500px;margin-left: 300px;"> 

 <!--  <div class="c  offset-4"><span class="fas fa-key"></span><h5 class="" style="text-align: center;color:#910E80;">Change Password</h5></div> -->
 <div class="form-group form-inline pt-5" >
 <a class="fas fa-key offset-3" style="color:black;font-size: 28px;"></a>
 <h5 class="ml-3" style="text-align: center;color:black;font-size: 28px;">Change Password</h5>
 </div>
  <div class="form-group form-inline pt-3" >

<label class="col-form-label col-5 user pt-3" style="" id="us">User ID:-</label>
  <div class="col-2">
      <input type="text" class="  user1  form-control" name="userid" id="1" autocomplet="off" placeholder="Enter Username " value="<?php echo @$userid ;?>" style=" " >
</div>
</div>

<div class="form-group form-inline pt-3" >
<label class="col-form-label col-5 old" style=" ">Old Password:-</label>
 <div class="col-2">
       <input type="password"  class="form-control old1" name="opass" id="2" autocomplet="off" placeholder="Enter Old Password" value="<?php echo @$opass ;?>" style="" >
       </div>
</div>

<div class="form-group form-inline pt-3" >
<label class="col-form-label col-5 new" style="">New Password:-</label>
<div class="col-2">
    <input type="password" class="form-control new1" name="pass" id="3" autocomplet="off" placeholder="Enter New Password" value="<?php echo @$pass ;?>" style=" " >
    </div>
</div>

<div class="form-group form-inline pt-3" >
<label class="col-form-label col-5 conf" style="">Confirm Password:-</label>
<div class="col-2">
<input type="password" class="form-control conf1" name="descp"  id="7" autocomplet="off" placeholder="Again Enter New Password" value="<?php echo @$cpass ;?>" style=""> 
</div>
</div>

<div class="form-group form-inline " >
<div class="col-2 offset-2">

<!-- <img   src="update.jpg" height="30" width="30"  class="upd ml-3" style=""> -->
<input class="update " type="submit" name="update" value="RESET" id="update" style="color:black;margin-top: 30px;">

</div>
<div class="col-2 offset-3 ">
<!-- <img   src="exit.jpg" height="30" width="30" style="" class="ex ml-3"> -->
<br>
<input class="exit " type="submit" name="exit" value="EXIT" onclick="" style="width:70px;color:black;text-align: center;height: 28px;margin-top:05px; ">
</div>

</div>

</div>
</form>
  </div>

 








</body>
</html>

<script>


  
        </script> 


 
 <?php 
 
 if(isset($_SESSION['id'])){
     $i=$_SESSION['id'];


  /*   if($i=="sarthak")
     {
       ?>
      <script type="text/javascript">
        document.getElementById("user").innerHTML="<?php echo @$_SESSION['id']?>";
      $("#update").removeAttr("disabled");
       $("#del").removeAttr("disabled");
      </script>
      <?php*/
}

else{
 
  // ?>
       <script type="text/javascript">
    document.getElementById("user").innerHTML="<?php echo @$_SESSION['id']?>";
   </script>
   
   <?php
}
    
  
        
  ?>
  <script type="text/javascript">
  //  function abc(){
//document.getElementById("ban").style.display="none";      
//document.getElementById("check").style.display="none";
}


  </script>
  <?php 

 if(isset($_SESSION['id'])){
     $i=$_SESSION['id'];

  ?>
        <script type="text/javascript">
    document.getElementById("user").innerHTML="<?php echo @$_SESSION['id']?>";
   </script>
<?php
     }
?>

     