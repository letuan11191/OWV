<?php
    /*require_once('purchaseslist.php');*/
    $macongty1 = $_GET['macongty'];
    $tencongty1 = $_GET['tencongty'];
    $email = $_GET['email'];
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
                    //$strBody = '';
                    // Thông tin Khách hàng
                    /*$strBody = '<p>
                                    <b>Khách hàng:</b> '.$ten.'<br />
                                    <b>Email:</b> '.$mail.'<br />
                                    <b>Điện thoại:</b> '.$dt.'<br />
                                    <b>Địa chỉ:</b> '.$dc.'
                                </p>';*/
                    // Danh sách Sản phẩm đã mua
                    $strBody .='
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                        
                        
                    </head>
                    <body>
                        <p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222"><img class="CToWUd a6T" src="https://uphinhnhanh.com/images/2018/03/08/08-03.jpg" style="cursor:pointer; height:419px; margin-right:0px; outline:0px; width:629px" /></span></span></span></span></span></span></span><br />
<span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">C&acirc;u chuyện thật ngắn dưới đ&acirc;y kể về một người đ&agrave;n &ocirc;ng, b&igrave;nh thường như bao người đ&agrave;n &ocirc;ng kh&aacute;c. Sau khi kết h&ocirc;n, mọi người xung quanh thấy anh đối với vợ c&ograve;n tốt hơn cả l&uacute;c y&ecirc;u, l&uacute;c n&agrave;o cũng n&acirc;ng niu, chiều chuộng, đ&uacute;ng theo nghĩa &ldquo;<strong>nhất vợ nh&igrave; giời</strong>&rdquo;.</span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">Trong một buổi li&ecirc;n hoan, khi ch&eacute;n rượu đ&atilde; ng&agrave; ng&agrave;, bạn b&egrave; ra sức chọc ghẹo:&nbsp;<br />
<em>&ldquo;N&agrave;y, anh ch&agrave;ng sợ vợ. Đ&atilde; kết h&ocirc;n rồi, người cũng của m&igrave;nh rồi, sao c&ograve;n phải mệt mỏi như vậy?</em></span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><em>&nbsp;</em><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">Người đ&agrave;n &ocirc;ng của ch&uacute;ng ta mỉm cười, thủng thẳng trả lời: &ldquo;<em>Trước khi kết h&ocirc;n, c&oacute; rất nhiều ch&agrave;ng trai theo đuổi c&ocirc; ấy. Muốn chinh phục, t&ocirc;i chỉ c&oacute; thể đối xử tốt hơn họ. Sau khi kết h&ocirc;n, những ch&agrave;ng trai đ&oacute; kh&ocirc;ng c&ograve;n v&acirc;y quanh c&ocirc; ấy nữa, t&ocirc;i chỉ c&oacute; thể đối với c&ocirc; ấy tốt hơn trước để c&ocirc; ấy kh&ocirc;ng cảm thấy c&ocirc; đơn lạc l&otilde;ng. Tất cả những g&igrave; t&ocirc;i l&agrave;m chỉ v&igrave; muốn c&ocirc; ấy được hạnh ph&uacute;c</em>&quot;.</span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">Tất cả đều im lặng, kh&ocirc;ng c&oacute; tiếng cười nhạo b&aacute;ng, chỉ c&ograve;n lại niềm ngưỡng mộ s&acirc;u xa.</span></span></span></span></span></span></span><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">◦</span></span></span><span style="font-size:14.5pt"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif"><span style="color:#ff0066">❀</span></span></span></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></span></span><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><em><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">Nh&acirc;n ng&agrave;y Quốc tế Phụ nữ - m&ugrave;ng&nbsp;8&nbsp;th&aacute;ng&nbsp;3, Open World Việt Nam xin gửi tới một nửa thế giới lời ch&uacute;c tốt đẹp nhất! Ch&uacute;c cho những người phụ nữ tuyệt vời ấy ng&agrave;y c&agrave;ng xinh đẹp, th&agrave;nh c&ocirc;ng hơn trong cuộc sống, kh&ocirc;ng chỉ trong những dịp đặc biệt như h&ocirc;m nay.&nbsp;Bởi Phụ nữ l&agrave; để được y&ecirc;u thương!</span></span></span></em></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:start"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></span></span><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#222222">Đặc biệt, Open World Việt Nam (OWV) xin gửi tặng tới c&aacute;c kh&aacute;ch h&agrave;ng nữ m&oacute;n qu&agrave; nhỏ thay lời cảm ơn tới qu&yacute; kh&aacute;ch đ&atilde; lu&ocirc;n ủng hộ v&agrave; đồng h&agrave;nh c&ugrave;ng ch&uacute;ng t&ocirc;i:&nbsp;</span></span></span><em><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#ff0066">Từ ng&agrave;y 08/03/2018 đến ng&agrave;y 20/03/2018, c&aacute;c kh&aacute;ch h&agrave;ng nữ đặt ph&ograve;ng họp tại OWV sẽ được nhận ngay voucher ưu đ&atilde;i 50% cho lần đặt ph&ograve;ng họp tiếp theo.</span></span></span></em></span></span></span></span></p>

<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><em>&nbsp;</em></span></span></span></span><span style="font-size:11pt"><span style="background-color:white"><span style="color:#222222"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.5pt"><span style="font-family:&quot;Times New Roman&quot;,serif">OWV rất mong sẽ được đ&oacute;n tiếp v&agrave; phục vụ &ldquo;một nửa thế giới&rdquo; trong ng&agrave;y đặc biệt n&agrave;y!</span></span></span></span></span></span></p>

<p>----------------------------------------</p>

<p><strong>OPEN WORLD VIETNAM</strong></p>

<p>21st Fl., Capital Tower, 109 Tran Hung Dao St., Hoan Kiem Dist., Hanoi</p>

<p>Tel: 04 3941 2990</p>

<p>Hotline: 0968 426 426</p>

<p>&nbsp;</p>

<p>&nbsp;</p>


                    </body>
                    </html>
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
                    $title = 'Mùng 8/3 – Ngày để Yêu thương'; 
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
                    $array_mail = explode('- ', $email);
                    foreach ($array_mail as $key) {
                      $mailer->AddAddress("$key");
                    };
                     //email người nhận
                    //$mailer->AddCC("thanphong11191@gmail.com", "Admin Vietpro Shop"); // gửi thêm một email cho Admin
                     
                    // Chuẩn bị gửi thư nào
                    $mailer->FromName = 'OWV'; // tên người gửi
                    $mailer->From = 'admin1@openworldvietnam.com'; // mail người gửi
                    $mailer->Subject = 'Mùng 8/3 – Ngày để Yêu thương';
                    $mailer->IsHTML(TRUE); //Bật HTML không thích thì false
                     
                    // Nội dung lá thư


                    $mailer->Body = $strBody;
                     
                    // Gửi email 
                    if(!$mailer->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer->ErrorInfo;  
                        echo "$strBody";                      
                    }
                    else{
                       
                        include ("connect.php");
                        $sql="UPDATE products
                        SET noel = '1'
                        WHERE product_id=?";
                    $q = $db->prepare($sql);
                    $q->execute(array($macongty1));
                    header('location:Noel.php');

}
                    // else{    
                    //     // Gửi thành công
                    //     header('location:purchaseslist.php'); 
                    // }
                
    
?>