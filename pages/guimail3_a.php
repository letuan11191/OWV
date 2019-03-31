<?php 
	include('connect.php');
	$noidung = $_POST['noidung'];
	$array_noidung = explode('//', $noidung);
	$tieude = $_POST['tieude'];
	
	if(!isset($_POST['submit']))
	{
		require("class.phpmailer.php");
					$mailer1 = new PHPMailer(); // khởi tạo đối tượng
                    $mailer1->IsSMTP(); // gọi class smtp để đăng nhập
                    $mailer1->CharSet="utf-8"; // bảng mã unicode
					
					
			        
					
					

					foreach ($_POST['cty1'] as $key) {
						$results= $db->prepare('SELECT * FROM products WHERE product_id = :sasa');
			            $results->bindParam(':sasa',$key);
			            $results->execute();
			            $row= $results->fetch();
			                
			                
			             $email = $row['Email'];
			             $mailer1->AddAddress("$email"); 
			         
			             $body = $row['product_name']	;
			             $mailer1->Body = $body;
			         }   
		                 
		                	/*foreach ($array_mail1 as $key1) 
		                   {
			                if ($key1=="") {
			                         	continue;
                           }*/
                    	$mailer1->SMTPAuth = true; // Đăng nhập
			                    $mailer1->SMTPSecure = "ssl"; // Giao thức SSL
			                    $mailer1->Host = "smtp.gmail.com"; // SMTP của GMAIL
			                    $mailer1->Port = 465; // cổng SMTP
			                    
			                    // Phải chỉnh sửa lại
			                    $mailer1->Username = "letuan@openworldvietnam.com"; // GMAIL username
			                    $mailer1->Password = "phongvan"; // GMAIL password
			                            	
			                    $mailer1->FromName = 'OWV'; // tên người gửi
			                    $mailer1->From = 'letuan@openworldvietnam.com'; // mail người gửi
			                    $mailer1->Subject = $tieude;
			                    $mailer1->IsHTML(TRUE); //Bật HTML không thích thì false
			            
			             
			             //$body = $row['product_name']	;
			             
			             echo "$email";
			             echo "$body";
		                 
		                	/*foreach ($array_mail1 as $key1) 
		                   {
			                if ($key1=="") {
			                         	continue;
                           }*/
                    																				                					
						  
			                    

			                    /*if(!$mailer1->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer1->ErrorInfo;                        
                    }
                    else{
                        echo "Gửi mail thành công";
                        continue;
                    }					*/														                					
							            	            
				$mailer1->Send();	


}
	
	

	else
	{
		echo "Lỗi";
	}
?>	