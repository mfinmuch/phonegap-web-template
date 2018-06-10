<?php
$DBNAME = "st2018b";
$DBUSER = "st2018b";
$DBPASSWD = "st2018b";
$DBHOST = "localhost";
$usertable="devicecore";
 
$conn = mysqli_connect($DBHOST, $DBUSER, $DBPASSWD);
if (!$conn){
  echo "bye bye" ;
}
else{
	echo "success";
}
if(!mysqli_select_db($conn, $DBNAME)) {
  die ("無法選擇資料庫");
}
// 設定連線編碼
mysqli_query( $conn, "SET NAMES 'utf8'");
$sql ="select * from devicecore";
$result = mysqli_query($conn,$sql);
$rows = array();
while($r=mysqli_fetch_row($result)){
	$rows[]=$r[0];
}
print(json_encode($rows));

