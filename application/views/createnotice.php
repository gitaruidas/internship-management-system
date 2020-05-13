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
    
             <div class="col-md-6">

              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create notice</h3>
              </div>
              <form role="form" action="<?php echo base_url(); ?>interncontroller/donotice" method="post" enctype="multipart/form-data">
                <div class="card-body">

                 <div class="form-group">
                    <label for="exampleInputEmail1">notice name</label>
                    <input type="text" name="name" class="form-control" id="example" placeholder="Enter notice name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">notice description</label>
                	<textarea  name="description" rows="10" cols="50"></textarea><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">date</label>
                    <input type="text" name="date" class="form-control" id="example" placeholder="Enter date">
                  </div>
                	<input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">

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