<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='sunshengli') {
	echo "Hello{$_COOKIE['username']}Welcome Back！";
	echo "<a href='logout.php'>logout</a>";
}else {
	echo "<a href='login.php'>Please login</a>";
}

?>