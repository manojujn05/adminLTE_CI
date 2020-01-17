
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
     <?php  /*
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="index3.html" class="nav-link">Home</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
      */?>
    </ul> 
    
    
   
   
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   
   
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <a class="nav-link user_info_link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-circle">
          <img src="<?= base_url('assets/images/avatar3.png'); ?>" class="user_img" height="30px" width="30px" />
          </i>
        </a>
        
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right user-menu">
            <!-- User image -->
            <li class="user-header">
            <img src="<?= base_url('assets/images/avatar3.png'); ?>" class="img-responsive1">
<p>
                </p><h4 class="username_head"> User </h4>
                <small class="user_designation">Administrator</small>
              <p></p>
            </li>

            <li class="user-footer">
              <div class="float-right">
                <a href="<?= base_url('login');?>" class="btn btn-info btn-flat sign_out_prim">Sign out</a>
              </div>

              <div class="float-left">
                <a href="<?= base_url('login');?>" class="btn btn-info btn-flat profile_prim">Profile</a>
              </div>
              <div class="clearfix"></div>
            </li>
          </ul>
      </li>
    </ul>
 
  </nav> 