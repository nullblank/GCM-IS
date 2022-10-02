<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome <?php echo $user->user_name; ?>!</title>
  <meta charset="utf-8">
  <meta name="author" content="Diego Gerard Angeles Diego">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="assets/css/tailwind/tailwind.min.css">
  <link rel="icon" type="images/png" sizes="32x32" href="PLACEHOLDER">
  <script src="js/main.js"></script>
</head>

<body class="antialiased bg-body text-body font-body">
  <div class="">
    <section class="overflow-hidden min-h-full">
      <?php $this->load->view('elements/sidebars/sidebar_admin'); ?>

      <div class="xl:ml-80">
        <?php $this->load->view($main_content);?>
      </div>
    </section>
  </div>
</body>

</html>