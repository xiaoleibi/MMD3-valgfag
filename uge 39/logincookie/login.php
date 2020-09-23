<?php 
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='xbi') {
	exit('you are logined in already');
}
if(isset($_POST['submit'])){
	if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']==='xbi' && $_POST['password']==='123'){
		if(setcookie('username',$_POST['username'],time()+3600)){
			header('Location:skip.php?url=index.php&info=login success！');
		}else{
			echo 'cookie set up fail！';
		}
	}else{
		header('Location:skip.php?url=index.php&info=sorry，username and password failed，login fail！');
	}
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="utf-8" />
<title>Please Login</title>
</head>
<body>
<form method="post" action="login.php">
   Name：<input type="text" name="username" />
   Password：<input type="password" name="password" />
	<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>