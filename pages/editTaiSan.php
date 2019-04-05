<?php

	include('connect.php');

	$id=$_GET['id'];
	$id_loai = $_GET['loaitaisan'];

	$result = $db->prepare("SELECT * FROM taisan WHERE TaiSan_ID= ".$id);
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





<form action="saveEditTaiSan.php" method="post" class = "form-group">

<div id="ac">

<input type="hidden" name="id" value="<?php echo $row['TaiSan_ID']; ?>" />
<span>Tên Tài Sản : </span><input type="text" name="tentaisan" class = "form-control" value="<?php echo $row['TaiSan_Ten']; ?>" />

<span>Loại Tài Sản : </span><select name="loaitaisan" style="width: 550px;" class="chzn-select">

                                 <?php
                                 $result1 = $db->prepare("SELECT * FROM loaitaisan" );
                                 $result1->execute();
                                 for($j=0; $row1 = $result1->fetch(); $j++){
                                  ?>
                                  <option value="<?php echo $row1['LoaiTaiSan_ID']; ?>"><?php echo $row1['LoaiTaiSan_Ten']; ?></option>
                                  <?php
                                }
                                ?>
                              </select><br/>







<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Update" />

</div>

</form>

<?php

}

?>