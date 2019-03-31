<?php
// configuration
include('connect.php');
if(!isset($_POST['submit']))
{
	echo "Lỗi";
	header("home.php");
}
else
{
// new data
$id = $_POST['memi'];
$template = $_POST['editor1'];

// query
$sql = "UPDATE ngayle 
        SET template=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($template,$id));
header("location: ngayle.php");
}
?>