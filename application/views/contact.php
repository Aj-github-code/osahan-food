<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | jsGrid</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contact</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="col-12 table-responsive">
            <table class="table table-light table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    
                </tr>
                </thead>
                <tbody>
                    <!-- <?php if(!empty($cruds)) { foreach($cruds as $crud){?>
                    <tr>
                        <th><?php echo $crud['id']?></th>
                        <td><?php echo $crud['name']?></td>
                        <td><?php echo $crud['email']?></td>
                        <td><?php echo $crud['phone']?></td>
                        <td><?php echo $crud['message']?></td>
                        <td><?php echo $crud['status']?></td>
                       
                        
                        
                        <td class="d-flex"><button type="button" data-toggle="modal" data-target="#editModal" class='edit btn btn-sm btn-primary m-1' href="<?php echo base_url().'index.php/admin_controller/edit/'.$crud['id']?>">Update</button>
                            <a class='delete btn btn-sm btn-primary m-1' href="<?php echo base_url().'index.php/admin_controller/delete/'.$crud['id']?>">Delete</a></td>                    </tr>
                    <?php }} else { ?>
                    
                    <?php } ?> -->
                </tbody>
            </table>
    </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<!-- <script src="<?php echo base_url();?>plugins/jsgrid/demos/db.js"></script>
<script src="<?php echo base_url();?>plugins/jsgrid/jsgrid.min.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="POST" action="<?php echo base_url().'index.php/admin_controller/edit/'.$crud['id'];?>" id="user_form">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
      </div>
      
      <div class="modal-body">
        <input type="hidden" name="snoEdit" id="snoEdit">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" value="<?php echo set_value('name',$crud['name']);?>" name="name" id="name" >
        </div>
        <div class="mb-3">
        <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" value="<?php echo set_value('email',$crud['email']);?>" name="email" id="email">
        </div>
        <div class="mb-3">
          <label class="form-label" for="phone">Phone</label>
          <input type="text" class="form-control" value="<?php echo set_value('phone',$crud['phone']);?>" name="phone" id="phone">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <input type="text" class="form-control" value="<?php echo set_value('message',$crud['message']);?>" name="message" id="message" >
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <input type="text" class="form-control" value="<?php echo set_value('status',$crud['status']);?>" name="status" id="status" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit"  value="Add" class="btn btn-primary">
      </div>
    </div>
    </form>
  </div>
</div>





<script type="text/javascript" language="javascript">
  $(document).ready(function(){
    function fetch_data(){
      $.ajax({
        url:"<?php echo base_url();?>admin_controller/action",
        method:"POST",
        data:{data_action:'fetch_all'},
        success:function(data)
        {
          $('tbody').html(data);
        }
      });
    }

    fetch_data();
  });
  </script>




