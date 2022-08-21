<?php 

 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=ins.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=ins.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=ins.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=ins.php" />';
  }
include "../condb.php";
$query = "SELECT * FROM tbintitution ORDER BY ins_id DESC" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th>ชื่อสังกัด</th>
      <th width='17%'>-</th>
      <th width='15%'>-</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["ins_id"] .  "</td> ";
    echo "<td>" .$row["ins_name"] .  "</td> ";
    echo "<td><a href='ins.php?act=edit&ID=$row[ins_id]' class='btn btn-warning '><span class='glyphicon glyphicon-edit'>แก้ไขข้อมูล</span></a>         
    </td> ";
    echo "<td><a href='ins_del.php?ID=$row[ins_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger '><span class='glyphicon glyphicon-trash'>ลบข้อมูล</span></a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>