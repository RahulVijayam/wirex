<?php 
session_start();
require_once('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(isset($_POST['submit']))
	{

		$loginid = $_POST['loginid'];
		$pass = $_POST['pass'];

		if(!empty($loginid) && !empty($pass))
		{

			$id_check = "SELECT * FROM `LoginValidationDetails` WHERE `userid`='$loginid'";

			$check_query = mysqli_query($conn, $id_check);

			if(mysqli_num_rows($check_query) == 1)
			{
				$fetch = mysqli_fetch_assoc($check_query);

				$h_pass = $fetch['password'];
				$role = $fetch['role'];
					$course = $fetch['course'];
				if( md5($pass) == $h_pass )
				{
				    if($role == "Admin")
				    {
					  $_SESSION['name'] = $fetch['name'];
					  $_SESSION['loginid'] = $fetch['userid'];
					  $_SESSION['pass'] = $fetch['password'];
					  $_SESSION['role'] = $fetch['role'];
					  
					  header("location:admin/index.php");
				    }
				    if($role == "student" && $course=="practical c programming")
				    {
					  $_SESSION['name'] = $fetch['name'];
					  $_SESSION['loginid'] = $fetch['userid'];
					  $_SESSION['pass'] = $fetch['password'];
					  $_SESSION['role'] = $fetch['role'];
					  header("Location:Activity2Ccourse/index.php");
				    }}
				else
				{
					echo "Invalid Email And Password";
				}
			}
			else
			{
					/*NEW*/
			    
			    
			    

			$id_check = "SELECT * FROM `Workshop` WHERE `email`='$loginid'  AND  `course`='Webdesigning'";

			$check_query = mysqli_query($conn, $id_check);

			if(mysqli_num_rows($check_query) == 1)
			{
				$fetch = mysqli_fetch_assoc($check_query);

				$passindb = $fetch['number'];
				$paymentstatus=$fetch['pstatus'];
					$course = $fetch['course'];
				if( $pass == $passindb )
				{
				    if($paymentstatus == "Completed")
				    {
					  $_SESSION['name'] = $fetch['name'];
					  $_SESSION['loginid'] = $fetch['email'];
					  $_SESSION['pass'] = $fetch['number'];
					  $_SESSION['role'] = $fetch['pstatus'];
					  
					  header("location:courses/Workshop/");
				    }
				    else{
				        echo "<h3 style='color:white'>Payment Not Completed Please Pay..Or Contact Admin</h3>";
				        echo '<script>alert("Payment Not Completed Please Pay..Or Contact Admin");</script>';
				    }
				}
				else
				{
				 echo "<h3 style='color:white'>User Not Registered</h3>";
				       	echo '<script>alert("User Not Registered");</script>';
				 
				}
			} 
			    
			    
			   
			   
			    
			    
			    
			    
			    
			    
			   }
		}

	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/anotherhome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
   <link rel = "icon" type = "image/png" href = "/btaoicon.png">
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--it is for sociamedia icons-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="usersontxt.php?uvon=showon"></script>
  <style>
  	      
   /* navigation bar css is starts here*/
.navigation    ul {
    list-style-type: none;
    margin-left:-30px;
    padding:0px;
    width:115%;
    margin-top:-15px;
    overflow: hidden;
    background-color:#50007B;
    text-decoration:none;
    color:white;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.navigation li {
display: inline;

margin-left:5px;
}

.navigation li a {
    display: block;
    color: white;
    text-align: center;
  
    padding:14px 40px;
    text-decoration: none;


}


.navigation li a:hover { 
 background-color:white;
 color:black;
    box-shadow: 0 44px 0 dolor:white;arkred;
    padding: 1em 1.5em;

}

 .alinks {
    animation: myfirst 2s 50;
}

@keyframes myfirst
{100%      {color:white;}
 100%      {color:white;}
100%      {color:white;}
   100%      {color:red;}

   100%      {color:red;}
      100%      {color:red;}
   100%      {color:red;}
      100%      {color:red;}


  </style>
</head>
<body style="background-color:black;height:60vh;">
    <script>
        window.onload = () => {
    let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    el.parentNode.removeChild(el);
}
function scrollWin()	
{
  window.scrollTo(0,0);
}

function scrollWin2()	
{
  window.scrollTo(0,640);
}
  
  
function scrollWin3()	
{
  window.scrollTo(0,1200);
}

function scrollWin4()	
{
  window.scrollTo(0,1770);
}
function scrollWin5()	
{
  window.scrollTo(0,2100);
}

  </script>

   
 <header class="container-fluid navbar-fixed-top" align="center" style="background-color:#50007B; color:white;  width:100%;">
<h3 style="padding:4px;color:white;" >WireX Technologies

  <p class="navbar-toggle glyphicon glyphicon-list btn btn-primary btn-lg " onclick=" scrollWin();" style="margin-top:-7px; color:white;" data-toggle="collapse"  data-target="#myNavbar">
          
    
      </p></h3> 
    
</header><br><br><br><br>

<nav class=" navigation " style="width:100%; ">
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
<ul  class="nav navbar-nav">
   
<div class="navbar-header">
     
    </div>

<li><strong><a  href="index.php" >HOME</a></strong></li>
   <li><strong><a  href="service.php" >SERVICES</a></strong></li>
   <li><strong><a  href="products.php" >PRODUCTS</a></strong></li>
  <li><strong><a  href="training.php" >Training Programs</a></strong></li>

   <li><strong><a  href="about.php" >About</a></strong></li>
    <li><strong><a  href="login.php" >Login</a></strong></li>



</ul>
</div>
</div>
</nav>



            
<form method="POST" class="container" style="width:50%;margin-left:25%;margin-top:5%;" >
    <h1 align="center" style="color:yellow">Login</h1>
   
    <label style="color:white;" >Login ID</label>
    <input type="text" name="loginid" class="form-control" autofocus="autofocus">
    
    <label style="color:white;" >Password</label>
    <input type="password" name="pass" class="form-control"  autofocus="autofocus"><br>
    <input type="submit" name="submit" value="Login" style="width:100%;" class="btn btn-success"><br><br>
     
</form>

<footer style="background-color:#50007B;width:100%;color:white;position:fixed;bottom:0px;padding:10px">
    
<h6 align="center" >    All Copyrights Are Reserved to WireX Technologies@2019</h6>
</footer>

</body>
</html>