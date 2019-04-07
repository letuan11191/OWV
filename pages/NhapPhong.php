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



    <!-- DataTables CSS -->

    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">



    <!-- DataTables Responsive CSS -->

    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

        <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />



        <link rel="stylesheet" type="text/css" media="print" href="print.css" />

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



    <?php

    function productcode() {

        $chars = "003232303232023232023456789";

        srand((double)microtime()*1000000);

        $i = 0;

        $pass = '' ;

        while ($i <= 7) {



            $num = rand() % 33;



            $tmp = substr($chars, $num, 1);



            $pass = $pass . $tmp;



            $i++;



        }

        return $pass;

    }

    $pcode='P-'.productcode();

    ?>



</head>
<body>

                <?php include('navfixed.php');?>
                <div id="page-wrapper">

                 <div class="row">
                    <div class="col-lg-12">
                        <?php                        
                          include('connect.php');
                                 // if(isset($_GET['id']) && isset($_GET['phongid']))
                                 // {
                                 //  $result = $db->prepare("SELECT * FROM taisan WHERE TaiSan_ID = ".$_GET['id']);
                                 //  $result->execute();
                                 $result = $db->prepare("SELECT * FROM phongowv");                                 
                                 $result->execute();
                                 
                                 //  $ghichu = "Bổ sung";
                                  
                                 // }
                                 // else{
                                 $result1 = $db->prepare("SELECT * FROM phongowv ");
                                 $result1->execute();
                                 //  $result1 = $db->prepare("SELECT * FROM phongowv ");
                                 //  $result1->execute();
                                 //  $ghichu = "Mua Mới";
                                 
                                 // }  
                        ?>
                        <h1>Nhập phòng</h1>
                    </div>
                 <div class="modal-body">

                    <form action="SaveAddNhapPhong.php" method="post" class = "form-group" >

                        <div id="ac1">
                            <span>Phòng giữ : </span>
                             <select name="phonggiu" style="width: 550px;" class="chzn-select">
                             <?php
                                 
                                  for($i=0; $row = $result->fetch(); $i++){
                                  ?>

                                  <option value="<?php echo $row['Phong_ID']; ?>"><?php echo $row['Phong_Ten']; ?></option>
                                  <?php } ?>
                                 
                                  </select><br />
                                  <span>Phòng nhập : </span>
                                  <select name="phongnhap" style="width: 550px;" class="chzn-select">
                                    <?php
                                  for($j=0; $row1 = $result1->fetch(); $j++){
                                  ?>

                                  <option value="<?php echo $row1['Phong_ID']; ?>"><?php echo $row1['Phong_Ten']; ?></option>
                                  <?php } ?>

                              </select><br />

                            
                            <span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Nhập" />

                        </div>

                </div>
            </div></div>

</body>
</html>