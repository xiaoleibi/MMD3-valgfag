<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='sunshengli') {
	if(setcookie('username',$_POST['username'],time()-3600)){
		header('Location:skip.php?url=index.php&info=logout page reloading！');
	}else{
		header('Location:skip.php?url=index.php&info=logout fail！');
	}
}
?>