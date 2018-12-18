<?php
session_start();
$s_color = $_SESSION['color'];
$s_a = $_SESSION['animal'];
$s_t = $_SESSION['time'];

echo 'Welcome session to page #2<p>';
if($s_color != null)
{
    echo $s_color.'<br>';

}else{
    echo "ไม่มี sesssion color<br>";
}

if($s_a != null)
{
    echo $s_a.'<br>';

}else{
    echo "ไม่มี sesssion animal<br>";
}

if($s_t != null)
{
    echo date('Y m d H:i:s',$s_t).'<br>';

}else{
    echo "ไม่มี sesssion time<br>";
}
echo '<br /><a href="session_destroy.php">session destroy</a>';
?>