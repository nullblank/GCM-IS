<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="author" content="Diego Gerard Angeles Diego">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="assets/css/tailwind/tailwind.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png">
  <script src="assets/js/main.js"></script>
</head>

<body class="antialiased bg-body text-body font-body" style="background-image: url('assets/flex-ui-assets/elements/pattern-dark2.svg'); background-position: center;">
  <div class="">
    <section class="py-24 md:py-32 bg-coolGray-900" style="background-image: url('assets/flex-ui-assets/elements/pattern-dark2.svg'); background-position: center;">
      <div class="container px-4 mx-auto">
        <div class="max-w-sm mx-auto">
          <div class="mb-6 text-center">
            <a class="inline-block mb-6" href="#">

            </a>
            <h3 class="mb-4 text-2xl md:text-3xl font-bold text-white">GCM - IS</h3>
            <p class="text-lg text-coolGray-400 font-medium">The Guidance and Testing Office Information System</p>
          </div>
          <form class="form-signin" method="post" action="<?php echo base_url(); ?>login">
            <!-- PHP HERE -->
            <?php if ($this->session->flashdata('fail_login')) : ?>
              <?php echo '<p class="alert alert-dismissable alert-danger">' . $this->session->flashdata('fail_login') . '</p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('pass')) : ?>
              <?php echo '<p class="alert alert-dismissable alert-success">' . $this->session->flashdata('pass_login') . '</p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('access_denied')) : ?>
              <?php echo '<p class="alert alert-dismissable alert-danger">' . $this->session->flashdata('access_denied') . '</p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('reset_success')) : ?>
              <?php echo '<p class="alert alert-dismissable alert-success">' . $this->session->flashdata('reset_success') . '</p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('logged_out')) : ?>
              <?php echo '<p class="alert alert-dismissable alert-success">' . $this->session->flashdata('logged_out') . '</p>'; ?>
            <?php endif; ?>
            <!-- END OF PHP -->
            <div class="mb-6">
              <div style="color:red;"><?php echo form_error('username'); ?></div>
              <label class="block mb-2 text-white font-medium" for="">Username</label>
              <input class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="username" name="username" placeholder="Enter Username">
            </div>
            <div class="mb-4">
              <div style="color:red;"><?php echo form_error('password'); ?></div>
              <label class="block mb-2 text-white font-medium" for="">Password</label>
              <input class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="password" name="password" placeholder="************">
            </div>
            <div class="flex flex-wrap items-center justify-between mb-6">

              <div class="w-full md:w-auto mt-1"></div>
            </div>
            <button class="inline-block py-3 px-7 mb-6 w-full text-base text-blue-50 font-medium text-center leading-6 bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-md shadow-sm" type="submit">Login</button>
          </form>
        </div>
      </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="assets/js/charts-demo.js"></script>
</body>

</html>