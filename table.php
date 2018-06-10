<html>
<head>
<title>資料表</title>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8">
</head>
<script language = "JavaScript">
function myrefresh()
{
window.location.reload();
}
setTimeout('myrefresh()',5000);
</script>
<body>
<?php
header('content-type:text/html;charset=utf-8');
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'ks100686';
$dbname = 'group2';
$dbtable = $_POST['TABLE'];
$conn = mysqli_connect($dbhost,$dbuser,$dbpass); //連線mysql

if(!$conn){
die('fail to connect:'.mysqli_error());
}

echo "<P ALIGN =CENTER> successfully connected </P>"."<br>";

mysqli_query($conn , "SET NAMES 'utf8'"); //設定編碼
mysqli_select_db($conn , $dbname); //選擇資料庫

$sql = "SELECT * FROM $dbtable";
$result = mysqli_query($conn , $sql) or die('mysql query error');

echo "<table ALIGN = CENTER border = 1>"; //建立表格
echo "<tr>
	<td>ID</td>
	<td>core0</td>
	<td>core1</td>
	<td>date</td>
	<td>time</td>
      </tr>";	

while($row = mysqli_fetch_array($result)){
	
	echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
	      </tr>";
}
echo "</table>";

require("chart.php");
?>
<br>
<FORM align = center method = "POST" ACTION="http://127.0.0.1/table.php">
選擇資料表：
<SELECT NAME = "TABLE">
<OPTION VALUE = "devicecore">devicecore
<OPTION VALUE = "core_0">core_0
<OPTION VALUE = "core_1">core_1
</SELECT>
<INPUT TYPE = "submit" NAME = "Submit_Bottom" VALUE = "選擇">
</FORM>

<p align = center>
<A HREF = "login.html">登出</A>
</p>

</body>
</html>
