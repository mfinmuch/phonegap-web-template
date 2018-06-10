<html>
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">

<style>

#mytable
{
width:100%;
height:50%;
margin:0px auto;
border:none;
overflow-x:auto;
overflow-y:auto;
}

table {
    border-collapse: collapse;
    height: 50%;
    width: 75%;
    background-color:rgba(70,130,180,0.2);
    color: black;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){
background-color:rgba(70,130,180,0.8);
color: white;
}

th {
    background-color: rgba(41,36,33,0.8);
    color: white;
}

tr:hover {background-color:rgba(255,165,0,0.6);
}

select {
    width: 30%;
    padding: 16px 20px;
    font-size: 16px;
    border: none;
    border-radius: 10px;
    background-color: #f1f1f1;
    margin-top:20px;
}

</style>

<title>資料表</title>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
</head>
<!--
<script language = "JavaScript">
function myrefresh()
{
window.location.reload();
}
setTimeout('myrefresh()',4000);
</script>
-->
<body>

<div class="topnav">
  <a class="active" href="home.php">Home</a></li>
  <a href="monitor.php">Monitor</a></li>
  <a href="history.php">History</a></li>
  <a href="contact.php">Contact</a></li>
  <a href="logout.php" style="float:right">Logout</a></li>
</div>


<?php
header('content-type:text/html;charset=utf-8');

session_start();

if($_SESSION['username']!=NULL){
include("member_check.php");
}
else{
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.html>';
}

$sql = 'SELECT * FROM devicecore';
$result = mysqli_query($conn,$sql) or die('mysql query error');

echo'<div class="row">';
echo'<div class="column middle">';

echo '<div id="mytable">';
echo "<table ALIGN = CENTER border = 0>"; //建立表格
echo "<tr>
	<th>ID</th>
	<th>device</th>
	<th>core0</th>
	<th>core1</th>
	<th>date</th>
	<th>time</th>
      </tr>";	

while($row = mysqli_fetch_array($result)){
	
	echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
	        <td>$row[4]</td>
		<td>$row[5]</td>
		</tr>";
}
echo "</table>";
echo '</div>';

require("history_chart.php");

echo '</div>';
echo '</div>';

?>
<!--
<br>
<FORM align = center method = "POST" ACTION="http://127.0.0.1/table.php">
Select a Table： 
<SELECT NAME = "TABLE">
<OPTION VALUE = "devicecore">devicecore
<OPTION VALUE = "core_0">core_0
<OPTION VALUE = "core_1">core_1
</SELECT>
<INPUT TYPE = "submit" NAME = "Submit_Bottom" VALUE = "選擇" style="width:120px;height:40px;font-size:16px;border:none;border-radius:10px;">
</FORM>
-->
<div class="footer">
 <p> Copyleft © 2018 All rights reserved</p>
<p>No.170, Sanxing Rd., Minxiong Township, Chiayi County 62102, Taiwan (R.O.C.)</p>
<p> Tel: (09)60229666</p>
<p>E-mail: ccu60229@gmail.com</p>
</div>


</body>
</html>
