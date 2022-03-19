<?php
session_start();

include("include/header.php");
include("include/sidebar.php");

include("../handlers/connect.php");
include("../handlers/showUser.php");
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">add new Task</h1>
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
           
          <form action="../handlers/addTask.php" method="post">
                <div class="card-body">




                








                  <div class="form-group">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="title">
                  </div>
                  <div class="form-group">
                   body
                   <br> 
                    <textarea id="w3review" name="bady" rows="4" cols="50">  

                    </textarea>
   
                                                       
                  </div>
                  <div class="form-group">
                    <label >select user</label>
                    
                    <select name="user_name">
                        <?php   while($users=mysqli_fetch_assoc($showUser)){?>  
                        <option   value=<?=  $users["id"]; ?>   >
                                   <?=  $users["name"]; ?>        

                        </option>
                                <?php }  ?>



                    </select>



                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">add task </button>
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