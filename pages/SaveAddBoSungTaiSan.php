<?php

session_start();

include('connect.php');

$a = $_POST['taisanid'];

$c = $_POST['soluong'];

$d = date('d-m-Y');
$f = "Bổ sung";

$g = $_POST['phong'];

$h = $_POST['ghichu'];

/*$c = $_POST['cost'];

$d = $_POST['price'];

$e = $_POST['supplier'];*/

// $f = $_POST['qty'];

/*$g = $_POST['categ'];

$h = $_POST['date_del'];

$i = $_POST['ex_date'];*/

/*$j = $_POST['dname'];*/

/*$k = $_POST['unit'];*/

// echo getdate()." TaiSan_ID ".$a." so luong ".$c."lydodichuyen" .$f. " ghi chu ".$h." Phong_ID ".$g;



$sql = "INSERT INTO dichuyentaisan (Ngay,TaiSan_ID, soluong, lydodichuyen, ghichu, Phong_ID ) VALUES (?,?,?,?,?,?)";
                    $q = $db->prepare($sql);
                    $q->execute(array($d, $a, $c, $f, $h, $g));
				
header("location:taisan.php")




?>