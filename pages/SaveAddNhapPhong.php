<?php

session_start();

include('connect.php');

$a = $_POST['phonggiu'];

$b = $_POST['phongnhap'];

$enable = 1;


echo $a."    ".$b;
if($a == $b)
{
	echo "Không thể nhập 2 phòng giống nhau";
	
}
else
{
$sql2 = "UPDATE dichuyentaisan SET Phong_ID = ?  WHERE Phong_ID =?";
$d = $db ->prepare($sql2);
$d->execute(array($a, $b));


$sql1 = "DELETE FROM phongowv  WHERE Phong_ID =?";
$c = $db ->prepare($sql1);
$c->execute(array($b));


}
				
//header("location:phong.php")




?>