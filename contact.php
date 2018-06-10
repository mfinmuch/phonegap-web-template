<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/home.css">

<script type="text/javascript">
function display_alert()
  {
  alert("Thanks!")
  }
</script>

<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: rgba(41,36,33,0.6);
    padding: 20px;
    width: 96%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
    color: white;
    font-size: 16px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
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
<div class="container">
<h2 style="color:white;">All suggestions are welcome</h2>
 
 <form action="home.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Suggestion</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="suggestion" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" onclick = "display_alert()">
    </div>
  </form>
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


