<?php

session_start();

include('connect.php');

$a = $_GET['tentaisan'];
$b = $_GET['sl'];
$c = $_GET['ghichu'];
$d = getdate();
$f = "Nhập mới";
$g = $_GET['phong'];
         

 $result = $db->prepare("SELECT * FROM taisan WHERE TaiSan_Ten ='$a' ");
          $result->execute();
          for($i=0; $row = $result->fetch(); $i++){
                    $e = $row['TaiSan_ID'];
                    $sql = "INSERT INTO dichuyentaisan (Ngay,TaiSan_ID, soluong, lydodichuyen, ghichu, Phong_ID ) VALUES (?,?,?,?,?,?)";
                    $q = $db->prepare($sql);
                    $q->execute(array($d, $e, $b, $f, $c, $g));
                    echo $row["TaiSan_ID"];
                    header("location: taisan.php");
               }
              


?>