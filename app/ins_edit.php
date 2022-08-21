<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbintitution WHERE ins_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
?>
<form action="ins_edit_db.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2 control-label">
     ชื่อเจ้าหน้าที่ :
    </div>
    <div class="col-sm-8">
      <input type="text" name="ins_name" required class="form-control" value="<?php echo $row['ins_name'];?>">
    </div>
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
      <input type="hidden" name="ins_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
      <a href="ins.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>
