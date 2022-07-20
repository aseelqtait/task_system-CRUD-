<?php

include("../handlers/connect.php");

include("include/header.php");
include("include/sidebar.php");

include("../handlers/showUser.php");
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">show users </h1>
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
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">


         <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>email</th>
                      
                      <th>Status</th>
                      <th>action</th>
                     
                    </tr>
                  </thead>
                  <tbody>

                  <?php while($users=mysqli_fetch_assoc($showUser)){?>
                    <tr>
                      <td> <?= $users["name"]; ?>     </td>
                      <td> <?= $users["email"]; ?>     </td>
                      <td>  
                            <?php  if(!$users["status"]==0) {
                            
                           ?>
                           
                           <div class="alert alert-success" role="alert">
                           <i class="fas fa-check"></i>
                              </div>
                          
                           
                           <?Php 
                            }
                            else {?>

                              <div class="alert alert-danger" role="alert">
  
                              <i class="fas fa-times"></i>

                              </div>
                           <?php  }
                            ?>



                      </td>
                      <td>
                           <a href="../handlers/deleteUser.php?userid=<?=$users['id']; ?>"> 
                           <i class="fas btn btn-danger fa-trash-alt"></i> 
                          </a> 

                          <a  href="../handlers/updateUser.php?userid=<?=$users['id']; ?>" >
                           <i class="fas btn btn-info fa-solid fa-check"></i> </a>
                    
                      </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
           


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