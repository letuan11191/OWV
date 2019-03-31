<?php
	include('connect.php');
	if(isset($_POST['submit']))
		{
			$tencongty = $_POST['tencongty'];
			$tennguoidk = $_POST['tennguoidk'];
			$sdt = $_POST['sdt'];
			$email = $_POST['email'];
			$day = $_POST['day'];
			$start = $_POST['start'];
			$end1 = $_POST['end'];
			$sql = "INSERT INTO datphong (tencongty, tennguoidk, sdt, email, day, start, end_meeting) VALUES (?,?,?,?,?,?,?)";
			$q = $db->prepare($sql);
			$q->execute(array($tencongty, $tennguoidk, $sdt,$email, $day,$start,$end1,));


			$strBody .='<p>
                                    <b>Tên khách hàng:</b> '.$tennguoidk.'<br />
                                    <b>Tên công ty:</b> '.$tencongty.'<br />
                                    <b>Email:</b> '.$email.'<br />
                                    <b>Điện thoại:</b> '.$dt.'<br />
                                    <b>Ngày họp:</b> '.$day.'<br/>
                                    <b>Ngày họp:</b> '.$start.'<br/>
                                    <b>Ngày họp:</b> '.$end1.'<br/>
                                </p>';
                    
                                        
                    $title = 'Thông tin đặt phòng họp'; 
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
                    
                      $mailer->AddAddress("mai.nt@openworldvietnam.com");
                    
                     //email người nhận
                    $mailer->AddCC("marketing@openworldvietnam.com"); // gửi thêm một email cho Admin
                     
                    // Chuẩn bị gửi thư nào
                    $mailer->FromName = 'OWV'; // tên người gửi
                    $mailer->From = 'admin1@openworldvietnam.com'; // mail người gửi
                    $mailer->Subject = 'Thông tin book phòng họp';
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
                        echo "Gửi mail thành công";
                        echo "$strBody";
                        }
                   

			header("location: formtt1.php");
			}
	else
		{
				echo "Lỗi";
		}

	
?>