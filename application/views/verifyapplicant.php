<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Applicant</h1>
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
                  <th>Internship</th>
                  <th>applicant</th>
                  <th>Action</th>
                </tr>
                </thead>

              <tbody>
                  <?php foreach($records as $r){ ?>
                    <tr>
                        <td><?php echo $r->i_id ?></td>
                        <td><?php echo $r->i_name ?></td>
                        <td><?php echo $r->name ?></td>
                        <td>
                          <?php if ($r->a_status==0) { ?>
                            
                       
                        <a href="<?php echo base_url(); ?>index.php/interncontroller/taccept/<?php echo $r->i_id; ?>/<?php echo $r->s_id; ?>">Accept |</a><a href="<?php echo base_url(); ?>index.php/interncontroller/treject/<?php echo $r->i_id; ?>/<?php echo $r->s_id; ?>">Reject</a>
                           <?php  } ?>

                           <?php if ($r->a_status==1) { 
                            echo "Accepted";
                              } ?>

                              <?php if ($r->a_status==2) { 
                            echo "Rejected";
                              } ?>
                        </td>
                    </tr>

           <?php  } ?>
              </tbody>


                



          </table>
        </div>
      </div>
    </section>

</div>