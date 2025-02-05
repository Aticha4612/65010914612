<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี (หวาน)</title>
</head>

<body>
<h1>อธิชา ทองสุริชัยศรี (หวาน)</h1>

<form method="post" action="">
	จำนวน<input type="number" min="1" max="5000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>

<?php
if(isset($_POST['Submit'])){
	$c = $_POST['a'];
	echo "แสดงจำนวน $c รูป <br><br>";
	for($i=1; $i<=$c; $i++){
?>
	<img src="5.jpg" width="300">
<?php 
	} // end for
} // end if
?>
</body>
</html>