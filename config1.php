<?php
$dbhost='localhost';
$dbname='fdp';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");


 
if(isset($_POST['save']))
		{

				$cid= $_POST['fid'];
				$gstno= $_POST['dteno'];
				$cname= $_POST['n'];
				$company= $_POST['pno'];
				$cmobile= $_POST['eml'];
				$emailid= $_POST['clgname'];
				$address= $_POST['address'];
				$date=$_POST['interst'];
			
                      if($cid==""||$gstno==""||$cname==""||$company==""||$cmobile==""||$emailid==""||$address==""||$date=="")
				 {
				 	
                   echo "<script>alert('enter all fields');</script>";
				 	
				 }
				 else{
				 	if (!preg_match ("/^[a-z A-z]*$/", $cname) ) {  

    //$ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo "<script>alert('Invalid Name');</script>";  
} else {  
	if (!preg_match ("/^[0-9]*$/", $company) ){  

  echo "<script>alert('Invalid Number');</script>"; 
  }
  else{
$length = strlen ($company);  
  
if (strlen ($company) != 10) {   
echo "<script>alert('Invalid Number');</script>";
echo $length;
}
else
{


$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $cmobile) ){    

  echo "<script>alert('Invalid email');</script>"; 
  }
  else{
  
				$sql=mysqli_query($conn,"INSERT INTO register(fid,date,name,phone,emailid,clgname,address,area) VALUES ('$cid','$gstno','$cname','$company','$cmobile','$emailid','$address','$date')");
				 
				 
				 if ($sql) 
					{
						//echo "New record successfully Inserted!";
						$msg = "";
						echo "<script>alert('Record inserted successfully');</script>";
                    //header("location:customer.php?msg=".$msg);
						$query = "SELECT * from register order by fid desc";
$result = mysqli_query($conn,$query);
//$row = mysqli_fetch_array($result);
$queryresult = mysqli_num_rows($result);

// $row = mysqli_fetch_array($result);
if($queryresult > 0){
  while($row = mysqli_fetch_assoc($result)){
    
$lastid = $row['fid'];
  $a = substr($lastid,1);
  $a = intval($a);
  $a = "c".($a+01);
  $z=date('yy-m-d');
}
}
					} 
					
				 else 
					 {
					 	$msg = "enter id";
						echo "Error: " . $sql . "
						" . mysqli_error($conn);
					}
		
			}}}}}
			mysqli_close($conn);
		}
		
		?>

		<?php

		$dbhost='localhost';
         $dbname='fdp';
         $dbusername='root';
         $dbpass='';

           $conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");

                
		if(isset($_POST['update'])){

				$cid= $_POST['fid'];
				$gstno= $_POST['dteno'];
				$cname= $_POST['n'];
				$company= $_POST['pno'];
				$cmobile= $_POST['eml'];
				$emailid= $_POST['clgname'];
				$address= $_POST['address'];
				$date=$_POST['interst'];
			
				 	if (!preg_match ("/^[a-z A-z]*$/", $cname) ) {  

    //$ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo "<script>alert('Invalid Name');</script>";  
} else {  
	if (!preg_match ("/^[0-9]*$/", $company) ){  

  echo "<script>alert('Invalid Number');</script>"; 
  }
  else{
$length = strlen ($company);  
  
if (strlen ($company) != 10) {   
echo "<script>alert('Invalid Number');</script>";
echo $length;
}
else
{


$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $cmobile) ){    

  echo "<script>alert('Invalid email');</script>"; 
  }
  else{
				$sql=mysqli_query($conn,"UPDATE  register set  date ='$gstno',name ='$cname',phone='$company',emailid='$cmobile',clgname='$emailid',address='$address',area='$date' where fid ='$cid'");
				 
				 if ( $sql)
					{

						//echo " record successfully UPDATED!";
						//header("location:customer.php");
						echo "<script>alert('Record UPDATED');</script>";
					} 
					
				 else 
					 
					{
						echo "Error: " . $sql . "
						" . mysqli_error($conn);
					}}}}}
			mysqli_close($conn);
		}

?>
<?php


$host='localhost';
$user='root';
$password='';
$db="fdp";

$conn=mysqli_connect($host,$user,$password,"$db");

	if(!$conn)
		{
			die('Could not Connect My Sql:' .mysql_error());
		}
	
	if(isset($_POST['delete']))
		{
				$cid= $_POST['fid'];
				$gstno= $_POST['dteno'];
				$cname= $_POST['n'];
				$company= $_POST['pno'];
				$cmobile= $_POST['eml'];
				$emailid= $_POST['clgname'];
				$address= $_POST['address'];
				$date=$_POST['interst'];
			
if( $cid =="" || $cname =="" )
         
          {
          	$msg = "enter all fields";
          	echo "<script>alert('No data to Delete');</script>";
          	//header("location:enquiry.php?msg=".$msg);
          }
 else{
				$sql=mysqli_query($conn,"DELETE FROM register where fid = '$cid'");
				 
				 if ($sql)
					{
						//echo " record successfully DELETED!";
					//header("location:customer.php");
echo "<script>alert('Record Deleted');</script>";
					} 
					
				 else 
					 
					{
						echo "Error: " . $sql . "
						" . mysqli_error($conn);
					}
			}mysqli_close($conn);
		}

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
?>