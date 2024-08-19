<?php if($this->session->userdata('logged_in')==TRUE):	
	$uri1 = $this->uri->segment(1);
	$uri2 = $this->uri->segment(2);
	$uri3 = $this->uri->segment(3);
?>



<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas fixed-top" id="sidebar" >
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-link d-block" align="center">
              	<img class="sidebar-brand-logo" src="<?php echo base_url();?>/assets/images/uthm.png"  width="80" height="25" alt="" /> &nbsp;&nbsp;
                <img  src="http://community.uthm.edu.my/images/profiles/<?php echo $this->session->userdata('nomatrik').'.jpg';?>" class="rounded-circle" width="35" height="35"  />
                
                 <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center"><?php echo $this->session->userdata('nama');?></span>                           
                <span class="small font-weight-light pt-1 text-center"><?php echo $this->session->userdata('nptj');?></span><!--text-secondary icon-sm text-center -->
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="index.html">
             <!-- <img class="sidebar-brand-logo" src="<?php echo base_url();?>/assets/images/uthm.png"  width="90" height="30" alt="" />-->
              <img class="sidebar-brand-logomini" src="<?php echo base_url();?>/assets/images/logo-mini.svg" alt="" />
              <div class="small font-weight-light pt-2" align="right"><?php echo  $today = date("d-M-Y");?></div>
            </a>
            <form class="d-flex align-items-center" action="#">
              <div class="input-group">
                <div class="input-group-prepend">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" />
              </div>
            </form>
          </li>
          
		<?php
		//echo "uri2   ".$uri2;
		?> 
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Menu Utama</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/maindb/mainpage">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Admin PTM</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              	<li class="nav-item" >
                  <a class="nav-link" href="<?php echo base_url();?>dashboard/maindb/pageone">contoh Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>portals/grup/lists">Group</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>Portals/user/lists">Pengguna</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>Portals/ptjproduk/lists">PTj Produk</a>
                </li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="mdi mdi-tag-text-outline menu-icon"></i>
              <span class="menu-title">Admin PTj</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
              	<li class="nav-item" >
                  <a class="nav-link" href="<?php echo base_url();?>Portals/produk/lists">Produk Kebajikan</a>
                </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>Portals/kelayakan/lists">Syarat Layak</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>Portals/user/lists">Dokumen Sokongan</a>
                </li>        -->        
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>portalp/mainpage/pageone">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Permohonan (siswa)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Semakan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Pelulus</span>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>          
        </ul>
      </nav>
    </section>
    <!-- /.sidebar -->
  </aside>
  
     
<?php endif;?>

