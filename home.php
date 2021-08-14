<?php
require("user_auth.php");
//session_start();
?>
<?php
if(!isset($_SESSION['id'])){
  header("location:login.php");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>

    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
    <style type="text/css">
        * {
    margin: 0;
    padding: 0;
}
body {
    font-family: 'Poppins', sans-serif;
}
.wrapper {
    width: 1170px;
    margin: auto;
}
header {
    background:  url(f5.jpg);
    height: 100vh;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.nav-area {
    float: right;
    list-style: none;
    margin-top: 30px;
}
.nav-area li {
    display: inline-block;
}
.nav-area li a {
    color: #fff;
    text-decoration: none;
    padding: 4px 35px;
    font-family: poppins;
    font-size: 22px;
    text-transform: uppercase;
}
.nav-area li a:hover {
    background: #fff;
    color: #333;
}
.br{
    top:-65%;
    left:20%;
    position: absolute;

    }
    .admin{

    top:25%;
    left:75%;
    position: absolute;

    }
.logo {
    float: left;
}
.logo img {
    width: 100%;
    padding: 15px 0;
}
.welcome-text {
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
}
.welcome-text h1 {
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 60px;
}
.dropdown-menu{
    width: 50%;
    position: absolute;
}
.welcome-text h1 span {
    color: #00fecb;
}
.welcome-text a {
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color: #fff;
}
.welcome-text a:hover {
    background: #fff;
    color: #333;
}
/*resposive*/

@media (max-width:600px) {
    .wrapper {
        width: 100%;
    }
    .logo {
        float: none;
        width: 50%;
        text-align: center;
        margin: auto;
    }
    img {
        width: ;
    }
    .nav-area {
        float: none;
        margin-top: 0;
    }
    .nav-area li a {
        padding: 5px;
        font-size: 16px;
    }
    .nav-area {
        text-align: center;
    }
    .welcome-text {
        width: 100%;
        height: auto;
        margin: 30% 0;
    }
    .welcome-text h1 {
        font-size: 30px;
    }
}

    </style>  
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="fd.png" alt="">
        </div>
<ul class="nav-area">
    <!-- </a><br> -->
<li><a href="fdp.php">REGISTRATION</a></li>
<li><a href="Report.php">REPORT</a></li>
<li><a href="#"></a></li>
<div class="br col-xl-1 col-lg-2 col-sm-2 ">
<div class="dropdown">

<button type="button" class='btn fas fa-user' style='font-size:36px;color:#910E80;margin-top:10%;'  data-toggle="dropdown">
  
</button>
<a class="admin" style="color:black;font-size:20px;"><span id="user"></span></a> 
<div class="dropdown-menu">
    <a class="dropdown-item" href="changepass.php">Change Password</a> 
    <a class="dropdown-item" href="logout.php">Logout</a>
   
  </div>

</div>

</ul>
</div>
</div>
<!-- <div class="welcome-text">
        <h1>
WELCOME <span></span></h1>
<h1>FDP PROGARM</h1>
    </div>
 --></header>

</body>
</html>
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