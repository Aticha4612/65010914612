<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี น้ำหวาน</title>
</head>

<body>
	<h1>อธิชา ทองสุริชัยศรี น้ำหวาน</h1>
    <form method="post" action="">
    	ตัวเลข<input type="number" name="a" min="1" max="100" required autofocus><br><br>
        ชื่อ-สกุล <input type="text" name="b" required><br><br>
        จังหวัด <select name="province">
        	<option value="ขอนแก่น">ขอนแก่น</option>
            <option value="มาหาสารคาม">มหาสารคาม</option>
            <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
            </select><br><br>
        วันเดือนปีเกิด <input type="date" name="birthday"><br><br>
        
        <button type="submit" name="Sudmit">OK</button>
        <button type="reset" >ยกเลิก</button>
        <button type="button" onClick="window.print();">พิมพ์</button><br><br>
    </form>
    <hr>
    
<?php
if(isset($_POST['Sudmit'])){
	echo @$_POST['a']."<br>";
	echo @$_POST['b']."<br>";
	echo @$_POST['province']."<br>";
	echo @$_POST['birthday']."<br>";
	}
	?>
</body>
</html>