<!DOCTYPE html>
<html lang="en">
  

<head>
  <title>Welcome <?php echo $user->user_name; ?>!</title>
  <meta charset="utf-8">
  <meta name="author" content="Diego Gerard Angeles Diego">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="icon" type="images/png" sizes="32x32" href="PLACEHOLDER">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tailwind/tailwind.min.css');?>" media="all"/>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/birthday.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/datepicker.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/flowbite.js'); ?>"></script>
</head>

<style>
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


<body class="antialiased bg-body text-body font-body">
  <div class="">
    <section class="overflow-hidden min-h-full">
      <?php $this->load->view('elements/sidebars/sidebar_staff'); ?>
      <div class="xl:ml-80">
        <?php $this->load->view($main_content);?>
      </div>
    </section>
  </div>
</body>
</html>