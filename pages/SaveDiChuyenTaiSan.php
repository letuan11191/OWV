<?php

session_start();

include('connect.php');

$idtaisan = $_POST['taisanid'];

$phong = $_POST['phong'];

$soluong = $_POST['soluong'];

$from = $_POST['fromid'];

$result = $db->prepare("SELECT * FROM phongowv WHERE Phong_ID =".$from);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
	$ten_from = $row['Phong_Ten'];
}

$result1 = $db->prepare("SELECT * FROM phongowv WHERE Phong_ID =".$phong);
$result1->execute();
for($j=0; $row1 = $result1->fetch(); $j++){
	$ten_to = $row1['Phong_Ten'];
}

$result2 = $db->prepare("SELECT * FROM taisan WHERE TaiSan_ID =".$idtaisan);
$result2->execute();
for($k=0; $row2 = $result2->fetch(); $k++){
	$tents = $row2['TaiSan_Ten'];
}

$soluonggiamString = "-".$soluong;
$soluonggiam = (int)$soluonggiamString; 

$lydodichuyen = "Chuyen tu ".$from." sang ".$phong; 

$sql = "INSERT INTO dichuyentaisan(Phong_ID, TaiSan_ID, soluong,lydodichuyen) VALUES (?,?,?,?)";

				$q = $db->prepare($sql);

				$q->execute(array($from, $idtaisan,$soluonggiam,$lydodichuyen ));

				
$sql1 = "INSERT INTO dichuyentaisan(Phong_ID, TaiSan_ID, soluong,lydodichuyen) VALUES (?,?,?,?)";

				$p = $db->prepare($sql1);

				$p->execute(array($phong, $idtaisan,$soluong,$lydodichuyen ));




$data="<br>d-m-Y H:i:s: Di chuyen $soluong $tents tu phong $ten_from den phong $ten_to  </br>";

file_put_contents('log.txt', $data,FILE_APPEND);

$location ="location:chitiettaisantheophong.php?id=".$from;
header($location);

?>