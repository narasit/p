<?php include "condb.php";?>
<!doctype html>
<html lang="en">
  <head>
  <?php include "include/head.php";?>
<br><br><br><br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
            <h3>*แบบฟอร์มลงทะเบียนอบรมออนไลน์</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form action="" method="post">
            <h5>*กรุณากรอกข้อมูลให้ครบทุกช่อง</h5>

            <div class="row">
              <div class="col-12 col-sm-12 mb-12">
              <select name="ins_id" class="form-control" required>
                  <option value="">-สังกัด-</option>
                  <?php
                  $sql = "SELECT * FROM tbintitution ORDER BY ins_id ASC";
                  $query = mysqli_query($con, $sql);
                  while($rowForm = mysqli_fetch_object($query)){
                      ?>
                      <option value="<?=$rowForm->ins_id?>"><?=$rowForm->ins_name?></option>
                      <?php
                  } 
                  ?>
                </select>

            
              </div>
<br><br>
            <div class="row">
              <div class="col-12 col-sm-2 mb-3">
              <select name="teacherid" class="form-control" required>
                  <option value="">-คำนำหน้าชื่อ-</option>
                  <?php
                  $sql = "SELECT * FROM tbprefix ORDER BY p_id ASC";
                  $query = mysqli_query($con, $sql);
                  while($rowForm = mysqli_fetch_object($query)){
                      ?>
                      <option value="<?=$rowForm->p_id?>"><?=$rowForm->p_name?></option>
                      <?php
                  } 
                  ?>
                </select>

              </div>
              <div class="col-12 col-sm-5 mb-3">
                <input type="text"  name="name" class="form-control" placeholder="ชื่อ" required> 
              </div>
              <div class="col-12 col-sm-5 mb-3">
                <input type="text" name="lastname" class="form-control" placeholder="นามสกุล" required>
              </div>
            </div>

             <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="phone" class="form-control" placeholder="เบอร์โทรศัพท์ 10 หลัก" minlength="10" maxlength="10"  required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="email" required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="parents" class="form-control" placeholder="ชื่อผู้ใช้ระบบ" required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="text" name="parents_phone" class="form-control" placeholder="รหัสผ่าน " required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12">
               <button type="submit" class="btn btn-primary" style="width: 100%;">บันทึกข้อมูล</button> 
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


    <footer>
      <p class="text-center" style="margin-top: 100px;">
      <?php include "include/footer.php";?>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>