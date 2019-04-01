<?php

session_start();

include('connect.php');

$a = $_POST['tenloaitaisan'];

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

$sql = "INSERT INTO loaitaisan (LoaiTaiSan_Ten) VALUES (?)";

$q = $db->prepare($sql);

$q->execute(array($a));

header("location: loaitaisan.php");





?>