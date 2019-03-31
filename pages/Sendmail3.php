<?php
    /*require_once('products3.php');*/
    $a = $_GET['name'];
    /*$d = $_GET['nguoi_gui'];*/
    $aa = $_GET['email'];
    /*$bb = $_GET['invoice_number'];*/
    $qty = $_GET['qty'];
    $date = date("d m Y");
    
    
               
                
                    
                    $strBody = '';
                    
                    $strBody .='<h3>
                                    Kính gửi Quý khách hàng
                                </h3>
                                <p>
                                    
<p>Open World Vietnam  xin thông báo tới Quý khách hàng như sau:</p> 
Tính đến ngày '.$date.' , Quý Công ty còn tồn lại '.$qty.' thư chưa đến nhận.
Quý khách hàng vui lòng đến trung tâm để nhận thư .
</p>
Trân trọng cảm ơn.
                                </p>  
                                ';

                                
                    $title = 'OWV_THONG BAO THU LAN 2'; 
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
                    $mailer->Username = "admin1@openworldvietnam.com"; // GMAIL username
                    $mailer->Password = "owv@140217"; // GMAIL password
                    $array_mail = explode('- ', $aa);
                    foreach ($array_mail as $key) {
                      $mailer->AddAddress("$key");
                    };
                     //email người nhận
                    
                    $mailer->FromName = 'OWV'; // tên người gửi
                    $mailer->From = 'admin1@openworldvietnam.com'; // mail người gửi
                    $mailer->Subject = 'OWV - THONG BAO THU LAN 3';
                    $mailer->IsHTML(TRUE); //Bật HTML không thích thì false
                     
                    // Nội dung lá thư
                    
                    $mailer->Body = $strBody;
                    $mailer->Send();
                     
                    // Gửi email 
                    if(!$mailer->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer->ErrorInfo;                        
                    }
                    else{
                    include('connect.php');
                    $status = 'Đã gửi mail lần 3';
                    $sql="UPDATE purchases
                        SET status =?
                        WHERE p_name=?";
                    $q = $db->prepare($sql);
                    $q->execute(array($status,$a));

                    header('location:products3.php'); 

}
                    
               
    
?>