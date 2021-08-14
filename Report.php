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
/*if(!isset($_SESSION['id'])){
  header("location:login.php");
}
else{
 $i=$_SESSION['id'];
 if($i != "sarthak"){
  header("location:index.php");

 }
  }*/
?>

<!DOCTYPE html>
<html>
<title>FDP Report</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<style type="text/css">
body{
/*background: linear-gradient(180deg, rgba(0, 0, 0, 0.28) 0%, rgba(245, 245, 245, 0) 100%);*/
background-color: #A9A9A9;
background-image: url("f4.jpg");
}
.exit{
	color: black;
	width:50px;
}
input[type=submit]{
   

background-color:white;
 
  border: none;
  border-bottom: 2px solid #000000;
}
input[type=text]{
background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;

}
input[type=date]{
background-color:white;
  
  border: none;
  border-bottom: 2px solid #000000;

}
input[type=button]{
  background-color:white;
  border:1px solid black;
}
.exit{
   background-color:white;
  border:1px solid black;
}
@media print{
  input[type=submit]{
    display: none;
  }
  input[type=text]{
    display: none;
  }
   input[type=date]{
    display: none;
  }
  a{
    display: none;
  }
  input[type=button]{
    display: none;
  }
  h5{
    display: none;
  }
  h4{
    display: none;
  }
  img{
    display: none;
  }
  #btn{
    display: none;
  }
}
.show{
  background-color: none;
}
.exit:hover{
color: black;

}

</style>
<body>
<form action="" method="POST">
   <div class="container-fluid con">
  <div class="row ">
    <div class="col-4">
      <div class="media">
    <!-- <img src="report.png" height="70" width="70" class="align-self-center mr-2"> -->
  
  <div class="media-body">
    <a></a>
    <h4 class="mt-3" style="color:black;">REPORTS</h4><br>  
    </div>  
  </div>
  </div>

  <div class=" offset-xl-6 col-xl-2 offset-sm-5 col-sm-3 offset-4 col-4">
    <div class="media">
 
  <div class="media-body">

    
    <a class=' btn fas fa-user align-style-center offset-4' id="btn" style='font-size: 2vw;color:#910E80;margin-left:4vw; '></a>
  
 

    <a class="admin" style="color:black;font-size:20px;"><span id="user"></span></a>
    </div>  
  </div>

  </div>
  </div>
  </div>

<div class="container-fluid">
  <div class="form-group form-inline" >
  <div class="pl-0 col-3 ">
  <div class="input-group-append">
<input type="text" class="" name="search" placeholder="Search FDP ID/NAME">
<input type="submit" name="search1" class="search1 border border-dark" value="search" ;>
</div>
  </div>
<div class="col-1  pt-1" style="text-align: center;"><h5>OR</h5></div>
<div class="col-1  pt-1" style="text-align: center;"><h5 >FROM</h5></div>
<div class="pl-2 col-2 ">
<input type="date" name="first" placeholder="Enter Date From">
</div>
<div class="col-1  pt-1" style="text-align: center;"><h5 >TO</h5></div>
<div class="pl-0 col-2 ">
<div class="input-group-append">
<input type="date" name="second" placeholder="Enter Date ">
<input type="submit" name="search2" value="search date " class="border border-dark">
</div>
</div>
  </div>

<br>
  <div class="form-group form-inline" >
<div class="pl-0 col-2 offset-3">
<input type="submit" name="show" class="show border border-dark" value="Show all data" onclick="" style="width:110px;">
</div>
  
  <div class="pl-0 col-2 ">
<input type="button" onclick="print()" value="Print" style="width:110px;" class="">
  </div>
  <div class="pl-0 col-2 ">
<a type="button" name="exit" value="Exit" class="exit border border-dark" href="home.php" style="width:110px;text-align: center;">EXIT</a>
  </div>
  </div>
  </div>



<br>
<div class="container-fluid">
	<center><table id="table1" class="table1 " border="2">
	

    <center><h3 class="">Details</h3></center><br>
    <tr>
   <!-- <th ></th> -->
	<th><center>FDP ID</center></th>
	<th><center>DATE</center></th>
    <th><center>NAME</center></th>
    <th><center>PHONE NUMBER</center></th>
    <th><center>EMAILID</center></th>
    <th><center>COLLEGE NAME</center></th>
    <th><center>ADDRESS</center></th>
    <th><center>AREA OF INTEREST</center></th>
   </tr>
	
	</center>
	<tfoot></tfoot>
	

