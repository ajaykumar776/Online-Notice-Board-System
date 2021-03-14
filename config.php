
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");
if(!$db)
{
  echo"connection error";
  echo"please check manually!";  
}
?>