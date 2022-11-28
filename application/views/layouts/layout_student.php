<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome Student!</title>
  <meta charset="utf-8">
  <meta name="author" content="Diego Gerard Angeles Diego">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="icon" type="images/png" sizes="32x32" href="PLACEHOLDER">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tailwind/tailwind.min.css'); ?>" media="all" />
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</head>



<?php
$this->form_validation->set_error_delimiters('<p class="text-xs text-coolGray-500 font-medium error">', '</p>');
?>

<style>
  .error {
    color: red;
  }

  body::-webkit-scrollbar {
    width: 0.75rem;
  }

  body::-webkit-scrollbar-track {
    background: #2a3342;
  }

  body::-webkit-scrollbar-thumb {
    background: #2c62b9;
  }
</style>


<body onload="init()" class="antialiased bg-body text-body font-body bg-coolGray-900">

<!-- put element IDs here to hide them -->
  <script>
    function init() {
        $("#h_ofwemail").hide();
        $("#h_ofwrel2").hide();
        $("#h_kmsdeprel").hide();
        $("#h_kmsrel").hide();
        $("#s_nspouse").hide();
        $("#s_nochild").hide();
    }
  </script>







  <div class="">
    <section class="overflow-hidden min-h-full pt-20 pb-20">
      <div class="xl:ml-48 xl:mr-48">
        <?php $this->load->view($main_content); ?>
      </div>
    </section>
  </div>
</body>
<script src="<?php echo base_url('assets/js/birthday.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/checkBoxControl.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datepicker.js'); ?>"></script>

</html>