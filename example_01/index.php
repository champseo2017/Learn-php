<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h3>The PHP Company</h3>
<?php
$banners = array(1=>"1.jpg","2.jpg","3.png","4.jpg"); //สร้าง array เก็บชื่อภาพเอาไว้ ลำดับ key เริ่มจาก 1
// echo "<pre>";
// print_r($banners);
// echo "</pre>";
$num_banners = count($banners); //นับจำนวน array 
$n = rand(1,$num_banners); //สร้างเลขสุ่มที่มีค่าระหว่าง 1-จำนวนป้ายที่มี
$img = $banners[$n]; //นำเลขสุ่มที่ได้ไปกำหนดเป็นเลขลำดับในการเลือกป้ายจาก array
?>
<img src="<?php echo $img  ?>"> 
    
</body>
</html>