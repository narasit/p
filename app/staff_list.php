<?php 

 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=staff.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=staff.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=staff.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=type.php" />';
  }
include "../condb.php";
$query = "SELECT * FROM tbstaff ORDER BY staff_id DESC" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ID</th>
      <th>ชื่อเจ้าหน้าที่ - ติดต่อ</th>
      <th>ชื่อเข้าระบบ</th>
      <th>รหัสผ่าน</th>
      <th>สถานะ</th>
      <th width=13%'>-</th>
      <th width='14%'>-</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["staff_id"] .  "</td> ";
    echo "<td> ชื่อ: " .$row["staff_name"] .
    "<br>เบอร์ติดต่อ: <font color='red'>".$row["staff_tel"] ."</font>".
      "</td class='hidden-xs'> ";
      echo "<td> เข้าระบบ: " .$row["staff_user"] .
    "<br>Email: <font color='blue'>".$row["staff_email"] ."</font>".
      "</td class='hidden-xs'> ";
    echo "<td>" .$row["staff_pass"] .  "</td> ";
    echo "<td>" .$row["staff_level"] .  "</td> ";
    echo "<td><a href='staff.php?act=edit&ID=$row[staff_id]' class='btn btn-warning '><span class='glyphicon glyphicon-edit'>แก้ไข้</span></a>         
    </td> ";
    echo "<td><a href='staff_del.php?ID=$row[staff_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger '><span class='glyphicon glyphicon-trash'>ลบ</span></a></td> ";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>