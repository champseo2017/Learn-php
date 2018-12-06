
<?php

// $a = array('th'=>"thailand",'jp'=>"japan",'kr'=>"Korea");
   
// //ใช้ลูป while เพื่อให้เลื่อนพอยน์เตอร์ไปเรื่อยๆ จนกว่าจะคืนค่า false
// while(list($key,$value) = each($a)){
  
//   echo "$key => $value <br/>";
   
// }

// $sum = 0;
// echo "Sum of 1 -";
// for($i =1; $i <= 10; $i++){
//     $sum += $i;
//     if($sum >=30){
//         $x = $i;
//         echo $x. " = " . $sum;
//         exit;
//     }
// }
function ceil_num_01(){
  echo "<span> จำนวนเต็มที่อยู่ถัดไปจากจำนวนที่ระบุ  10.01  = </span>".ceil(10.01)."<br>";
  echo "<span> จำนวนเต็มที่อยู่ถัดไปจากจำนวนที่ระบุ  10.50  = </span>". ceil(10.50)."<br>";
  echo "<span> จำนวนเต็มที่อยู่ก่อนจำนวนที่ระบุ 1.01  = </span>". floor(1.01)."<br>";
  echo "<span> จำนวนเต็มที่อยู่ก่อนจำนวนที่ระบุ -1.01  = </span>". floor(-1.01)."<br>";
  echo "<span> round(จำนวน,[ทศนิยม]) ใช้ในการประมาณค่าเป็นจำนวนเต็มที่ไกล้เคียง หากเศษน้อยกว่า 0.5 จะตัดทิ้ง แต่หากเศษมีค่าตั้งแต่ 0.5 จะปัดไปเป็นจำนวนเต็ฒถัดไป 10.49 = </span>"
        . round(10.49)."<br>";
  echo "<span> intval(จำนวน) เลือกเอาเฉพาะจำนวนเต็มของจำนวนที่ระบุ หากมีทศนิยมจะตัดทิ้ง 10.99 = </span>"
        .intval(10.99)."<br>";
  echo "<span> floatval(จำนวน) เลือกเอาจำนวนที่ระบุในแบบ float ซึ่งฟังค์ชั่นนี้น่าจะมีประโยชน์ในกรณีที่จำนวนนั้นวางอยู๋ข้างหน้าสตริง 12.34 MB = </span>"
        .floatval("12.34 mb")."<br>";
}
function Compare(){
  echo "<h3> ฟังก์ชั่นในการเปรียบเทียบจำนวน </h3><br/>";
  echo "<span> min(6,7,3,8,9) หรือ min(array) หาค่าที่น้อยที่สุดในระหว่างจำนวนที่กำหนด ( 6,7,3,8,9 ) = </span> ".min(6,7,3,8,9)."<br/>"
       ."<span>  min(array)  10,10.5,3.4,5.2,20 = </span>".min(array(10,10.5,3.4,5.2,20))."<br/>";
  echo "<span> max(6,7,3,8,9) หรือ max(array) หาค่าที่มากที่สุดในระหว่างจำนวนที่กำหนด ( 6,7,3,8,9 ) = </span> ".max(6,7,3,8,9)."<br/>"
       ."<span>  max(array)  10,10.5,3.4,5.2,20 = </span>".max(array(10,10.5,3.4,5.2,20));
}
function Formatting_numbers(){
  $a = is_numeric(123);
  $b = is_numeric("1.23");
  $c = is_numeric("123abc");
  echo "<h3> ฟังก์ชั่นการตรวจสอบและจัดรูปแบบตัวเลข </h3><br/>";
  echo "<span> number_format(จำนวน) ใช้ในการจัดรูปแบบตัวเลข จาก 1234 เป็น 1,234 = </span> ".number_format(1234567)."<br/>"
  ."<span>  is_numeric(ข้อมูล) ตรวจสอบว่าข้อมูลที่ระบุนั้นเป็นตัวเลขหรือไม่ โดยจะคืนค่า true ถ้าเป็นข้อมูลแบบตัวเลข ที่ไม่มีอักขระอื่นๆ ปะปนอยู่ด้วย ทั้งนี้ตัวเลขที่เขียนในแบบสตริง เช่น '123' ก็ถือว่าเป็นตัวเลขด้วย </span><br>"
  ."<span> is_numeric(123) = 1 = true = </span>".$a."<br/>"
  ."<span> is_numeric('1.23') = 1 = true = </span>".$b."<br/>"
  ."<span> is_numeric('123abc') = ค่าว่าง = false = </span>".$c."<br/>";
}

