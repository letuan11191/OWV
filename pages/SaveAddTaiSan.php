<?php

session_start();

include('connect.php');

$a = $_POST['tentaisan'];

$b = $_POST['loaitaisan'];

$c = $_POST['soluong'];

$d = $_POST['ghichu'];


 

/*$c = $_POST['cost'];

$d = $_POST['price'];

$e = $_POST['supplier'];*/

// $f = $_POST['qty'];

/*$g = $_POST['categ'];

$h = $_POST['date_del'];

$i = $_POST['ex_date'];*/

/*$j = $_POST['dname'];*/

/*$k = $_POST['unit'];*/

$sql = "INSERT INTO taisan (TaiSan_Ten, loaitaisan_ID) VALUES (?,?)";

				$q = $db->prepare($sql);

				$q->execute(array($a, $b));

				header('location: SaveAddChiTietTaiSan.php?tentaisan='.$a.'&soluong='.$c.'&ghichu='.$d);





?>