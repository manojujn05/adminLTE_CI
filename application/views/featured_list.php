<?php include "header.php" ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Featured List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Featured List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php 
    $list = $data->SUCC;
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Featured List</h3>
                            <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md float-right" data-toggle="modal" data-target="#myModal">Add Featured Song</button>	
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Audio Link</th>
                  <th>Artist</th>
                  <th>Genre</th>
                </tr>
                </thead>
                <tbody> 
                  <?php
                    foreach($list as $value){
                      ?>
                      <tr>
                        <td><?= $value->id ?></td>
                        <td>
 <img class="artist_img" src='<?= $value->image_link?>' onerror="this.src='http://denrakaev.com/wp-content/uploads/2015/03/no-image-800x511.png'"   width='100' hight='100' />
                        </td>
                        <td><?= $value->name ?></td>
                        <td>
                        <a href='<?= $value->audio_link?>' >Audio Link</a>
                        </td>
                        <td><?= $value->artist->name ?></td>
                        <td><?= $value->Genre->name ?></td>
                      </tr>
                      <?php 
                    }
                   ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Audio Link</th>
                  <th>Artist</th>
                  <th>Genre</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add User </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
            <!-- general form elements -->
              <!-- form start -->
              <form role="form">
                	<div class="row">
                 	<div class="col-md-12 d-flex">
                      <div class="col-md-2">
                      	<div class="form-group">
                          <label for="Name">Name:</label>
                      	</div>
                      </div>
                      <div class="col-md-10">
                         <input type="name" class="form-control" id="name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-12  d-flex">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="Email">Email:</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <input type="email" class="form-control" id="email" placeholder="Enter Email">
                      </div>
                    </div>
                    <div class="col-md-12  d-flex">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="age">Age:</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <input type="age" class="form-control" id="age" placeholder="Enter age">
                      </div>
                    </div>
                    <div class="col-md-12  d-flex">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="Phone">Phone:</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <input type="phone" class="form-control" id="phone" placeholder="Enter Phone">
                      </div>
                    </div>
                    <div class="col-md-12  d-flex">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="country">Country:</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <input type="country" class="form-control" id="country" placeholder="Enter Country">
                      </div>
                    </div>

                    <div class="col-md-12  d-flex">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="city">City:</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                         <input type="city" class="form-control" id="country" placeholder="Enter City">
                      </div>
                    </div>
                    
            </form>
        </div>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- <script src='<?php //base_url("assets/js/artists.js");?>'></script> -->
<?php include "footer.php"; ?>

<script >
	$("#example2").DataTable();
  $('img').error(function() {
    $(this).attr('src', 'https://static.thenounproject.com/png/340719-200.png').addClass('no-img');
});
</script>

<?php include "end.php";?>