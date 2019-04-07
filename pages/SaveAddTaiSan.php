<?php

session_start();

include('connect.php');

$a = $_POST['tents'];

$b = $_POST['loaitaisan'];

$c = $_POST['sl'];

$d = $_POST['ghichu'];

$e = $_POST['phong'];

$sql = "INSERT INTO taisan (TaiSan_Ten, loaitaisan_ID) VALUES (?,?)";

				$q = $db->prepare($sql);

				$q->execute(array($a, $b));

				header('location: SaveAddChiTietTaiSan.php?tentaisan='.$a.'&sl='.$c.'&ghichu='.$d.'&phong='.$e);





?>