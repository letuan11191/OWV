<?php
session_start();
include('connect.php');
$a = $_GET['name'];
$b = $_GET['qty'];
$c = $_GET['id'];
$array = explode(', ', $c);
/*$w = $_POST['pt'];
$r = $_POST['vat'];*/
$date = date('m/d/Y');
$month = date('F');
$year = date('Y');
$n = date('Y-m-d H:i:s');

/*$discount = $_POST['discount'];*/
$result = $db->prepare("SELECT * FROM products WHERE product_code= :userid");
$result->bindParam(':userid', $a);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
/*$asasa=$row['price'];*/
$name=$row['product_name'];
/*$dname=$row['description_name'];*/
/*$categ=$row['category'];*/
$qtyleft=$row['qty_left'];
}

//edit qty
$sql = "UPDATE products 
        SET qty_left=qty_left-?
		WHERE product_code=?";
$q = $db->prepare($sql);
$q->execute(array($b,$a));
/*$fffffff=$asasa-$discount;*/
/*$d=$fffffff*$c;*/
$z=$qtyleft-$c;
/*$vat=$d*$r;*/
/*$total=$vat+$d;*/
// query
$sql = "INSERT INTO sales_order (invoice,product,qty/*,amount*/,name/*,price,discount,category*/,date,omonth,oyear,qtyleft/*,dname,vat,total_amount*/) VALUES (:a,:b,:c,/*:d,*/:e,/*:f,:g,:h,*/:i,:j,:k,:l/*,:m,:n,:o*/)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':e'=>$name,':i'=>$date,':j'=>$month,':k'=>$year,':l'=>$z/*':m'=>$dname,':n'=>$vat,':o'=>$total*/));

foreach ($array as $key) {
	$sql = "UPDATE purchases
		SET ngay_tra =?
		WHERE transaction_id=?";
$q = $db->prepare($sql);
$q->execute(array($n,$key));
}

foreach ($array as $key) {
	$sql1 ="UPDATE purchases
		SET status =?
		WHERE transaction_id=?";
		$status = 'Khách hàng đã nhận';
$q1 = $db->prepare($sql1);
$q1->execute(array($status,$key));
}

foreach ($array as $key) {
	$sql2 ="UPDATE purchases
		SET cost_old = qty
		WHERE transaction_id=? AND cost_old =''";
$q2 = $db->prepare($sql2);
$q2->execute(array($key));
}

foreach ($array as $key) {
	$sql3 ="UPDATE purchases
		SET qty = '0'
		WHERE transaction_id=?";
$q3 = $db->prepare($sql3);
$q3->execute(array($key));
}


header("location: products.php");


?>