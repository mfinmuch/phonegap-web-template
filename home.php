<html>
<head>
<title>Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/home.css">
<style>

#layer1{
    width: 500px;
    height: 100px;
    background-color: rgba(41,36,33,0.2);
    position: relative;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example1;
    animation-duration: 4s;
    animation-fill-mode: forwards;
    color:white;
    text-align: center;
    font-size: 40px;
    padding: 10px;
    border-radius: 20px;
}
#layer2{
    width: 500px;
    height: 100px;
    background-color: rgba(41,36,33,0.2);
    position: relative;
    -webkit-animation-name: example2; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example2;
    animation-duration: 4s;
    animation-fill-mode: forwards;
    color:white;
    text-align: center;
    font-size: 40px;
    padding: 10px;
    border-radius: 20px;
}
#layer3{
    width: 500px;
    height: 100px;
    background-color: rgba(41,36,33,0.2);
    position: relative;
    -webkit-animation-name: example3; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example3;
    animation-duration: 4s;
    animation-fill-mode: forwards;
    color:white;
    text-align: center;
    font-size: 40px;
    padding: 10px;
    border-radius: 20px;
}

@keyframes example1 {
    0%   {background-color: rgba(41,36,33,0.0);left:0%;top:20%;}
    25%  {background-color: rgba(41,36,33,0.2);}
    50%  {background-color: rgba(41,36,33,0.4);}
    100% {background-color: rgba(41,36,33,0.6);left:32%;top:20%;}
}

@keyframes example2 {
    0%   {background-color: rgba(41,36,33,0.0);left:0%;top:25%;}
    25%  {background-color: rgba(41,36,33,0.2);}
    50%  {background-color: rgba(41,36,33,0.4);}
    100% {background-color: rgba(41,36,33,0.6);left:37%;top:25%;}
}

@keyframes example3 {
    0%   {background-color: rgba(41,36,33,0.0);left:0%;top:30%;}
    25%  {background-color: rgba(41,36,33,0.2);}
    50%  {background-color: rgba(41,36,33,0.4);}
    100% {background-color: rgba(41,36,33,0.6);left:42%;top:30%;}
}


</style>


</head>
<body>
<?php
session_start();

if($_SESSION['username']!=NULL){
include("member_check.php");
}
else{
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.html>';
}
?>

<div class="topnav">
  <a class="active" href="home.php">Home</a></li>
  <a href="monitor.php">Monitor</a></li>
  <a href="history.php">History</a></li>
  <a href="contact.php">Contact</a></li>
  <a href="logout.php" style="float:right">Logout</a></li>
</div>

<div class="row">
<div class="column middle">
<?php

echo '<div id="layer1">';
echo 'Welcome!'.'<br>'.$_SESSION['username'];
echo '</div>';
?>
<div id="layer2">
Real-Time Monitoring Displayed in Tables and Charts 
</div>

<div id="layer3">
Record All Information from Machines
</div>


</div>
</div>
<div class="footer">
 <p> Copyleft © 2018 All rights reserved</p>
<p>No.170, Sanxing Rd., Minxiong Township, Chiayi County 62102, Taiwan (R.O.C.)</p>
<p> Tel: (09)60229666</p>
<p>E-mail: ccu60229@gmail.com</p>
</div>



</body>
</html>
