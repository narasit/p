<?php include('include/h.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("include/navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("include/menu.php"); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php include("include/content.php"); ?> 

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?> 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <?php include("include/script.php"); ?> 
</body>
</html>
