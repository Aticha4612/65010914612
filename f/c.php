<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี(น้ำหวาน)</title>
</head>

<body>
	<h1>อธิชา ทองสุริชัยศรี(น้ำหวาน)</h1>

<?php
$student1 =75;
$student2 =60;
$student3 =82;
$student4 =59;
$student5 =64;

$sum = $student1+$student2+$student3+$student4+$student5;
$average = $sum/5;
echo "นิสิตคนที่ 1 ได้คะแนน {$student1} <br>";
echo "นิสิตคนที่ 2 ได้คะแนน {$student2} <br>";
echo "นิสิตคนที่ 3 ได้คะแนน {$student3} <br>";
echo "นิสิตคนที่ 4 ได้คะแนน {$student4} <br>";
echo "นิสิตคนที่ 5 ได้คะแนน {$student5} <br>";
echo "ผลรวมของคะแนนสอบของนิสิตทุกคน {$sum} <br>";
echo "คะแนนเฉลี่ยของนิสิตทุกคน {$average}";
?>

</body>
</html>