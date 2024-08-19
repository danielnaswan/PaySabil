

<!-- web rujukan dia disini...jangn lupa rujuk  https://www.bootstrapdash.com/demo/plus-free/template/demo_1/index.html-->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log Masuk</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css">
</head>
    
<body>
  <div class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?php echo base_url();?>/assets/images/login.png" alt="login" class="login-card-img">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
              Universiti <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Tun Hussein Onn Malaysia .</a> Johor
            </p>
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?php echo base_url();?>/assets/images/uthm.png"   alt="" class="logo" /><!-- cuba buat logo smart sendiri logo.svg-->
              </div>
              <p class="login-card-description">Log Masuk Sistem Pay Sabil</p>
              <!--<form action="#!">-->
              	<?=form_open('home/login',array('class'=>'form form-horizontal')); ?>
                  <div class="form-group">
                    <label for="email" class="sr-only">Username</label>
                    <input type="text" name="form-username" id="form-username" class="form-control" placeholder="user ID">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="form-password" id="form-password" class="form-control" placeholder="***********">
                  </div>
                  
                  <!--<input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">-->
                  <button type="submit" id="submit" class="btn btn-block login-btn mb-4"> <i><font size="3"> &raquo;   Login &laquo;  </font></i></button>
                  <?=form_close(); ?>
               <!--</form>-->
               <?php echo $this->session->flashdata('notis');?>
                <a href="#!" class="forgot-password-link">Sila log masuk menggunakan id dan katalaluan email rasmi UTHM</a>
                <p class="login-card-footer-text">Sebarang Pertanyaan... <a href="#!" class="text-reset">Sila Hubungi Pejabat Hal Ehwal Pelajar</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
