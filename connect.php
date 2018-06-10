<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("member_check.php");
$username = $_POST['username'];
$password = $_POST['password'];

//搜尋資料庫資料
$sql = "SELECT * FROM member where username = '$username'";
$result = mysqli_query($conn,$sql) or die('bye bye');
$row = @mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($username == "admin" && $password == "admin"){
echo '<h1>Succeeded ! Waiting...</h1>';
echo '<meta http-equiv=REFRESH CONTENT=1;url=register_finish.php>';
}
else if($username != null && $password != null && $row[0] == $username && $row[1] == $password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $username;
        echo '<h1>Succeeded ! Waiting...</h1>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
}
else
{
	mysqli_close($conn);
        echo '<h1>Wrong username or password !</h1>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
?>
