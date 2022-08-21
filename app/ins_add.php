       <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">เพ่ิมข้อมูลสังกัด</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="ins_add_db.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ชื่อสังกัด</label>
                        <input type="text" name="ins_name" class="form-control" placeholder="กรอกชื่อสังกัด">
                      </div>
                    </div>
              
                  </div>
                  </div>
                  <div class="row" align="left">
                    <div class="col-sm-6">
                         <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                         <a href="ins.php" class="btn btn-danger" data-dismiss="modal">ยกเลิก</a>              
                    </div>         
                  </div>              
                </form>
              </div>
              <!-- /.card-body -->
            </div>
             