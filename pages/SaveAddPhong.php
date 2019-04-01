<?php

session_start();

include('connect.php');

$a = $_POST['tenphong'];
$b = $_POST['loaiphong'];

$sql = "INSERT INTO phongowv (Phong_Ten, Loaiphong_ID) VALUES (?,?)";

$q = $db->prepare($sql);

$q->execute(array($a,$b));

header("location: phong.php");





?>