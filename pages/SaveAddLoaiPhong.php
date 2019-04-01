<?php

session_start();

include('connect.php');

$a = $_POST['tenloaiphong'];

// $b = $_POST['bname'];

// $c = $_POST['email'];

// $d = $_POST['note'];

/*$c = $_POST['cost'];

$d = $_POST['price'];

$e = $_POST['supplier'];*/

// $f = $_POST['qty'];

/*$g = $_POST['categ'];

$h = $_POST['date_del'];

$i = $_POST['ex_date'];*/

/*$j = $_POST['dname'];*/

/*$k = $_POST['unit'];*/

$sql = "INSERT INTO loaiphong (loaiphong_ten) VALUES (?)";

$q = $db->prepare($sql);

$q->execute(array($a));

header("location: loaiphong.php");





?>