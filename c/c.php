<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อธิชา ทองสุริชัยศรี น้ำหวาน</title>
</head>

<body>
<h1>สมัครสมาชิกชมรมแมวง่วงนอน (น้ำหวาาน)</h1>
	 <img src="1.jfif"height="300"><br>
<form method="post" action=""><br>
ชื่อ-สกุล <input type="text" name="a" required><br><br>
รหัสนิสิต<br>
        <input type="text" name="id"><br><br>
        เพศ <input type="radio" name="title" value="ชาย"> ชาย
    <input type="radio" name="title" value="หญิง"> หญิง<br><br>
		ที่อยู่<br>
        <textarea name="address" cols="30" rows="3"></textarea>
    <br><br>
    	เบอร์โทรศัพท์<br>
        <input type="text" name="Phone">
<br><br> 
     	ระดับการศึกษา<br>
     <select name="Edu">
        	<option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
            <option value="ปริญญาตรี">ปริญญาตรี</option>
            <option value="ปริญญาโท">ปริญญาโท</option>
            <option value="ปริญญาเอก">ปริญญาเอก</option>
            </select><br><br>
        อาหารที่ชอบ<br>
        <input type="checkbox" name="Food" value="กระเพราหมูกรอบ">กระเพราหมูกรอบ
        <input type="checkbox" name="Food" value="ข้าวผัดหมูไข่ดาว">ข้าวผัดหมูไข่ดาว
         <input type="checkbox" name="Food" value="ผัดซีอื๋วหมู">ผัดซีอื๋วหมู <br><br>
         Username<br>
         <input type="text" name="Username"><br><br>
         Passwoed<br>
         <input type="password" name="password"><br><br>
         
      <button type="submit" name="Sudmit">สมัครสมาชิก</button>
        <button type="reset" >ยกเลิก</button>
        <button type="button" onClick="window.print();">พิมพ์</button><br><br>
    <?php
if(isset($_POST['Sudmit'])){
	echo @$_POST['a']."<br>";
	echo @$_POST['id']."<br>";
	echo @$_POST['title']."<br>";
	echo @$_POST['address']."<br>";
	echo @$_POST['Phone']."<br>";
	echo @$_POST['Edu']."<br>";
	echo @$_POST['Food']."<br>";
	echo @$_POST['Username']."<br>";
	echo @$_POST['password']."<br>";
	}
	?>
</body>
</html>