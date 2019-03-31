<?php
                                                include('connect.php');
                                                $abc='p-933302';
                                                $results= $db->prepare('SELECT * FROM purchases WHERE p_name = :sasa');
                                                $results->bindParam(':sasa',$abc);
                                                $results->execute();
                                                for($j=0; $rows = $results->fetch(); $j++)
                                                {    
                                                 echo $rows['transaction_id'];?>, <?php } 
                                              ?>