<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<?php
$username = $_POST['id'];
$password = $_POST['pw'];
$password2 = $_POST['pw2'];
$tel = $_POST['telephone'];
$address = $_POST['address'];
echo $username;

$fp = fopen("reg.txt","w");

fwrite($fp,"123456789");

fclose($fp);


?>
</body>
</html>
