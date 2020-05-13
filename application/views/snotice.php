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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card-body">
                  <div class="card-header" style="color:white;background-color: blue;">
                <h3 class="card-title">Notice</h3>
              </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SI No:</th>
                  <th>Notice Date</th>
                  <th>Name</th>
                  <th>action</th>
                </tr>
                </thead>
                
                <tbody>
                  <?php foreach($records as $r) { ?>
                  <tr>
                    <td><?php echo $r->n_id; ?></td>
                    <td><?php echo $r->date; ?></td>
                    <td><?php echo $r->name; ?></td>
                    <td><a href="<?php echo base_url(); ?>Interncontroller/viewnotice/<?php echo $r->n_id; ?>">view</a></td>
                  </tr>

                <?php } ?>
                  
              </tbody>

              </table>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>