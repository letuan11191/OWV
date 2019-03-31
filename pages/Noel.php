<?php
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

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

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- DataTables CSS -->
  <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" media="print" href="prints.css" />
  <link rel="stylesheet" type="text/css" href="tcal.css" />
  <script type="text/javascript" src="tcal.js"></script>

  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>


</head>

<body>
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                            <tr>
                                
                                <th width="40%"> Tên công ty </th>
                                <th width="50%"> Email </th>
                                <th width="10%"> Gửi mail</th>
                                
                            </tr>
                        </thead>
<?php
include ('connect.php');
$result = $db-> prepare(" SELECT * FROM products  WHERE noel !='1' order by product_name");
  $result-> execute();
  for($i=0;$row = $result->fetch();$i++)
  {
    ?>
    <tr class="record">
    <?php
    $macongty = $row['product_id'];
    $tencongty = $row['product_name'];

    
    $Email = $row['Email'];
    ?>
    <td><?php echo $tencongty;?></td>
    <td><?php echo $Email;?></td>
  
    
    <td><a href="Sendmail_Noel.php?macongty=<?php echo $macongty; ?>&email=<?php echo $Email;?>&tencongty=<?php echo $tencongty; ?>" class ="btn btn-primary"><span>Gửi mail thông báo</span></a></td>
  </tr>
    <?php
  }
  ?>
</body>
</html>