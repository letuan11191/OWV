<?php
 require_once('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OWV</title>
    
    <link rel="shortcut icon" href="logoc.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
   <!-- (1): Khai báo sử dụng thư viện CKEditor -->
   <script src="ckeditor/ckeditor.js"></script>
   
</head>
<body>
  <?php include('navfixed.php');?>
  <div id="page-wrapper">

  <h1>Gửi mail cho công ty </h1>
  
   <h2>Chọn ngày lễ</h2>


   
   <form action="cskh.php" method="post">
    <?php
  include('connect.php');
  $result = $db->prepare("SELECT * FROM ngayle");
  $result->execute();
  for($i=0; $row = $result->fetch(); $i++){        
    


?>
        <input type="radio" name="celebrate" value="<?php echo $row['id']; ?>"> <?php echo $row['tenngayle']; ?><br>
        
        
  <?php } ?>

      <input type="submit" name="button" value="Chọn"></br>
       <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
       <!-- <textarea id="editor1" name="editor1" cols="80" rows="10">
           
       </textarea>
       
       <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
       <!-- <script>
 
           CKEDITOR.replace( 'editor1' );
 
       </script>      -->
           
   </form>
 </div>
</body>
</html>
