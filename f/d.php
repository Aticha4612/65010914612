<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี(น้ำหวาน)</title>
</head>

<body>
<h1>อธิชา ทองสุริชัยศรี(น้ำหวาน)</h1>
<form method="post" action="">
คะแนน <input type="number" name="n" min="0" max="100" autofocus required>
<button type="submit" name="Submit" >OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
$score = $_POST['n'];
if($score>=80){
    $grade= "A";
}elseif ($score>=70) {
     $grade= "B";
}elseif ($score>=60) {
    $grade= "C";
}elseif ($score>=50) {
    $grade= "D";
}else{
    $grade= "F";
}
echo"คะแนน $score ได้เกรด $grade";
}
?>
</body>
</html>