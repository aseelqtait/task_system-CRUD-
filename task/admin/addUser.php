<?php
session_start();

include("include/header.php");
include("include/sidebar.php");
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">add new user</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Starter Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
           
          <form action="../handlers/addUser.php" method="post">
                <div class="card-body">




                <div class="card-body">
               
                  


                <?php  
                
                if( isset($_SESSION["SUCSEES"])){
                   ?>

<button type="button" class="btn btn-success toastrDefaultSuccess">  <?= $_SESSION["SUCSEES"] ; ?>

</button>



<?php

unset($_SESSION["SUCSEES"]);
                    
                }
                
                ?>

               
               
              
              </div>








                  <div class="form-group">
                    <label for="exampleInputEmail1">user name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="user name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">add user </button>
                </div>
              </form>

        </div>

        
      </div>
      <!-- /.col-md-6 -->
     
      
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>

</div>
<?php

include("include/footer.php");