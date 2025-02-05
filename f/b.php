<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี</title>
</head>

<body>
	<h1>อธิชา ทองสุริชัยศรี(น้ำหวาน)</h1>

<?php
$name = "อธิชา ทองสุริชัยศรี(น้ำหวาน)";
$name .= " แมว ง่วงนอนนอยากนอนแล้ว";
$age = 20;
$price = 1510.45;

echo "ชื่อ-นามสกุล: ".$name."<br>";
echo "อายุ: ".$age."ปี<br>";
echo "ราคา: ".$price."บาท<hr>";

echo gettype($price)."<br>";
var_dump($price);
?>
</body>
</html>