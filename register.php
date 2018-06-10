<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/home.css">


<script type="text/javascript">
function display_alert()
  {
  alert("Thanks!")
   }
</script>

<style>

.container {
    border-radius: 5px;
    background-color: rgba(41,36,33,0.6);
    color: white;
    padding: 20px;
    width: 96%;
}

input[type=text] {
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-position: 8px 6px;
    background-repeat: no-repeat;
    width: 200px;
    padding: 12px 45px;
    margin: 5px 0;
    box-sizing: border-box;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 30%;
}

input[type=password] {
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-position: 8px 8px;
    background-repeat: no-repeat;
    width: 200px;
    padding: 12px 45px;
    margin: 5px 0;
    box-sizing: border-box;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=password]:focus {
    width: 30%;
}

input[type=submit] {
width: 200px;
height: 40px;
border: none;
border-radius: 10px;
margin-top: 5px;
font-size: 16px;
background-color: rgba(41,36,33,0.4);
color:white;
}

input[type=submit]:hover {
background-color: rgba(41,36,33,0.8);
}

input[type=botton] {
width: 200px;
height: 40px;
border: none;
border-radius: 10px;
margin-top: 5px;
font-size: 16px;
text-align:center;
background-color: rgba(41,36,33,0.4);
color:white;
}

input[type=botton]:hover {
background-color: rgba(41,36,33,0.8);
}


</style>
</head>
<body>
<div class="row">
<div class="column middle">
<form align=center name="form" method="post" action="register_finish.php">
帳號：<input type="text" name="id" placeholder="Username.." /> <br>
密碼：<input type="password" name="pw" placeholder="Password.." /> <br>
再一次輸入密碼：<input type="password" name="pw2" placeholder="Password.." /> <br>
電話：<input type="text" name="telephone" placeholder="TEL.." /> <br>
地址：<input type="text" name="address" placeholder="Address.." /> <br>
<input type="submit" name="button" value="Submit" onclick = "display_alert()" />
<input type="botton" name="button" value="Cancel" onclick="javascript:location.href='index.html'"/> 
</form>
</div>
</div>
</body>
</html>
