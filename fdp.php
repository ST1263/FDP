 <?php
 require("user_auth.php");
//session_start();
?>
<?php
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
?>

<?php
include ("config1.php");


$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");

$z=date('yy-m-d');
$query = "SELECT * from register order by fid desc limit 1";
$result = mysqli_query($conn,$query);
//$row = mysqli_fetch_array($result);
$queryresult = mysqli_num_rows($result);

// $row = mysqli_fetch_array($result);
if($queryresult > 0){
  while($row = mysqli_fetch_assoc($result)){
    
$lastid = $row['fid'];

  $a = substr($lastid,1);
  $a = intval($a);
  $a = "F".($a+01);
  $z=date('yy-m-d');
}
}
else
{
  
  
  $a = "F101";
$z=date('yy-m-d');
}

?>

<?php
//include("config1.php");
$result=mysqli_query($conn,"SELECT * FROM register ORDER by fid ASC");

?>
<style>

</style>
<!doctype html>
<html>


<?php



if(isset($_POST['search']))
{
  $s = $_POST['ser'];
  //$s = $_POST['ser'];
    $sql ="SELECT * from register where fid = '$s' or name = '$s'";
    $result = mysqli_query($conn,$sql);

   $queryresult = mysqli_num_rows($result);
    if($queryresult > 0){
 while($row = mysqli_fetch_assoc($result)){
    
  
     $a=$row['fid'];
    $z=$row['date'];
    $c=$row['name'];
    $d=$row['phone'];
    $e=$row['emailid'];
    $f=$row['clgname'];
    $g=$row['address'];
    $z1=$row['area'];

}
}
else{
  echo"<script>alert('not found');</script>";
}
}
?>
   <head>
   <title>FDP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

