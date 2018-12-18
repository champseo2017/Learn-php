<?php
session_start();
echo 'Welcome start session to page #1';
$_SESSION['color'] = 'green';
$_SESSION['animal'] = 'cat';
$_SESSION['time'] = time();
echo '<br /><a href="session_page2.php">page 2</a>';
?>