<?php
$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");
   if(isset($_POST['search'])){
$a = $_POST["search"];


if($a!=""){
  $result=mysqli_query($conn,"SELECT * FROM register where fid = '$a'  or name = '$a'");
 

 $queryresult = mysqli_num_rows($result);
    if($queryresult > 0 ){

while($row=mysqli_fetch_array($result) )
{

echo '<tr>';
   echo '<td>'  .$row['fid']. '</td>';
   echo '<td>'  .$row['date'].'</td>';
   echo '<td>' .$row['name'].'</td>';
   echo '<td>' .$row['phone'].'</td>';
   echo '<td>' .$row['emailid'].'</td>';
  echo '<td>' .$row['clgname'].'</td>';
  echo '<td>' .$row['address'].'</td>';
  echo '<td>' .$row['area'].'</td>';
 // echo '<td>' .$row['cname'].'</td>';
 // echo '<td>' .$row['cid'].'</td>';
 //  echo '<td>' .$row['cmobile'].'</td>';
 //  echo '<td>' .$row['emailid'].'</td>';
   // echo '<td>' .$row['total'].'</td>';
  echo '</tr>';
  // $sr = $row['oid'];
 // $pname = $row['pname'];
 // echo ($row['pname']);
  // $saleprice = $row['saleprice'];
  // $quantity = $row['quantity'];
  // $total = $row['total'];
   
 } 
//  while($row=mysqli_fetch_array($cus))
// {

// echo '<tr>';
//    echo '<td>'  .$row['cname']. '</td>';
// }
}
else{
	echo '<script>alert("No found'.$a.'")</script>';
	 
}
}
}

if (isset($_POST['search2'])) {

  # code...
  $s=$_POST['first'];
  $a=$_POST['second'];
  $sql = mysqli_query($conn,"SELECT * From register Where date Between '$s' and '$a'  or  date = '$s' order by date");
  $count=mysqli_num_rows($sql); 

if($count > 0)
{

 while ($row = mysqli_fetch_array($sql)) {
    // $result=$row['cname'];
    // $output='<h2>'.$result.'</h2>';
    // echo "$output";echo '<tr>';
   echo '<td>'  .$row['fid']. '</td>';
   echo '<td>'  .$row['date'].'</td>';
   echo '<td>' .$row['name'].'</td>';
   echo '<td>' .$row['phone'].'</td>';
   echo '<td>' .$row['emailid'].'</td>';
  echo '<td>' .$row['clgname'].'</td>';
  echo '<td>' .$row['address'].'</td>';
  echo '<td>' .$row['area'].'</td>';

 // echo '<td>' .$row['cname'].'</td>';
 // echo '<td>' .$row['cid'].'</td>';
 //  echo '<td>' .$row['cmobile'].'</td>';
 //  echo '<td>' .$row['emailid'].'</td>';
   // echo '<td>' .$row['total'].'</td>';
  echo '</tr>';

  }
}
else
{
 echo '<script>alert("No found between '.$s.'  '.$a.'")</script>';
}
}

if(empty($_POST['search']) && empty($_POST['search2']) ){
	
$result1=mysqli_query($conn,"SELECT * FROM register order by fid ASC ");
$queryresult = mysqli_num_rows($result1);
    if($queryresult > 0 ){

 while($row=mysqli_fetch_array($result1))

{
	echo '<tr>';
   echo '<td>'  .$row['fid']. '</td>';
   echo '<td>'  .$row['date'].'</td>';
   echo '<td>' .$row['name'].'</td>';
   echo '<td>' .$row['phone'].'</td>';
   echo '<td>' .$row['emailid'].'</td>';
  echo '<td>' .$row['clgname'].'</td>';
  echo '<td>' .$row['address'].'</td>';
  echo '<td>' .$row['area'].'</td>';

 
  echo '</tr>';
}
}
else{
	//echo '<script>alert("No record found")</script>';
}
}

 
?>

</table>

<!--  <table id="table1" class="table1" border="2">
<br><br><h3>Enquiry Of that Product:-</h3>

<th>Enquiry Date</th>
<th>EID</th>
<th>CAS NO</th>
	<th>Product Name</th>
	<th>Quantity</th>
    <th>Customer Name</th>
<th>Customer ID</th>
<th>Customer MobileNo.</th>
<th>Customer Email-id</th>
<th>Remark</th>
<th>TARGET PRICE</th>-->
<?php
//$dbhost='localhost';
//$dbname='fdp';
//$dbusername='root';
//$dbpass='';