</head>
<style type="text/css">
  body{

/*background: linear-gradient(180deg, rgba(0, 0, 0, 0.28) 0%, rgba(245, 245, 245, 0) 100%);*/
background-image: url("f4.jpg");
 background-repeat:no-repeat;
 background-size: 1380px 670px;
background-color: #A9A9A9;
 
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

color: black;
font-weight: bold;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.fdp{
  
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;


font-weight: bold;
color: black;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}


.fdp1{
 
background-color:white;
border: 1px solid ;
box-sizing: border-box;
border-radius: 10px;
}
.dte{
 
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
font-weight: bold;


color: black;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

}
.dte1{

background-color:white;

  border: none;
  border-bottom: 2px solid #000000;

}
.name{
  
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
font-weight: bold;


color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.name1{
  
background-color:white;
 
  border: none;
  border-bottom: 2px solid #000000;
}
.add{
 
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
color: #000000;
font-weight: bold;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.add1{
  

background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}
.email{
 
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
color: #000000;
font-weight: bold;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.email1{
  

background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}
.phone1{
  font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
color: #000000;
font-weight: bold;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.phone{
  background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}
.clg{
  
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;


font-weight: bold;
color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.clg1{
  position: relative;
 

background-color:white;
 
  border: none;
  border-bottom: 2px solid #000000;
}
.n{
  
font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;


font-weight: bold;
color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.n1{
  position: relative;
 

background-color:white;
 
  border: none;
  border-bottom: 2px solid #000000;
}
.area{

font-family: Calibri;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 22px;
color: #000000;
font-weight: bold;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.area1{
  

background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;
}

.exit{

}


.con1{
 border:1px solid red;
}
#check{
background-color:#E9E9E9;

  border: none;
  border-bottom: 2px solid #000000;
}
.fa-check{
            color:green;
      }

      .fa-times-circle{
            color:red;

      }
</style>

<body>
  <form action="" method="POST">

   <div class="container-fluid con">
  <div class="row ">
    <div class="col-4">
      <div class="media">
 <!--     <img src="report.png" height="70" width="70" class="align-self-center mr-2">-->
  
  <div class="media-body">
    <a></a>
    <!--  <h4 class="mt-3" style="color:#910E80;">REPORTS</h4>-->
    </div>  
  </div>
  </div>
  <div class=" offset-xl-6 col-xl-2 offset-sm-5 col-sm-3 offset-4 col-6">
    <div class="media">
 
  <div class="media-body">

    
    <a class=' btn fas fa-user align-style-center offset-4' id="btn" style='font-size: 2vw;color:#910E80;margin-left:4vw; '></a>
  
 

    <a class="admin" style="color:black;font-size:20px;"><span id="user"></span></a>
    </div>  
  </div>

  </div>
  

  <div class="container-fluid  con mt-5">
    <div class="row ">
      <div class="col-8 offset-4 ">
      <div class="input-group-prepend ser1">
        <span class="input-group-text">Search</span>
      
        <input type="text" name="ser" class="ser" placeholder="Search Name" style="width:18rem;">

        <button type="submit" name="search"><i class="fa fa-search" style="color:black;"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid con">
    <div class="row">
      <div class="col-3 offset-5">
         <h4 class="mt-5 prd">FDP REGISTRATION</h4>

      </div>
    </div>

  </div>

  <form action="" method="POST">
    <div class="container-fluid">
      <div class="form-group form-inline" style="margin-top: 30px;">
        <label class="col-lg-2 col-md-3 col-form-label col-6 fdp" style="">FDP ID:-</label>
        <div class="col-lg-2 col-md-3 col-6">
  <input type="text" class="form-control fdp1"  name="fid" value="<?php echo @$a ;?>" id="1" autocomplet="off" placeholder="Enter ID" style="width:185px; " readonly>
</div>
<label class="col-lg-2 col-md-3 col-form-label col-6 dte" style="">Date Of Registration:-</label>
<div class="col-lg-2 col-md-3 col-6">
<div class="input-group-append">
   <input type="date" class="form-control dte1" name="dteno" value="<?php echo @$z;?>" id="2" autocomplet="off" placeholder="Enter dte No" style="width:185px;">
 <!--    <span class="input-group-text" id="ban3"><i class="fas fa-times-circle"></i></span>
        <span class="input-group-text" id="check3" ><i class="fas fa-check"></i></span>-->
</div>
<div id=ab3></div>
</div>
   <label class="col-lg-2 col-md-3 col-form-label col-6 n" style="">Name:-</label>
<div class="col-lg-2 col-md-3 col-6">
<input type="text" class="form-control n1" name="n" value="<?php echo @$c;?>" id="name" autocomplet="off" placeholder="Enter Name" style="width:185px;">
</div>

      </div>
      <div class="form-group form-inline" style="margin-top: 30px;">

        <label class="col-lg-2 col-md-3 col-form-label col-6 phone1" style="">Phone Number:-</label>
<div class="col-lg-2 col-md-3 col-6">
<div class="input-group-append">
<input type="text" class="form-control phone input-field" name="pno" value="<?php echo @$d;?>" id="5" autocomplet="off" placeholder="Enter Phone No" style="width:185px;">
<!--  <span class="input-group-text" id="ban"><i class="fas fa-times-circle"></i></span>
        <span class="input-group-text" id="check" ><i class="fas fa-check"></i></span>-->
</div>
<div id=ab></div>
</div>
<label class="col-lg-2 col-md-3 col-form-label col-6 email" style="">Email id:-</label>
<div class="col-lg-2 col-md-3 col-6">
<div class="input-group-append">
     <input type="text" class="form-control email1" name="eml" value="<?php echo @$e;?>" id="em" autocomplet="off" placeholder="Enter Email" style="width:185px;">
<!--  <span class="input-group-text" id="ban1"><i class="fas fa-times-circle"></i></span>
        <span class="input-group-text" id="check1" ><i class="fas fa-check"></i></span>-->
</div>
<div id=ab1></div>
</div>

<label class="col-lg-2 col-md-3 col-form-label col-6 clg" style="">College Name:-</label>
<div class="col-lg-2 col-md-3 col-6">
<div class="input-group-append">
<input type="text" class="form-control clg1" name="clgname" value="<?php echo @$f;?>" id="em" autocomplet="off" placeholder="Enter College Name" style="width:185px">
<!--  -<span class="input-group-text" id="ban2"><i class="fas fa-times-circle"></i></span>
        <span class="input-group-text" id="check2" ><i class="fas fa-check"></i></span>-->
</div>
<div id=ab2></div>
</div>
      </div>
      <div class="form-group form-inline" style="margin-top: 30px;">
      
      <label class="col-lg-2 col-md-3 col-form-label col-6 add" style="">Address:-</label>
<div class="col-lg-2 col-md-3 col-6">
<input type="text" class="form-control add1" name="address" value="<?php echo @$g;?>" id="4" autocomplet="off" placeholder="Enter Address" style="width:185px;">
</div>
      
        <label class="col-lg-2 col-md-3 col-form-label col-6  area" style="">Area Of Interest:-</label>
<div class="col-lg-2 col-md-3 col-6">
<input type="text" class="form-control area1" name="interst" value="<?php echo @$z1;?>" id="7" autocomplet="off" placeholder="Enter Area Of Interest" style="width:185px;">
</div>
      </div>
      <div class="form-group form-inline" style="margin-top: 30px;">
      <form action="" method="POST">
<div class="col-3 ">  

<div class="offset-5 col-1 " style="margin-top: 10%;margin-left: 35%;">

  <!--    <img   src="save.jpg" height="30" width="30" class="" style="">-->
    </div>
<div class="media-body">
   <input class="save " type="submit" name="save" value="SAVE" onclick="config1.php;" style="margin-top: 5%;margin-left:33%;width:75px;color:black;">
   </div> 
   </div> 

<div class="col-3 ">

<div class="offset-5 col-1 " style="margin-top: 10%;margin-left: 35%;">
    <!--  <img   src="delete.jpg" height="30" width="30" class="" style=" ">-->
   </div>
<div class="media-body">
  <input class="update " type="submit" name="update" value="UPDATE" onclick="config1.php;" id="update" style="margin-top: 5%;margin-left:33%;width:75px;color:#black;">
    
    </div>
    </div>

    <div class="col-3 ">

<div class="offset-5 col-1 " style="margin-top: 10%;margin-left: 35%;">

   <!--   <img   src="update.jpg" height="30" width="30"  class="" style="">-->
    </div>
    <div class="media-body">
<input class="delete " type="submit" name="delete" id="del" value="DELETE" onclick="config1.php;" style="margin-top: 5%;margin-left:33%;width:75px;color:black " >


    </div>
    </div>

    <div class="col-3 ">
 
<div class="offset-5 col-1 " style="margin-top: 10%;margin-left: 35%;">

   <!--   <img   src="exit.jpg" height="30" width="30" style="" class="">-->
   </div> 
<div class="media-body">
 <input class="exit " type="submit" name="exit" value="EXIT" onclick="config1.php"  style="margin-top: 5%;margin-left:33%;width:75px;color:black;text-align: center;height: 28px;">
</div>
</div>
</form>
</div>

    </div>

  </form>


  


</div>

  

</form>
</body>

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
<script type="text/javascript">
//0function onkeyup 
function abc(){
document.getElementById("ban").style.display="none";      
document.getElementById("check").style.display="none";
document.getElementById("ban1").style.display="none";      
document.getElementById("check1").style.display="none";
document.getElementById("ban2").style.display="none";      
document.getElementById("check2").style.display="none";
document.getElementById("ban3").style.display="none";      
document.getElementById("check3").style.display="none";
}
document.getElementById('name').onkeyup =function(){
     //alert("yes");
      var letters = /^[A-Z a-z]+$/;
      var a = document.getElementById('name').value;
      //alert(a);
      if(!a.match(letters))
      {
            //alert("yes");
$("#name").css({"border-style":"inset","border-color": "red","border-right":"none","border-radius":"0px","background-color":"#E9E9E9"});
$("#ban").css({"border-style":"inset","border-color": "red","border-left":"none","border-radius":"0px","background-color":"#E9E9E9"});
document.getElementById("ab").style.color="red";
document.getElementById("check").style.display="none";
document.getElementById("ab").innerHTML=("Invalid data");
 document.getElementById("ban").style.display="";
      
      return false;
      }
       else{
         $("#name").css({"border-style":"solid","border-color": "green","border-right":"none","border-radius":"0px","background-color":"#E9E9E9"});
         $("#check").css({"border-style":"solid","border-color": "green","border-left":"none","border-radius":"0px","background-color":"#E9E9E9"});
// document.getElementById("check").style.borderleft="none";
           document.getElementById("ban").style.display="none";
           document.getElementById("check").style.display="";
           $("#ab").css({"color":"green"});
           document.getElementById("ab").innerHTML=("valid data");
      }
      
      }

      document.getElementById('5').onkeyup =function(){
    
      var mob = document.getElementById('5').value;
    
if (/^\d{10}$/.test(mob)) {
  
    $("#5").css({"border-style":"solid","border-color": "green","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#check1").css({"border-style":"solid","border-color": "green","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
//document.getElementById("check").style.borderleft="none";
           document.getElementById("ban1").style.display="none";
           document.getElementById("check1").style.display="";
           $("#ab1").css({"color":"green"});
           document.getElementById("ab1").innerHTML=("valid data");
document.getElementById("check1").style.display="";
} else {
   
    $("#5").css({"border-style":"inset","border-color": "red","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#ban1").css({"border-style":"inset","border-color": "red","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
document.getElementById("ab1").style.color="red";
document.getElementById("check1").style.display="none";
document.getElementById("ab1").innerHTML=("Invalid data");
 document.getElementById("ban1").style.display="";
    number.focus()
    return false
}
      
      
      }

      document.getElementById('em').onkeyup =function(){
    
      var emid = document.getElementById('em').value;
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
if(emid.match(mailformat))
{
  
    $("#em").css({"border-style":"solid","border-color": "green","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#check2").css({"border-style":"solid","border-color": "green","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
//document.getElementById("check").style.borderleft="none";
           document.getElementById("ban2").style.display="none";
           document.getElementById("check2").style.display="";
           $("#ab2").css({"color":"green"});
           document.getElementById("ab2").innerHTML=("valid data");
document.getElementById("check2").style.display="";
} else {
   
    $("#em").css({"border-style":"inset","border-color": "red","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#ban2").css({"border-style":"inset","border-color": "red","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
document.getElementById("ab2").style.color="red";
document.getElementById("check2").style.display="none";
document.getElementById("ab2").innerHTML=("Invalid data");
 document.getElementById("ban2").style.display="";
    number.focus()
    return false
}
      
      
      }

       document.getElementById('2').onkeyup =function(){
  
      var gst = document.getElementById('2').value;
      //var num = /^[0-9_@./#&+-]*$/
       var alpha = /^[a-z0-9]+$/i


    
if(gst.match(alpha) && gst!="" && gst.length==15)
{
  
    $("#2").css({"border-style":"solid","border-color": "green","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#check3").css({"border-style":"solid","border-color": "green","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
//document.getElementById("check").style.borderleft="none";
           document.getElementById("ban3").style.display="none";
           document.getElementById("check3").style.display="";
           $("#ab3").css({"color":"green"});
           document.getElementById("ab3").innerHTML=("valid data");
document.getElementById("check3").style.display="";
} else {
   
    $("#2").css({"border-style":"inset","border-color": "red","border-right":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
$("#ban3").css({"border-style":"inset","border-color": "red","border-left":"none","border-radius":"0px","background-color":"#F8F8F8","border-width":"2px"});
document.getElementById("ab3").style.color="red";
document.getElementById("check3").style.display="none";
document.getElementById("ab3").innerHTML=("Invalid data");
 document.getElementById("ban3").style.display="";
    number.focus()
    return false
}
      
      
      }
</script>

<script>
setInterval(function(){
  check_user();
},2000);
function check_user(){
  jQuery.ajax({
    url:'user_auth.php',
    type:'post',
    data:'type=ajax',
    success:function(result){
      if(result=='logout'){
        window.location.href='logout.php';
      }
    }
    
  });
}
</script>