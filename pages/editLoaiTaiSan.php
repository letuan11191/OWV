<?php

	include('connect.php');

	$id=$_GET['id'];
	

	$result = $db->prepare("SELECT * FROM loaitaisan WHERE LoaiTaiSan_ID= ".$id);
	$result->execute();

	for($i=0; $row = $result->fetch(); $i++){

?>



	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



	<!-- MetisMenu CSS -->

	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">



	<!-- Custom CSS -->

	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">



	<!-- Custom Fonts -->

	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">





<form action="saveEditLoaiTaiSan.php" method="post" class = "form-group">

<div id="ac">

<input type="hidden" name="id" value="<?php echo $row['LoaiTaiSan_ID']; ?>" />
<span>Tên Loại Tài Sản : </span><input type="text" name="tenloaitaisan" class = "form-control" value="<?php echo $row['LoaiTaiSan_Ten']; ?>" />








<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Update" />

</div>

</form>

<?php

}

?>