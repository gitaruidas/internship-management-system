<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>uploads/propic/<?php echo $row[0]['propic']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row[0]['e_name']; ?></h3>

                <p class="text-muted text-center"><?php echo $this->session->userdata('logas'); ?></p>
                <p class="text-muted text-center"><?php echo $row[0]['company']; ?></p>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>

                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <!-- /.tab-pane -->

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Admin/eupdatesdata">

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Profile Picture</label>
                        <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>uploads/propic/<?php echo $row[0]['propic']; ?>"
                       alt="User profile picture">
                </div>
                        <div class="form-group">
                      
                      <input type="file" name="propic">    
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="<?php echo $row[0]['e_name']; ?>" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="<?php echo $row[0]['email']; ?>" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Phone No.</label>
                        <div class="col-sm-10">
                          <input type="text" name="phone" value="<?php echo $row[0]['phone']; ?>" class="form-control" id="inputName2" placeholder="Phone No.">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="company" value="<?php echo $row[0]['company']; ?>" class="form-control" id="inputName2" placeholder="Company Name">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                          <input type="radio" name="gender"  value="male"> Male <input type="radio" name="gender" value="female"> Female 
                        </div>
                      </div>

                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
