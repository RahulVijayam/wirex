<?php
session_start();
require_once('config.php');
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
  <li><strong><a  href="trainig.php" >Training Programs</a></strong></li>

   <li><strong><a  href="about.php" >About</a></strong></li>
    <li><strong><a  href="login.php" >Login</a></strong></li>



</ul>
</div>
</div>
</nav>
    <form style="width:50%;margin-left:25%;margin-top:18%;" method="POST">
                
               <h1 style="color:yellow" align="center">Registration Form</h1>
                
                 <label style="color:white;">Login id:-</label>
                <input type="text" name="loginid" class="form-control"><br>
                
                <label style="color:white;">Password:-</label>
                <input type="password" name="pass" class="form-control"> <br>
                
                <label style="color:white;"> Name:-</label>
                <input type="text" name="name" class="form-control"><br>
                
                
	<div class="form-group">
	
	<select class='form-control' name="course"  required="required" >
	    <option readonly='readonly'>Choose Amount Range</option>
	<option >practical c programming</option>
	<option >Web Designing</option>
	
	
</select>
</div>

                
                <br><input type="submit" style="width:100%;" class="btn btn-success"   name="submit_btn">
            
            </form>
            
            <?php
if(isset($_POST['submit_btn']))
{
   $loginid =$_POST['loginid'];
   $name=$_POST['name'];
   $password =$_POST['pass'];
    $course =$_POST['course'];
   $role = "student";
   $status="not verified";
   
  
   $encryptedpass=md5($password);
       $query="select * from LoginValidationDetails WHERE userid='$loginid'";
       $query_run=mysqli_query($conn,$query);
       if(mysqli_num_rows($query_run)>0)
       {
           echo 
          ' <h3>User Already Exists</h3>';
          
       }
       else  {
           $query="insert into `LoginValidationDetails` (`userid`, `name`, `password`, `role`, `status`,`course`) values('$loginid','$name','$encryptedpass','$role','$status','$course')";
           $query_run=mysqli_query($conn,$query);
       
       if($query_run) {
          
           echo '<h3 style="color:white;">User Registered Succcesfully</h3>';
       }
       else{
           
          echo '<h3 style="color:white;">Error</h3>';
       }
   }
      
   }
?>
            
            <br><br><br>
<footer style="background-color:#50007B;width:100%;color:white;position:fixed;bottom:0px;padding:10px">
    
<h6 align="center" >    All Copyrights Are Reserved to WireX Technologies@2019</h6>
</footer>
</body>
</html>