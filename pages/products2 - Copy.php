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

    
</head>

<body>
    <?php include('navfixed.php');?>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách khách hàng còn tồn thư(Đã gửi mail thông báo lần 1)</h1>
            </div>
            <div id="maintable"><div style="margin-top: -19px; margin-bottom: 21px;">

             <a  href = "#add" data-toggle = "modal" class="btn btn-primary">Thêm Khách Hàng</a>
                    <?php include 'addproduct.php'; ?>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                            <tr>
                                
                                <th> Tên công ty </th>
                                <!-- <th> Email </th> -->
                                
                                <!-- <th> Description </th> -->
                                <!-- <th> Category </th> -->
                                <!-- <th> Cost </th> -->
                                <!-- <th> SRP </th> -->
                                <!-- <th> Supplier </th> -->
                                <!-- <th witdh = "10%"> Thư tồn </th>
                                <th>Người gửi</th> -->
                                <th>Ngày gửi mail thông báo lần 1</th>
                                <!-- <th>Số mail thông báo đã gửi trong tháng</th> -->
                                <!-- <th witdh = "10%"> Product Unit </th> -->
                                <th> Số ngày chưa có phản hổi </th>
                                <th> Số thư tồn </th>
                                <th> Email</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            function formatMoney($number, $fractional=false) {
                                if ($fractional) {
                                    $number = sprintf('%.2f', $number);
                                }
                                while (true) {
                                    $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                                    if ($replaced != $number) {
                                        $number = $replaced;
                                    } else {
                                        break;
                                    }
                                }
                                return $number;
                            }
                            include('connect.php');

                            $m =date('m', strtotime('today')) ;
                            $d =date('d', strtotime('today')) ;
                            $y =date('Y', strtotime('today')) ;
                            $daynow = mktime(0,0,0,$m,$d,$y);



                            
                            $results = $db->prepare("SELECT * from a GROUP BY product_name having max(date_order)");
                            $results->execute();

                            for($j=0; $rows = $results->fetch(); $j++){
                                ?>
                                <tr class="record">
                                <td class="hidden"><?php echo $p_code = $rows['product_code']; ?></td>
                                <td ><?php echo $p_name = $rows['product_name']; ?></td>
                                <td ><?php echo $rows['date_order'];

                                   /* $sql1= $db->prepare("SELECT products.product_code AS product_code,products.product_name AS product_name,
                                    purchases.date_order AS date_order FROM products INNER join purchases on products.product_code = purchases.p_name
                                    WHERE
                                     product_code = :abab");
                                    $sql1->bindParam(':abab', $p_name);
                                    $sql1-> execute();*/
                                    /*for($ja=0; $rowsa = $sql1->fetch(); $ja++)
                                        ?><tr><td><?php {echo  $rowsa['date_order']; ?></td>
                            <?php
                                }*/
                            ?><!-- </tr> -->
                                </td>
                                
                                 <td ><?php 
                                 $date_order = $rows['date_order'];
                                 $aaa= strtotime($date_order);
                                 $m1= date('m', $aaa);
                                $d1= date('d', $aaa);
                                $y1= date('y', $aaa);

                                $dayorder=mktime(0,0,0,$m1,$d1,$y1);
                                $bbb = ($daynow - $dayorder)/86400;
                                echo $bbb; ?> <br> <?php
                                $array  = array('j' => $bbb, );
                                /*echo max($array);*/ ?></td>
                                <td><?php 
                                    $rrrrr = $rows['product_code'];
                                    $resultss = $db->prepare("SELECT * FROM products  WHERE product_code =:asas");
                                    $resultss->bindParam(':asas', $rrrrr);
                                    $resultss->execute();
                                    for ($j1=0; $rowss = $resultss->fetch() ; $j1++) { 
                                        echo $rowss['qty_left'];
                                        $qty = $rowss['qty_left'];
                                    
                                ?></td>

                                <td><?php echo $rowss['Email'];
                                            $aa= $rowss['Email']; } ?></td>
                                <td><?php if($qty <=0)
                                {echo '';}
                                else{ ?>
                                    <a href="Sendmail2.php?name=<?php echo $rrrrr;?>&email=<?php echo $aa;?>&qty=<?php echo $qty;?>" class ="btn btn-warning" title="Gửi mail lần 2"><span><i class="fa fa-send"></i></span></a></td><?php } ?>
                                <?php

                                    
                        }

                            

                            /*echo $array;*/
                            /*$result = $db->prepare("SELECT * FROM products ORDER BY product_name");
                            $result->execute();*/
                            //for($i=0; $row = $result->fetch(); $i++){
                                ?>
                                <!-- <tr class="record">
                                    <td><?php echo $row['product_code']; ?></td>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['note']; ?></td>
                                    <!-- <td><?php echo $row['description_name']; ?></td> -->
                                    <!-- <td><?php echo $row['category']; ?></td> -->
                                    <!-- <td align="right"><?php
                                        $pcost=$row['cost'];
                                        echo formatMoney($pcost, true);
                                        ?></td> -->
                                        <!-- <td align="right"><?php
                                            $pprice=$row['price'];
                                            echo formatMoney($pprice, true);
                                            ?></td> -->
                                            <!-- <td><?php echo $row['supplier']; ?></td> -->
                                            <!-- <td align="right"><?php echo $row['qty_left']; ?></td> -->
                                            <!-- <td ><?php echo $row['unit']; ?></td> -->
                                            <!-- <td><a rel="facebox" class = "btn btn-primary" href="editproduct.php?id=<?php echo $row['product_id']; ?>">
                                                <i class="fa fa-pencil"></i>  
                                            </a>  
                                            <a href="#" id="<?php echo $row['product_id']; ?>" class="btn btn-danger delbutton" title="Click To Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td> -->
                                    </tr>
                                    <?php
                                /*}*/
                                ?> 

                            </tbody>
                        </table>

                    <a href="" onclick="window.print()" class="btn btn-primary"><i class="icon-print icon-large"></i> Print</a>
                    <!-- <a href= "product_exp.php" class = "btn btn-primary">View Product Expiration</a> -->
                        <div class="clearfix"></div>
                    </div>
                  

                    <script src="js/jquery.js"></script>
                    <script type="text/javascript">
                        $(function() {
                            $(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
if(confirm("Sure you want to delete this update? There is NO undo!"))
{

   $.ajax({
     type: "GET",
     url: "deleteproduct.php",
     data: info,
     success: function(){

     }
 });
   $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
   .animate({ opacity: "hide" }, "slow");

}

return false;

});

                        });
                    </script>

                </div>
                <!-- /.row -->
            </div>

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

      
   </body>

   </html>
