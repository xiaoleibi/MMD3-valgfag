<html>
  <head>
  <title>Password Creator</title>
  </head>
  <body>
 

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="pasord">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['pasord'];
    if (empty($name)) {
        echo "password is empty";
        

    } else {
       

        echo "<h2>" . 'The passwords for the string are:'.$name. "</h2>"; 
       
       
     }
}
?>

<ul>
  <li><b>MD5:</b> <?=md5($name)?>
  <li><b>Crypt:</b> <?=crypt($name)?>
  <li><b>hashing:</b> <?=password_hash($name, PASSWORD_DEFAULT);?>


 </ul>