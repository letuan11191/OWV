<?php

session_start();

include('connect.php');

$a = $_GET['tentaisan'];
$b = $_GET['soluong'];
$c = $_GET['ghichu'];
$d = getdate();
$f = "Nhập mới";
 $result = $db->prepare("SELECT * FROM taisan");
          $result->execute();
          for($i=0; $row = $result->fetch(); $i++){
          	if ($row['TaiSan_Ten'] = $a) {
          		$e = $row['TaiSan_ID'];
          		$sql = "INSERT INTO dichuyentaisan (Ngay,TaiSan_ID, soluong, lydodichuyen, ghichu ) VALUES (?,?,?,?,?)";

				$q = $db->prepare($sql);

				$q->execute(array($d, $e, $b, $f, $c));

				header("location: taisan.php");
          	}
          		

          }

// $sql = "INSERT INTO dichuyentaisan (Ngay, ) VALUES (?)";

// $q = $db->prepare($sql);

// $q->execute(array($a));

// header("location: loaiphong.php");





?>