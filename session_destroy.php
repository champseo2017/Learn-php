<?php
session_start();
echo "ยกเลิกการลงทะเบียนตัวแปรทั้งหมดของเซสชัน";
session_destroy();
echo '<br /><a href="session_page2.php">page 2</a>';
?>