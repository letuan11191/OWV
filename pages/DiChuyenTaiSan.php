 <div class="panel-body">

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title" id="myModalLabel">Di chuyển tài sản </h4>

                </div>

                <div class="modal-body">

                    <form action="SaveDiChuyenTaiSan.php" method="post" class = "form-group" >

                        <div id="ac">                        
                            <?php
                                $idtaisan = $_GET['id'];
                                $idphong_From = $_GET['phongid'];
                                include('connect.php');
                                $result1 = $db->prepare("SELECT * FROM taisan WHERE TaiSan_ID =".$idtaisan);
                                $result1->execute();

                            ?>

                            <span>Tên tài sản : </span>
                            <?php 
                                for($j=0; $row1 = $result1->fetch(); $j++){
                            ?>
                            <input type="hidden" name="fromid" value="<?php echo $idphong_From ?>">
                            <input type="hidden" name="taisanid" value="<?php echo $row1['TaiSan_ID']?>">
                            <input type="text" name="tents" class = "form-control" value="<?php echo $row1['TaiSan_Ten']?>">
                            <?php
                            }
                            ?>
                            <span>Số lượng di chuyển : </span><input type="text" name="soluong" class = "form-control" />

                            <span>Thêm vào phòng: </span>
                            <select name="phong" style="width: 550px;" class="chzn-select">

                                 <?php

                                 include('connect.php');

                                 //$id =$_GET['name'];

                                 $result = $db->prepare("SELECT * FROM phongowv WHERE Enable = 0 ");

                                 //$result->bindParam(':supp', $id);

                                 $result->execute();

                                 for($i=0; $row = $result->fetch(); $i++){

                                  ?>

                                  <option value="<?php echo $row['Phong_ID']; ?>"><?php echo $row['Phong_Ten']; ?></option>

                                  <?php

                                }

                                

                                ?>

                              </select><br />                            
                            <span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Save" />

                        </div>

                    </div>

                    <div class="modal-footer">

                    </div>

                </div>

                <!-- /.modal-content -->

            </div>

            <!-- /.modal-dialog -->

        </div>

                        <!-- /.modal -->