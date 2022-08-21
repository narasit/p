<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbstaff WHERE staff_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
?>
<form action="staff_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     ชื่อเจ้าหน้าที่ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_name" required class="form-control" value="<?php echo $row['staff_name'];?>">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     เบอร์ติดต่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_tel" required class="form-control" value="<?php echo $row['staff_tel'];?>">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     user login :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_user" required class="form-control" value="<?php echo $row['staff_user'];?>">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     รหัสผ่าน login :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_pass" required class="form-control" value="<?php echo $row['staff_pass'];?>">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     E-mail :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_email" required class="form-control" value="<?php echo $row['staff_email'];?>">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     สถานะ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="staff_level" required class="form-control" value="<?php echo $row['staff_level'];?>">
    </div>
  </div>
  <div class="form-group">
 
  </div>
    <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="staff_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
      <a href="staff.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>
