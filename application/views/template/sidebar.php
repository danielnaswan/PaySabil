
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
                <img  src="<?php echo base_url();?>/assets/images/praktikalmohdaqil.jpeg"" class="rounded-circle" width="35" height="35"  />
                
                 <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center"><?php echo $this->session->userdata('auth_user')['name']; ?></span>                           
                <span class="small font-weight-light pt-1 text-center"><?php echo $this->session->userdata('auth_user')['staff_id']; ?></span><!--text-secondary icon-sm text-center -->
              </div>
            </a>
          </li>
          <li class="nav-item pt-3">
            <a class="nav-link d-block" href="index.html">
             <!-- <img class="sidebar-brand-logo" src="<?php echo base_url();?>/assets/images/uthm.png"  width="90" height="30" alt="" />-->
              <img class="sidebar-brand-logomini" src="<?php echo base_url();?>/assets/images/logo-mini.svg" alt="" />
              <div class="small font-weight-light pt-2" align="right"><?php echo  $today = date("d-M-Y");?></div>
            </a>
            
          </li>
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
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-laporan" aria-expanded="false" aria-controls="ui-laporan">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-laporan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">                
                  <a class="nav-link" href="<?php echo base_url();?>cafeController/cafeList">Laporan Kafe</a>
                </li>
                <li class="nav-item">               
                  <a class="nav-link" href="<?php echo base_url();?>StudentController/index">Laporan Pelajar</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-tambah" aria-expanded="false" aria-controls="ui-laporan">
              <i class="mdi mdi-plus-outline menu-icon"></i>
              <span class="menu-title">Tambah</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-tambah">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">                
                  <a class="nav-link" href="<?php echo base_url();?>cafeController/addCafe">Kafe</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>cafeController/listsCafe">
              <i class="mdi mdi-qrcode menu-icon"></i>
              <span class="menu-title">Kod QR</span>
            </a>
          </li>
          
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-ststistik" aria-expanded="false" aria-controls="ui-ststistik">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Statistik</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-ststistik">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url();?>dashboard/maindb/pageone">Statistik HEP</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url();?>dashboard/maindb/pageone">Statistik Pusat Kesihatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>dashboard/maindb/pageone">Statistik Wakaf Endowmen</a>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
        
      </nav>
    </section>
    <!-- /.sidebar -->
  </aside>
