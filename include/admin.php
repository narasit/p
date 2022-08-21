<!DOCTYPE html>
<html lang="en">

  <body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h3 align="center"> ระบบจัดการเจ้าหน้าที่ </h3>
     <form  name="formlogin" action="cheack_login.php" method="POST" id="login">
              <div class="row">
              <label class="col-md-4" style="text-align:right"> Username </label>
                <div class="col-md-4">
                <input type="text"  name="staff_user" class="form-control" required placeholder="Username" />
                </div>
                </div>


              <div class="row">
              <br>
              <label class="col-md-4" style="text-align:right"> Password </label>
                <div class="col-md-4">
                     <input type="password" name="staff_pass" class="form-control" required placeholder="Password" />
            </div>
              </div>



              <div class="row">
              <div class="col-md-4"> </div>
              <div class="col-md-4">
              <br /><input name="remember" type="checkbox" value="Remember me" autocomplete="off" /> จำไว้ในระบบ

                </div>
                <div class="col-md-4"> </div>
              &nbsp; &nbsp; &nbsp; <br /> 
              <div class="col-md-12">
              <p align="center">
              
              <button type="submit" class="btn btn-primary btn-sm" id="btn" value="Signin"> เข้าสู่ระบบ </button> 
              </p>
              </div>
              <br>
              
            </form>
      </div>
    </div>
  </div>
      
<!--start footer-->      
<!--end footer-->

   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
  </body>
</html>