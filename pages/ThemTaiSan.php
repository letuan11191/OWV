 <div class="panel-body">

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title" id="myModalLabel">Thêm tài sản</h4>

                </div>

                <div class="modal-body">

                    <form action="SaveAddTaiSan.php" method="post" class = "form-group" >

                        <div id="ac">

                            <!-- <span>Category: </span> -->

                            <!-- <select name="categ" class = "form-control" > -->

                            <!-- <option>Select Category</option> -->

                            <!-- <option>Noodles</option>

                            <option>Canned Goods</option>

                            <option>Shampoo</option>

                            <option>Bath Soap</option>

                            <option>Crackers</option> -->

                            <!-- </select> -->

                            

                            <span>Tên tài sản : </span><input type="text" name="tentaisan" class = "form-control" />

                            <span>Loại tài sản:</span>

                            <select name="loaitaisan" style="width: 550px;" class="chzn-select">

                                 <?php

                                 include('connect.php');

                                 //$id =$_GET['name'];

                                 $result = $db->prepare("SELECT * FROM loaitaisan ");

                                 //$result->bindParam(':supp', $id);

                                 $result->execute();

                                 for($i=0; $row = $result->fetch(); $i++){

                                  ?>

                                  <option value="<?php echo $row['LoaiTaiSan_ID']; ?>"><?php echo $row['LoaiTaiSan_Ten']; ?></option>

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

                            <span>Ghi Chú : </span><input type="text" name="ghichu" class = "form-control" />
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