<?php
$dbhost='localhost';
$dbname='jnex_db';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");

//$id= $_POST['id'];
       // $edate= $_POST['edate'];
       
if(!empty($_POST['insert']))
{
  $s = $_POST['id'];
   $pass= $_POST['pass'];
    $sql ="SELECT * from login where userid = '$s' ";
    $result = mysqli_query($conn,$sql);
    //$a=$sql;
   $queryresult = mysqli_num_rows($result);
    if($queryresult > 0){
 while($row = mysqli_fetch_assoc($result)){
    
  /*<input type="text" name="name" value=" <?php //echo "".$row. ""?>;"
    <!--<input type="text" name="name" value=" <?php  //echo $row['name'] ?>"/>-->*/
    
     
    $a=$row['id'];
    $b=$row['pass'];
    
  //insert1.attr('disabled',true);
}
  if('id'==$a && 'pass' == $b){
	echo "<script>alert('login successfully');</script>";
}
else
{

echo "<script>alert('incorrect id password');</script>";
}

  }

}

?>
<?php
$dbhost='localhost';
$dbname='jnex_db';
$dbusername='root';
$dbpass='';

$conn = mysqli_connect("$dbhost", "$dbusername", "$dbpass", "$dbname");
?>