/*$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");
   if(isset($_POST['search'])){
$a = $_POST["search"];

if($a!=""){

  $result=mysqli_query($conn,"SELECT * FROM enquiry where castno = '$a' ");
 

 $queryresult = mysqli_num_rows($result);
    if($queryresult > 0 ){

while($row=mysqli_fetch_array($result) )
{

echo '<tr>';
   echo '<td>'  .$row['edate']. '</td>';
   echo '<td>'  .$row['eid']. '</td>';
   echo '<td>'  .$row['castno']. '</td>';
   echo '<td>'  .$row['pname'].'</td>';
   echo '<td>'  .$row['quantity'].'</td>';
  
 
 echo '<td>' .$row['cname'].'</td>';
 echo '<td>' .$row['cid'].'</td>';
  echo '<td>' .$row['cmobile'].'</td>';
  echo '<td>' .$row['emailid'].'</td>';
  echo '<td>' .$row['Remark'].'</td>';
  echo '<td>' .$row['target_price'].'</td>';
   // echo '<td>' .$row['total'].'</td>';
  echo '</tr>';
  
   
 } 

}
else{
	
	echo '<script>alert("No Enquiry Regarding cas no'.$a.'")</script>';
}
}
}
if (isset($_POST['search2'])) {
  # code...
  $s=$_POST['first'];
  $a=$_POST['second'];
  $sql = mysqli_query($conn,"SELECT * From enquiry Where edate Between '$s' and '$a' or edate='$s' order by edate");
  $count=mysqli_num_rows($sql); 

if($count > 0)
{
  while ($row = mysqli_fetch_array($sql)) {
    // $result=$row['cname'];
    // $output='<h2>'.$result.'</h2>';
    // echo "$output";
    echo '<tr>';
   echo '<td>'  .$row['edate']. '</td>';
   echo '<td>'  .$row['eid']. '</td>';
   echo '<td>'  .$row['castno']. '</td>';
   echo '<td>'  .$row['pname'].'</td>';
   echo '<td>'  .$row['quantity'].'</td>';
  
 
 echo '<td>' .$row['cname'].'</td>';
 echo '<td>' .$row['cid'].'</td>';
  echo '<td>' .$row['cmobile'].'</td>';
  echo '<td>' .$row['emailid'].'</td>';
  echo '<td>' .$row['Remark'].'</td>';
  echo '<td>' .$row['target_price'].'</td>';
   // echo '<td>' .$row['total'].'</td>';
  echo '</tr>';

  }

}
else
{
  echo '<script>alert("No Enquiry found between '.$s.'  '.$a.'")</script>';
}
}


if(empty($_POST['search']) && empty($_POST['search2'])){
	
$result1=mysqli_query($conn,"SELECT * FROM enquiry order by castno ASC ");
$queryresult = mysqli_num_rows($result1);
    if($queryresult > 0 ){

 while($row=mysqli_fetch_array($result1))

{
	
echo '<tr>';
echo '<td>'  .$row['edate']. '</td>';
   echo '<td>'  .$row['eid']. '</td>';
  echo '<td>'  .$row['castno']. '</td>';
   echo '<td>'  .$row['pname'].'</td>';
   echo '<td>'  .$row['quantity'].'</td>';
  echo '<td>' .$row['cname'].'</td>';
 echo '<td>' .$row['cid'].'</td>';
  echo '<td>' .$row['cmobile'].'</td>';
  echo '<td>' .$row['emailid'].'</td>';
   echo '<td>' .$row['Remark'].'</td>';
    echo '<td>' .$row['target_price'].'</td>';
    // echo '<td>' .$row['total'].'</td>';
  echo '</tr>';
}
}
else{
	//echo '<script>alert("No Record Found)</script>';
}
}

 */
?>
</table>
</div>
</body>
</html>
<?php 
 
 /*if(isset($_SESSION['id'])){
     $i=$_SESSION['id'];


     if($i=="sarthak")
     {
       ?>
      <script type="text/javascript">
        document.getElementById("user").innerHTML="<?php echo @$_SESSION['id']?>";
      $("#update").removeAttr("disabled");
       $("#del").removeAttr("disabled");
      </script>
      <?php
}

else{
 
  // ?>
       <script type="text/javascript">
    document.getElementById("user").innerHTML="<?php echo @$_SESSION['id']?>";
   </script>
   
   <?php
}
    
  }
    // alert("Only Admin can update or delete records");
  //     document.getElementById("user").style.display ="none";
  //   $("table").hide(); 
  //    $("p1").show();      
  //*/     
  ?> 

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
