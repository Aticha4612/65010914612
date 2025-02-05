<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี (หวาน)</title>
</head>

<body>
<h1>อธิชา ทองสุริชัยศรี (หวาน) สูตรคูณ while</h1>
<img src="https://mpics.mgronline.com/pics/Images/558000010358401.JPEG" width="300">
<form method="post" action="">
	แม่สูตรคูณ<input type="number" min="2" max="1000" name="a" required autofocus>
    <button type="submit" name="Submit">OK</button>
</form> <hr>

<?php
if(isset($_POST['Submit'])){
	$m = $_POST['a'];
	$i=1;
	while($i<=12){
		$x = $m * $i ;
?>
	<?=$m;?> x <?=$i;?> =  <?=$x;?> <br>
<?php
	$i++;
	} // end for
} // end if
?>

</body>
</html>