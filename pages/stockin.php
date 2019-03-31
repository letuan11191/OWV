  <?php
  include('connect.php');
  $id=$_GET['iv'];
  $p_name = $_GET['name'];
  $qty = $_GET['qty'];
  $date = $_GET['date'];
  $t_id = $_GET['tid'];
  $result = $db->prepare("SELECT * FROM purchases_item WHERE id= :userid");
  $result->bindParam(':userid', $t_id);
  $result->execute();
  for($i=0; $row = $result->fetch(); $i++){
    ?>


    <form action="update.php" method="post" class = "form-group" name="stockin_form">
      <div id="ac">
        <input type="hidden" name="invoice" value="<?php echo $id; ?>" class = "form-control" />
        <label>Mã khách hàng</label>
        <input type="text" name="product_code" value="<?php
           $rrrrrrr=$row['name'];
            $resultss = $db->prepare("SELECT * FROM products WHERE product_code= :asas");
            $resultss->bindParam(':asas', $rrrrrrr);
            $resultss->execute();
            for($i=0; $rowss = $resultss->fetch(); $i++){
              echo $rowss['product_code'];
            }
            ?>" class = "form-control" />
            
        <label>Số lượng : </label>
        <input type="text" name="qty" value = "<?php echo $qty; ?>"  class = "form-control"  />
        <label>Trạng thái</label>
        <select name="status"  class = "form-control">
         <option>Select</option>
         <option>Đã gửi mail lần 1</option>
         <option>Đã gửi mail lần 2</option>
         <option>Đã gửi mail lần 3</option>
         <option>Đã gửi bản Scan</option>
         <option>Khách hàng đã nhận</option>
       </select>
       <label class="hidden">Expiration Date</label>
       <input class = "hidden" type = "date" name = "exdate" class = "form-control" >
       <span>&nbsp;</span>
       <label class = "hidden"> Remarks </label>
       <textarea class = "hidden" style="width:265px; height:50px;" name="remark"> </textarea>
       <input class="btn btn-primary btn-block" type="submit" class = "form-control" value="save" />
     </div>
   </form>
   <?php
 }
 $strBody = '';
                    // Thông tin Khách hàng
                    /*$strBody = '<p>
                                    <b>Khách hàng:</b> '.$ten.'<br />
                                    <b>Email:</b> '.$mail.'<br />
                                    <b>Điện thoại:</b> '.$dt.'<br />
                                    <b>Địa chỉ:</b> '.$dc.'
                                </p>';*/
                    // Danh sách Sản phẩm đã mua
                    $strBody .= '<table border="1px" cellpadding="10px" cellspacing="1px" width="100%">
                                        <tr>
                                            <td align="center" bgcolor="#3F3F3F" colspan="4"><font color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></font></td>
                                        </tr>
                                        <tr id="invoice-bar">
                                            <td width="45%"><b>Tên Sản phẩm</b></td>
                                            <td width="20%"><b>Giá</b></td>
                                            <td width="15%"><b>Số lượng</b></td>
                                            <td width="20%"><b>Thành tiền</b></td>
                                        </tr>';
                    
                    /*$totalPriceAll = 0;
                    while($row = mysqli_fetch_array($query)){
                        $totalPrice = $row['gia_sp']*$_SESSION['giohang'][$row['id_sp']];
                            
                            $strBody .= '<tr>
                                            <td class="prd-name">'.$row['ten_sp'].'</td>
                                            <td class="prd-price"><font color="#C40000">'.$row['gia_sp'].' VNĐ</font></td>
                                            <td class="prd-number">'.$_SESSION['giohang'][$row['id_sp']].'</td>
                                            <td class="prd-total"><font color="#C40000">'.$totalPrice.' VNĐ</font></td>
                                        </tr>';
                    
                    $totalPriceAll += $totalPrice;
                    }*/
                    
                            /*$strBody .= '<tr>
                                            <td class="prd-name">Tổng giá trị hóa đơn là:</td>
                                            <td colspan="2"></td>
                                            <td class="prd-total"><b><font color="#C40000">'.$totalPriceAll.' VNĐ</font></b></td>
                                        </tr>
                                    </table>';*/
                            
                            $strBody .= '<p align="justify">
                                            <b>Quý khách đã đặt hàng thành công!</b><br />
                                            • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
                                            • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
                                            <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
                                        </p>';
                    /*$title = 'OPW thông báo nhận thư'; 
                    // Thiết lập SMTP Server
                    require("class.phpmailer.php"); // nạp thư viện
                    $mailer = new PHPMailer(); // khởi tạo đối tượng
                    $mailer->IsSMTP(); // gọi class smtp để đăng nhập
                    $mailer->CharSet="utf-8"; // bảng mã unicode
                    
                    //Đăng nhập Gmail
                    $mailer->SMTPAuth = true; // Đăng nhập
                    $mailer->SMTPSecure = "ssl"; // Giao thức SSL
                    $mailer->Host = "smtp.gmail.com"; // SMTP của GMAIL
                    $mailer->Port = 465; // cổng SMTP
                    
                    // Phải chỉnh sửa lại
                    $mailer->Username = "letuan11191@gmail.com"; // GMAIL username
                    $mailer->Password = "phongvan"; // GMAIL password
                    $mailer->AddAddress("letuan11191@gmail.com"); //email người nhận
                    $mailer->AddCC("thanphong11191@gmail.com", "Admin Vietpro Shop"); // gửi thêm một email cho Admin
                     
                    // Chuẩn bị gửi thư nào
                    $mailer->FromName = 'Tanpro Shop'; // tên người gửi
                    $mailer->From = 'letuan11191@gmail.com'; // mail người gửi
                    $mailer->Subject = 'Hóa đơn xác nhận mua hàng từ Vietpro Shop';
                    $mailer->IsHTML(TRUE); //Bật HTML không thích thì false
                     
                    // Nội dung lá thư
                    $mailer->Subject    = $title;
                    $mailer->Body = $strBody;
                     
                    // Gửi email 
                    if(!$mailer->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer->ErrorInfo;
                    }
                    else{    
                        // Gửi thành công
                        /*header('location:purchaseslist.php'); */
                       /* echo "Gửi mail thành công";
                    }*/
 ?>