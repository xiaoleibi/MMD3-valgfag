You have been to this page times.

<?
session_start();
if(!isset($_SESSION["count"])) {
    $_SESSION["count"]= 1;
     }
 
  

?>
You have been to this page <?  echo $_SESSION["count"] ?> times.
<?
?????>