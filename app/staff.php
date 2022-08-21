<?php include('include/h.php');?>

<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('include/head.php');?>
        <?php include('include/menu.php');?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        <i class="glyphicon glyphicon-list-alt hidden-xs"></i> <span class="hidden-xs">รายการจัดการข้อมูลเจ้าหน้าที่</span>
        
        <a href="staff.php?act=add" class="btn btn-primary btn-sm">เพิ่มข้อมูล</a>
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-10">
                  <div class="box-body">
                    <?php
                    $act = (isset($_GET['act']) ? $_GET['act'] : '');
                    if($act == 'add'){
                        include('staff_add.php');
                    }elseif ($act == 'edit') {
                        include('staff_edit.php');
                    }else {
                        include('staff_list.php');
                    }
                  ?>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('include/script.php');?>