<?php $this->load->view('template/header') ?>
<?php $this->load->view('template/sidebar') ?>



        <!-- Main content -->
        <section class="container">
			<?=$this->session->flashdata('notis');?>
          	<!-- Your Page Content Here -->
			<?php $this->load->view($content) ?>

        </section><!-- /.content -->
      <!-- /.content-wrapper -->
      
      
<?php $this->load->view('template/footer') ?>