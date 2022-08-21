       <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">เพิ่มข้อมูลเจ้าหน้าที่</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="staff_add_db.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ชื่อ login</label>
                        <input type="text" name="staff_user" class="form-control" placeholder="กรอบชื่อสำหรับlogin">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>รหัสผ่านสำหรับ login</label>
                        <input type="text" name="staff_pass" class="form-control" placeholder="กรอบรหัสผ่าน">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ชื่อเจ้าหน้าที่</label>
                        <input type="text" name="staff_name" class="form-control" placeholder="กรอบชื่อนามสกุล">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>เบอร์ติดต่อ</label>
                        <input type="text" name="staff_tel" class="form-control" placeholder="เบอร์ติดต่อ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="straff_email" class="form-control" placeholder="กรอบ E-mail">
                      </div>
                    </div>
                    <div class="container">
                    <div class="col-sm-6">
                <select name="staff_level" class="form-control" required>
                  <option value="">-สถานะ-</option>
                  <option value="staff">-staff</option>
                  <option value="admin">-admin</option>

                </select>
                </div>
              </div><br>
                  </div>
                  </div>
                  <div class="row" align="left">
                    <div class="col-sm-6">
                         <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                         <a href="staff.php" class="btn btn-danger" data-dismiss="modal">ยกเลิก</a>              
                    </div>         
                  </div>              
                </form>
              </div>
              <!-- /.card-body -->
            </div>
             