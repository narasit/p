  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">ระบบจัดการเจ้าหน้าที่</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  <p>คุณ <?php echo $staff_name; ?></p></a>
          <a href="../logout.php" class="d-block">ออกจากระบบ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">ระบบจัดการเจ้าหน้าที่</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>หน้าหลัก</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="staff.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ข้อมูลจัดการเจ้าหน้าที่</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ins.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ข้อมูลจัดการสังกัด</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ข้อมูลจัดการอาจารย์</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ข้อมูลจัดการสมาชิก</p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-header">ระบบจัดการข้อมูลหลักสูตร</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ตรวจสอบสถานะ</p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ข้อมูลหลักสูตร</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>ตรวจสอบข้อมูลหลักสูตร</p>
            </a>
          </li>
        

      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>