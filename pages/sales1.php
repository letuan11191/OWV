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
  
  <link rel="shortcut icon" href="logo.jpg">
  <!-- Bootstrap Core CSS -->
  <link href="cashier/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="cashier/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="cashier/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="cashier/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="cashier/src/facebox.css" media="screen" rel="stylesheet" type="cashier/text/css" />
        <script src="cashier/lib/jquery.js" type="cashier/text/javascript"></script>
        <script src="cashier/src/facebox.js" type="cashier/text/javascript"></script>
        <script type="cashier/text/javascript">
          jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
              loadingImage : 'cashier/src/loading.gif',
              closeImage   : 'cashier/src/closelabel.png'
            })
          })
        </script>


      </head>

      <body>

        <?php include('navfixed.php');?>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Trả bưu phẩm <!-- | <?php echo $_GET['id']; ?> --> </h1>
            </div>

            <div id="maintable"><div style="margin-top: -19px; margin-bottom: 21px;">
            </div>
            <form action="incoming1.php" method="post" class = "form-group" >
              <?php
              $today = date('Y-m-d H:i:s');
              ?>
              <input type="hidden" name="pt" class = "form-control" value="<?php echo $_GET['id']; ?>" />
              <input type="hidden" name="invoice" class = "form-control" value="<?php echo $_GET['invoice']; ?>" />
              <!-- <label>From</label></br>
              <input type="text" name="from" style="width: 500px;" class="form-control" ></br> -->
              <label>Chọn công ty</label><br />
              <select  name="product"  style="width:500px;" class="chzn-select">
                <option></option>
                <?php
                include('connect.php');
                $result = $db->prepare("SELECT * FROM products");
                $result->bindParam(':userid', $res);
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                  ?>
                  <option value="<?php echo $row['product_code'];?>" 
                    <?php
                    if($row['qty_left'] == 0)
                    {
                      echo'disabled';
                    }
                    ?>
                    >
                    <?php echo $row['product_code']; ?>
                    - <?php echo $row['product_name']; ?>
                    <!-- - <?php echo $row['description_name']; ?> -->
                    - <?php echo $row['qty_left']; ?>

                  </option>
                  <?php
                }
                ?>
              </select>
              <br />
              <label>Ngày lấy</label></br>
              <input type="text"  style="width: 600px;" class = "form-control" name="date" value = "<?php echo $today; ?>" /></br>

              <label>Số lượng bưu phẩm lấy</label>
              <input type="number" name="qty" value="1" min = "1" class = "form-control"  autocomplete="off" style="width: 100px; padding-top: 6px; padding-bottom: 6px; margin-right: 4px;" />
              <label>Ghi chú</label></br>
              <input type="text-area" name="ghichu" style="width: 500px;" class="form-control" ></br>
              <!-- <label>Discount</label>
              <input type="text" name="discount" value="0" class = "form-control"  autocomplete="off" style="width: 100px; padding-top: 6px; padding-bottom: 6px; margin-right: 4px;" />
              <label>Value Add Tax:</label>
              <input type="text" name="vat" value=".12" class = "form-control"  autocomplete="off" style="width: 100px; padding-top: 6px; padding-bottom: 6px; margin-right: 4px;" /> -->
              <br>
              <input type="submit" class="btn btn-primary" value="Trả thư" class = "form-control" style="width: 123px;" />
            </form>
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th> Mã </th>
                  <th> Tên công ty </th>
                  <!-- <th> Description Name </th>
                  <th> Category </th> -->
                  <th> Số bưu phẩm </th>
                  <!-- <th> Price </th>
                  <th> Discount </th>
                  <th> VAT </th>
                  <th> Amount </th> -->
                  <!-- <th> Total Amount </th> -->
                  <!-- <th> Delete </th> -->
                </tr>
              </thead>
              <tbody>

                <?php
                $id=$_GET['invoice'];
                include('connect.php');
                $result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
                $result->bindParam(':userid', $id);
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                  ?>
                  <tr class="record">
                    <td><?php echo $row['product']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <!-- <td><?php echo $row['dname']; ?></td>
                    <td><?php echo $row['category']; ?></td> -->
                    <td><?php echo $row['qty']; ?></td>
                    <!-- <td>
                      <?php
                      $ppp=$row['price'];
                      echo formatMoney($ppp, true);
                      ?>
                    </td>
                    <td>
                      <?php
                      $ddd=$row['discount'];
                      echo formatMoney($ddd, true);
                      ?>
                    </td>
                    <td>
                      <?php
                      $fff=$row['vat'];
                      echo formatMoney($fff, true);
                      ?>
                    </td>
                    <td>
                      <?php
                      $ccc=$row['amount'];
                      echo formatMoney($ccc, true);
                      ?>
                    </td> -->

                    <!-- <td>
                      <?php
                      $dfdf=$row['total_amount'];
                      echo formatMoney($dfdf, true);
                      ?>
                    </td> -->
                    
                    <td><a href="delete1.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&qty=<?php echo $row['qty'];?>&code=<?php echo $row['product'];?>"> Delete</a></td>
                  </tr>
                  <?php
                }
                ?>
                <!-- <tr>
                  <td colspan="9"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
                  <td colspan="3"><strong style="font-size: 12px; color: #222222;">
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
                    $sdsd=$_GET['invoice'];
                    $resultas = $db->prepare("SELECT sum(total_amount) FROM sales_order WHERE invoice= :a");
                    $resultas->bindParam(':a', $sdsd);
                    $resultas->execute();
                    for($i=0; $rowas = $resultas->fetch(); $i++){
                      $fgfg=$rowas['sum(total_amount)'];
                      echo formatMoney($fgfg, true);
                    }
                    ?>
                  </strong></td>
                </tr>
 -->
              </tbody>
            </table><br>
            <!-- <a rel="facebox" class = "btn btn-primary" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&cashier=<?php echo $session_cashier_name?>&p_amount=<?php echo $ccc?>">Check Out</a>
 -->

            <div class="clearfix"></div>
          </div>

        </div>
      </div>
      <!-- /#page-wrapper -->



      <!-- jQuery -->
      <script src="cashier/vendor/jquery/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="cashier/vendor/bootstrap/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="cashier/vendor/metisMenu/metisMenu.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="cashier/dist/js/sb-admin-2.js"></script>

      <link href="cashier/vendor/chosen.min.css" rel="stylesheet" media="screen">
      <script src="cashier/vendor/chosen.jquery.min.js"></script>
      <script>
        $(function() {
          $(".chzn-select").chosen();

        });
      </script>

    </body>

    </html>
