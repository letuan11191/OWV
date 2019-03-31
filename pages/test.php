<?php
				include('connect.php');
				
          

				$a1 = 'test';
          		
               $result = $db->prepare("SELECT * FROM products WHERE product_name= :asas");
               $result->bindParam(':asas', $a1);
               $result->execute();
               for($i=0; $row2 = $result->fetch(); $i++){
                
                $aa=$row2['Email'];
                echo $aa;
                }

?>