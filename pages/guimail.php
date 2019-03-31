<?php
include('connect.php');
$td = $_POST['celebrate'];
$a = $_POST['select'];
$b = $_POST['editor1'];
$array_noidung = explode('//', $b);
if($a == 'all')
{
							require("class.phpmailer.php");
                            foreach ($array_noidung as $key1) 
                                    {
                                        if($key1 == "tencongty")
                                        {
							$mailer1 = new PHPMailer(); // khởi tạo đối tượng
                    		$mailer1->IsSMTP(); // gọi class smtp để đăng nhập
                    		$mailer1->CharSet="utf-8"; // bảng mã unicode
	 						$result = $db->prepare("SELECT * FROM products ");
                            $result->execute();
                            
                            for($i=0; $row = $result->fetch(); $i++)
                            {
                            	$id = $row['product_id'];                          	
                            		$c = $row['Email'];
                                    $name1 =$row['product_name'];
                            		$array_mail1 = explode('- ', $c);
	                            	foreach ($array_mail1 as $key) 
                                    {
	                            		
	                      				/*$mailer1->AddAddress("$key");*/
	                      				$mailer1->AddBCC("$key", "Admin Vietpro Shop");
                                        
                                              
                                            
                                            
                                        

                                    };
                                    $array_noidung[1] = $name1;
                                    $noidung = implode('', $array_noidung);
                                    if ($key =="") {
                                            continue;
                                        }
                                    
	                      				$title = $td; 
                                    
                      				
										
                                        
										
                                    
										
									
                    // Thiết lập SMTP Server
                     // nạp thư viện
                     /*$name = $row['product_name'] ;	*/			
                     
                    
                    //Đăng nhập Gmail
                    $mailer1->SMTPAuth = true; // Đăng nhập
                    $mailer1->SMTPSecure = "ssl"; // Giao thức SSL
                    $mailer1->Host = "smtp.gmail.com"; // SMTP của GMAIL
                    $mailer1->Port = 465; // cổng SMTP
                    
                    // Phải chỉnh sửa lại
                    $mailer1->Username = "letuan@openworldvietnam.com"; // GMAIL username
                    $mailer1->Password = "phongvan"; // GMAIL password
                            	
                    $mailer1->FromName = 'OWV'; // tên người gửi
                    $mailer1->From = 'letuan@openworldvietnam.com'; // mail người gửi
                    $mailer1->Subject = $td;
                    $mailer1->IsHTML(TRUE); //Bật HTML không thích thì false
                     
                    // Nội dung lá thư
                    
                    $mailer1->Body = $noidung;
                    /*echo "$key";
                    echo "$noidung";*/
                    if(!$mailer1->Send()){
                        // Gửi không được, đưa ra thông báo lỗi
                        echo "Lỗi gửi Email: " . $mailer1->ErrorInfo;                        
                    }
                    else{
                        echo "Gửi mail thành công";
                    }

}}
else{
    continue;
}
}
                    

                    }
                            

                            
                            
                            	
                    			
                    			
                            	
elseif ($a == 'mail') {
	header('location:guimail2.php');
	
		
	
}

elseif ($a == 'cty') {
    include('cskh.php');
    $b1 = $_POST['editor1'];
   /* header('location"guimail3.php');*/
	$resultss = $db-> prepare("	SELECT * FROM products order by product_name");
	$resultss-> execute();
	for($iss=0;$rowss = $resultss->fetch();$iss++)
	{
		$namess= $rowss['product_id'];
        $ten = $rowss['product_name'];
	?>
	<form action="guimail3_a.php" method="post">

		<input type="checkbox" name="cty1[]" value="<?php echo "$namess"; ?>">
        <input type="hidden" name="noidung" value="<?php echo "$b1"?>">
        <input type="hidden" name="tieude" value="<?php echo "$td"?>">
        <?php echo $rowss['product_name']; ?>
        <input type="hidden" name="ten" value="<?php echo "$ten"?>">
        <?php echo $rowss['Email']; ?>
        
	<?php ?> </br> <?php }
    ?>
    <input type="submit" name="">
    </form>

<?php  }
?>

