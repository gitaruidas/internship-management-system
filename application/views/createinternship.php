 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Internship</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>interncontroller/insert" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Internship Role</label>
                    <input type="text" name="irole" class="form-control" id="exampleInputEmail1" placeholder="Enter Role">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skills Needed</label>
                    <input type="text" name="skill" class="form-control" id="exampleInputPassword1" placeholder="Skills need">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Vacency</label>
                    <input type="text" name="vacency" class="form-control" id="exampleInputPassword1" placeholder="Vacency">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="descrip" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Closing Date</label>
                    <input type="text" name="closedate" class="form-control" id="exampleInputPassword1" placeholder="Closing Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pdffile" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        <div class="col-md-12">
                <div class="card-body">
                  <div class="card-header" style="color:white;background-color: blue;">
                <h3 class="card-title">Internship History</h3>
              </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SI No:</th>
                  <th>Internship Role</th>
                  <th>Skills Needed</th>
                  <th>Vacency</th>
                  <th>Description</th>
                  <th>Closing Date</th>
                  <th>PDF</th>
                  <th>action</th>

                </tr>
                </thead>
                
                <tbody>
                  <?php
                     foreach($records as $r){ ?>
                      
                    <tr>
                        <td><?php echo $r->i_id; ?></td>
                        <td><?php echo $r->i_name; ?></td>
                        <td><?php echo $r->description; ?></td>
                        <td><?php echo $r->skill; ?></td>
                        <td><?php echo $r->vacency; ?></td>
                        <td><?php echo $r->closedate; ?></td>
                        <td><?php echo $r->pdf; ?></td>
                         <td>
                         <?php if($this->session->userdata('logas')=='student') { ?>
                          <a href=<?php echo base_url(); ?>index.php/interncontroller/enrole/<?php echo $r->i_id; ?>>Enrole</a>
                        <?php } ?>
                        <?php if($this->session->userdata('logas')=='employer') { ?>
                          <a href=<?php echo base_url(); ?>index.php/interncontroller/editinternship/<?php echo $r->i_id; ?>>Edit|</a><a href=<?php echo base_url(); ?>index.php/interncontroller/deleteinternship/<?php echo $r->i_id; ?>>Delete</a>
                        <?php } ?>
                        </td>
                    </tr>
            <?php } ?>
              </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
    </section>



    
  </div>