<html>
<head>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
swfobject.embedSWF(
"open-flash-chart.swf", "boyi_chart", "97%", "400",
"9.0.0", "expressInstall.swf",
{"data-file":"data.php"} );

swfobject.embedSWF(
"open-flash-chart.swf", "kenny_chart", "97%", "400",
"9.0.0", "expressInstall.swf",
{"data-file":"data_kenny.php"} );


swfobject.embedSWF(
"open-flash-chart.swf", "co2_chart", "97%", "400",
"9.0.0", "expressInstall.swf",
{"data-file":"co2_data.php"} );

</script>
</head>
<body>
<br>
<div style = "float:left;width:33%;">  
<div id = 'boyi_chart'></div>
</div>

<div style = "float:left;width:33%;"> 
<div id = 'kenny_chart'></div>
</div>

<div style = "float:left;width:33%;">
<div id = 'co2_chart'></div>
</div>


</body>
</html>
