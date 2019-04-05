<?php

// configuration

include('connect.php');



// new data

$id = $_POST['id'];

$a = $_POST['tenloaitaisan'];




$sql = "UPDATE loaitaisan 

SET LoaiTaiSan_Ten=?

WHERE LoaiTaiSan_ID=?";

$q = $db->prepare($sql);

$q->execute(array($a,$id));

header("location: loaitaisan.php");



?>