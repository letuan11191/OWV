<?php

// configuration

include('connect.php');



// new data

$id = $_POST['id'];

$a = $_POST['tentaisan'];

$b = $_POST['loaitaisan'];


$sql = "UPDATE taisan 

SET TaiSan_Ten=?, LoaiTaiSan_ID=?

WHERE TaiSan_ID=?";

$q = $db->prepare($sql);

$q->execute(array($a,$b,$id));

header("location: taisan.php");



?>