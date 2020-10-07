<?php 
session_start();
require_once('config.php');
if(!isset($_SESSION['loginid']) && !isset($_SESSION['pass']) )
{
	header("location:/index.php");
}

if(isset($_GET['vid']))
{
session_destroy();
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
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
<body >
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

<script>
function printfunction() {
  window.print();
}
</script>
<?php

if(isset($_POST['submit_btn']))
{    
    $email=$_POST['email'];
    
    
    
       $query="select * from Workshop WHERE email='$email' AND pstatus='Completed' " ;
      $getdata=mysqli_query($conn, $query);
      
    if(mysqli_num_rows($getdata)>0){
      echo '<h3 style="color:black;" align="center">Online Receipt</h3>';
        
echo '<h4 align="center" style="color:green">Thanks for Making Payment,Hope! You Enjoy this  Workshop </h4>';

    while($row=mysqli_fetch_array($getdata, MYSQLI_ASSOC)){
        

echo '
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="smartbillfinal.jpg" alt="" style="width:50%; margin-left:25%;height:auto; margin-top:3px;">
        
        <div class="carousel-caption" >
        <br><br>
        <ul style="margin-bottom:5%;" align="center">
                  <li  style="color:white;list-style:none;"><strong> Bill No :-'. $row['BillNumber'].'</strong></li>
                  <li  style="color:white;list-style:none;"><strong>Date :-'.date("Y-m-d").'</strong></li>
</ul>
<ul align="left"  style="margin-left:15%;margin-bottom:10%;list-style:none;color:white;">
<h4>
<strong>
<li >Name:-'. $row['name'].'</li><br>
<li >Course:-'. $row['course'].'</li><br>
<li >Total Amount:-'. $row['amount'].'</li><br>
<li style="color:green;">Payment Status:-'. $row['pstatus'].'</li>
</strong>
</h4>
 </ul>      
  
        </div>
      </div>

    </div>
          </div>

    </div>';
    break;
    }
    }
      
    else{     echo 
          ' <script type=
          "text/javascript"> alert("Name or email is Incorrect otherwise payment is pending")</script>';
          echo "<h1 align='center' style='color:red'>Name or email is Incorrect otherwise payment is pending</h1>";
    }
}

?>
<br><br>
<button  class="btn btn-primary btn-lg" style="margin-left:43%" class="form-control" onclick="printfunction()">Click Here to Print</button><br><br>
<footer style="background-color:#50007B;width:100%;color:white;position:relative;bottom:0px;padding:10px">
    
<h6 align="center" >    All Copyrights Are Reserved to WireX Technologies@2019</h6>
</footer>

    </body>
</html>