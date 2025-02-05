<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี (หวาน)</title>
</head>

<body>
<h1>อธิชา ทองสุริชัยศรี (หวาน) สูตรคูณ</h1>
<img src="https://s.isanook.com/ca/0/ud/274/1371037/13960095911396009601l.jpg" width="300">
<form method="post" action="">
	แม่สูตรคูณ<input type="number" min="2" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>

<?php
if(isset($_POST['Submit'])){
	$m = $_POST['a'];
	for($i=1; $i<=12; $i++){
		$x = $m * $i ;
?>
	<?=$m;?> x <?=$i;?> =  <?=$x;?> <br>
<?php 
	} // end for
} // end if
?></body>
</html>