function date_time(){

      date_default_timezone_set('Asia/Bangkok'); //ฟังค์ชั่น date_default_timezone_set ต้องเรียกใช้ ฟังค์ชั่นนี้ก่อนที่จะอ่านค่าวันเวลา
      $birth = strtotime("08/2/1993"); //ฟังค์ชั่น strtotime() แปลงจากสตริงให้เป็นวันเวลาในรูปแบบ timestamp แต่สตริงนั้นต้องเขียนในรูปแบบที่สามารถแปลงได้ เช่น Month/Date/Year
      $year_birth = date('Y') + 543;
      echo date("ผมเกิดเมื่อ d-m-$year_birth", $birth); //ฟังค์ชั่น date เป็นฟังค์ชั่นที่ใช้ในการจัดรูปแบบวันเวลาให้ตรงกับรูปแบบของแต่ล่ะท้องถิ่น (ฟังค์ชั่น date(รูปแบบวันเวลา,timestamp) เป็นฟังค์ชั่นที่ใช้ในการจัดรูปแบบวันเวลาให้ตรงกับรูปแบบของแต่ล่ะท้องถิ่น ซึ้งค่า timestamp คือวันเวลาที่ต้องการ หากไม่กำหนดจะถือว่าเป็นวันเวลาปัจจุบัน )
      $days = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์"); //เก็บรูปแบบของวันใว้ใน array แบบไม่มี key
      $months = array(1=>"มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม"); //ประกาศตัวแปร $months เก็บค่า array ของเดือนทั้ง 12 เดือนไว้ มี key ของเดือนเริ่มต้นที่ 1 เก็บไว้ใน array
      $d = date('w'); //ลำดับของวันในรอบสัปดาห์ (0-6) เอามาเป็น key ของวันที่เก็บไว้ในตัวแปร $days
      $day = $days[$d]; //ชื่อวันภาษาไทยโดยมี key ของลำดับวันเวลาปัจจุบันอยู่ จากตัวแปร $d
      $date = date('j'); // j ใช้แทนวันที่ของเดือนแบบไม่มี 0 นำหน้าเลขหลักเดียว เช่น 1,2,30
      $m = date('n'); //ลำดับของเดือนแบบไม่มี 0 นำหน้า (1-12)
      $month = $months[$m]; //เอาลำดับของเดือนแบบไม่มี 0 นำหน้ามาเป็น key ให้กับตัวแปร $months ที่เก็บ array ของเดือนทั้ง 12 ไว้โดยมี key เริ่มต้นที่ 1
      $year = date('Y') + 543; //ปี พ.ศ + 543 
      echo "<br>วันนี้ตรงกับวัน $day วันที่ $date เดือน $month ปี $year <br>";
      echo date("ขณะนี้เวลา H:i:s")."</br>";
}
function size_file()
{

      $get_path = "img_00123456789.png";
      $pathinfo = pathinfo($get_path, PATHINFO_BASENAME);
      $bytes = filesize($pathinfo);
      $size = $bytes . " Bytes";
      if($bytes >= 1073741824){ // 1 GB

            $size = $bytes / 1073741824;
            $size = round($size,2) . " GB";

      }

      else if($bytes >= 1048576){ // 1 MB

            $size = $bytes / 1048576;
            $size = round($size,2). " MB";

      }

      else if($bytes >= 1024){ // 1 KB

            $size = $bytes / 1024;
            $size = round($size,2) . " KB";

      }

      echo "ไฟล์: $pathinfo มีขนาด $size<br>";
      
      // if(file_exists($get_path)){

      //       echo "have file";

      // }else{
      //       echo "No file";
      // }

}

function vis_count () {
      $f = "counter.txt"; //ชื่อไฟล์สำหรับเก็บข้อมูล
      $v = 0;
      if(file_exists($f)){
            $v = file_get_contents($f);
      }
      else{
            $v = 1; //กำหนอดค่าเริ่มต้นที่ต้องการ
      }
      $v = intval($v) + 1; //เพิ่มค่าจากเดิมไปอีก 1
      $html_decimail = array("&#9450;","&#9312;","&#9313;","&#9314;",
                              "&#9315;","&#9316;","&#9317;","&#9318;",
                              "&#9319;","&#9320;"
                              );
      $visitor = number_format($v);
      $len = strlen($visitor);
      $counter = "";
      for($i = 0; $i < $len; $i++){
            $n = $visitor[$i]; //จากหลักการที่ว่า string คือ array ของอักขระ
            if($n != ","){

                  $counter .= $html_decimail[$n];

            }
            else{ $counter .= ","; }
      }

      echo "<div id=\"visitor\">คุณเป็นผู้เยียมชมเว็บไซต์ลำดับที่:<span>$counter</span></div><br>";
      file_put_contents($f,$v); //อัพเดตโดยเขียนทับจำนวนเดิม(ถ้าไม่มีไฟล์อยู่ก่อน ไฟล์จะถูกสร้างให้เอง)

}




ceil_num_01();
Compare();
Formatting_numbers();
date_time();
size_file();
vis_count();