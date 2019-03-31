<?php
    /*require_once('purchaseslist.php');*/
    $a = $_GET['name'];
    $d = $_GET['nguoi_gui'];
    $iv = $_GET['invoice_number'];
    $aa = $_GET['email'];
    //$bb = $_GET['id'];
    
               
                
                    /*include('connect.php');*/
                    /*$result = $db->prepare("SELECT * FROM purchases WHERE transaction_id=:a" );
                    $result->bindParam(':a', $a);
                    $result->execute();
                    $b= $row['nguoi_gui'];
                    $sql="SELECT Email FROM products WHERE product = $a ";
                    $query = mysqli_query($conn,$sql);
                    $c = mysqli_fetch($query);*/
    /*
                        $arrId = array();
                        foreach($_SESSION['giohang'] as $id_sp=>$sl){
                            $arrId[] = $id_sp;
                        }
                        $strId = implode(', ', $arrId);
                        $sql = "SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp DESC";
                        $query = mysqli_query($conn,$sql);  
                    }                       */
                    $strBody = '';
                    // Thông tin Khách hàng
                    /*$strBody = '<p>
                                    <b>Khách hàng:</b> '.$ten.'<br />
                                    <b>Email:</b> '.$mail.'<br />
                                    <b>Điện thoại:</b> '.$dt.'<br />
                                    <b>Địa chỉ:</b> '.$dc.'
                                </p>';*/
                    // Danh sách Sản phẩm đã mua
                    $strBody .='
                                <body background = "red">
                                <h3>
                                    Kính gửi Quý khách hàng
                                </h3>
                                <p>
                                    Open World Vietnam vừa nhận được thư gửi tới Quý khách hàng từ '.$d.' </p>
<p> Quý khách vui lòng đến trung tâm để nhận thư.</p>
Trân trọng cảm ơn.
                                </p> 
                                </body> 
                                ';

                                /*echo "$strBody";*/
                                
                                

                    /*$strBody .= '
                                        <tr>
                                            <td align="center" bgcolor="#3F3F3F" colspan="4"><font color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></font></td>
                                        </tr>
                                        <tr id="invoice-bar">
                                            <td width="45%"><b>Tên Sản phẩm</b></td>
                                            <td width="20%"><b>Giá</b></td>
                                            <td width="15%"><b>Số lượng</b></td>
                                            <td width="20%"><b>Thành tiền</b></td>
                                        </tr>';*/
                    
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
                            
                            /*$strBody .= '<p align="justify">
                                            <b>Quý khách đã đặt hàng thành công!</b><br />
                                            • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
                                            • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
                                            <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
                                        </p>';*/
                    $title = 'OPW thông báo nhận thư'; 
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
                    
                    /*$mailer->SMTPDebug = 2;*/
                    
                    // Phải chỉnh sửa lại
                    $mailer->Username = "admin1@openworldvietnam.com"; // GMAIL username
                    $mailer->Password = "owv@140217"; // GMAIL password
                    $array_mail = explode('- ', $aa);
                    foreach ($array_mail as $key) {
                      $mailer->AddAddress("$key");
                    };
                     //email người nhận
                    //$mailer->AddCC("thanphong11191@gmail.com", "Admin Vietpro Shop"); // gửi thêm một email cho Admin
                     
                    // Chuẩn bị gửi thư nào
                    $mailer->FromName = 'OWV'; // tên người gửi
                    $mailer->From = 'admin1@openworldvietnam.com'; // mail người gửi
                    $mailer->Subject = 'OWV - THONG BAO THU LAN 1';
                    $mailer->IsHTML(TRUE); //Bật HTML không thích thì false
                     
                    // Nội dung lá thư
                    
                    $mailer->Body = $strBody;
                     
                    // Gửi email 
                    if(!$mailer->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer->ErrorInfo;                        
                    }
                    else{
                    include('connect.php');
                    $status = 'Đã gửi mail lần 1';
                    $sql="UPDATE purchases
                        SET status =?
                        WHERE invoice_number=?";
                    $q = $db->prepare($sql);
                    $q->execute(array($status,$iv));
                    header('location:orderpo.php');

}
                    // else{    
                    //     // Gửi thành công
                    //     header('location:purchaseslist.php'); 
                    // }
                
    
?>