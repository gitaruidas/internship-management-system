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

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Notice</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Notice Name</strong>

                <p class="text-muted">
                  <?php echo $records[0]['name'] ; ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>Notice Date</strong>

                <p class="text-muted">
                <?php echo $records[0]['date'] ; ?>
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>Description</strong>

                <p class="text-muted">
                  <?php echo $records[0]['description'] ; ?>
                </p>

              </div>
              <!-- /.card-body -->
            </div>


          </div>
        </div>
      </div>
    </section>
  </div>
