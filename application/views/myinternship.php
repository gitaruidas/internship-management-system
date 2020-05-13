<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Internship</h1>
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
                  <th>Description</th>
                  <th>Skills Needed</th>
                  <th>Vacency</th>
                  <th>Closing Date</th>
                  <th>PDF</th>
                  <th>Employer</th>
                  <th>Status</th>
                  

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
                        <td><?php echo $r->e_name; ?></td>
                        <td><?php
                                if ($r->status==0) {
                                 echo "not verified" ;
                                }

                                if ($r->status==1) {
                                 echo "accepted" ;
                                }

                                if ($r->status==2) {
                                echo  "rejected" ;
                                }
                        ?></td>

                         
                    </tr>

          <?php   } ?>
              </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
</div>