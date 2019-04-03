 <div class="panel-body">

    <div class="modal fade" id="bosung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal1" aria-hidden="true">&times;</button>

                    <h4 class="modal-title" id="myModalLabel1">Bổ sung tài sản </h4>

                </div>

                <div class="modal-body">

                    <form action="SaveAddBoSungTaiSan.php" method="post" class = "form-group" >

                        <div id="ac1">
                            <span>Tên Tài Sản : </span>
                             <select name="taisanid" style="width: 550px;" class="chzn-select">
                             <?php
                                 include('connect.php');
                                 $result = $db->prepare("SELECT * FROM taisan ");
                                 $result->execute();

                                 for($i=0; $row = $result->fetch(); $i++){

                                  ?>

                                  <option value="<?php echo $row['TaiSan_ID']; ?>"><?php echo $row['TaiSan_Ten']; ?></option>

                                  <?php

                                }
                                ?>
                                  </select><br />
                            <span>Thêm vào phòng: </span>
                            <select name="phong" style="width: 550px;" class="chzn-select">

                                 <?php

                                 include('connect.php');

                                 //$id =$_GET['name'];

                                 $result = $db->prepare("SELECT * FROM phongowv ");

                                 //$result->bindParam(':supp', $id);

                                 $result->execute();

                                 for($i=0; $row = $result->fetch(); $i++){

                                  ?>

                                  <option value="<?php echo $row['Phong_ID']; ?>"><?php echo $row['Phong_Ten']; ?></option>

                                  <?php

                                }

                                

                                ?>

                              </select><br />

                            <span>Số lượng : </span><input type="text" name="soluong" class = "form-control" />

                            <span>Ghi Chú : </span><input type="text" name="ghichu" class = "form-control" value="Mua Mới" />
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