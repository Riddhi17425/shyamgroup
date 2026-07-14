<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Change Password Form</title>
  <link rel="icon" href="<?php echo base_url(); ?>upload/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
 <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script type="text/javascript">
        function checkpass(val)
        {
            if(val.length<6)
            {
                document.getElementById('divPass').innerHTML="Password must be 6 chars long.";
                return false;
            }
            else
            {   
                document.getElementById('divPass').innerHTML="";
                return true;
            }
        }
        function checkrepass(p1,p2)
        {
            //alert('hello');
            if(p1!=p2)
            {
                document.getElementById('divRPass').innerHTML="Password do not match...";
                //alert("Password not match");
                return false;
            }
            else
            {   
                document.getElementById('divRPass').innerHTML="";
                return true;
            }
        }
    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!--header.php-->
  <?php include('include/header.php'); ?>
  <!--sidebar.php-->
  <?php include('include/sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#FF0000"><?php echo $this->session->flashdata('msg'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url(); ?>changepassword/updatepassword" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Enter New Password</label>
                      <input type="password" class="form-control" placeholder="Enter New Password" name="newpass" required id="newpass" onBlur="checkpass(this.value);">
                      <span style="color:#FF0000" id="divPass"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Enter New Conform Password</label>
                      <input type="password" class="form-control" placeholder="Enter New Conform Password" name="repass" required id="repass" onBlur="checkrepass(this.value,newpass.value);">
                      <span style="color:#FF0000" id="divRPass"></span>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Change Now</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('include/footer.php'); ?>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
	
</body>
</html>