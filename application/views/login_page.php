<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Final Project">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Diego Gerard Angeles Diego">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<style>
		/* Add something here */
	</style>
	<title>GCM-IS Login</title>
</head>

<body class="bg-cover grid grid-cols-1 gap-4 p-20" style="background-image: url('assets/images/login_bg.png')">
	<!-- <div class="flex items-center justify-center h-screen w-screen shadow-lg">
		<div class="w-72 h-72 bg-white/10 bg-opacity-20 backdrop-blur-lg rounded-lg drop-shadow-lg">
		<h1 class="font-sans p-10 text-white text-2xl font-bold">Welcome</h1>
		</div>
		
	</div> -->

	<div class="flex w-full h-auto max-w-3xl mx-auto rounded-lg overflow-hidden shadow-xl">
		<div class="xl:block bg-cover bg-center w-1/2" style="background-image: url('assets/images/profile_login.png')"></div>
		<!-- <div class="w-full xl:w-1/2 px-4 py-4 text-center bg-white/30 bg-opacity-20 backdrop-blur-lg drop-shadow-lg"> -->
		<div class="w-full xl:w-1/2 px-4 py-4 text-center bg-gray-100">
			<form dir="rtl" class="form-signin" method="post" action="<?php echo base_url(); ?>login">

				<?php if ($this->session->flashdata('fail_login')) : ?>
					<?php echo '<p class="alert alert-dismissable alert-danger">' . $this->session->flashdata('fail_login') . '</p>'; ?>
				<?php endif; ?>

				<div class="p-8 pb-10 text-gray-700 text-center font-bold">
					<h1 class="text-gray-900 text-2xl">The Guidance and Testing Office</h1>
				</div>

				<div style="color:red;"><?php echo form_error('username'); ?>
					<div class="mb-2 mt-5">
						<label class="block text-right mr-10 text-gray-900 text-sm font-bold mb-2" for="username">Username</label>
						<input class="w-4/5 shadow-inner appearance-none border rounded py-2 px-3 bg-gray-200 text-gray-700 mb-3 leading-normal focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Username" value="<?php echo set_value('username'); ?>" />
					</div>
					<div class="mb-4">
						<label class="block text-right mr-10 text-gray-900 text-sm font-bold mb-2" for="password">Password</label>
						<input class="w-4/5 shadow-inner appearance-none border rounded py-2 px-3 bg-gray-200 text-gray-700 mb-3 leading-normal focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
					</div>
				</div>
				<div class="flex items-center justify-start mt-5">
					<div class="m-1 mx-auto">
						<!-- <button class="w-64 bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 pr-24 inline-flex items-center"> -->
						<button class="w-64 bg-white text-gray-800 font-bold rounded border-3 border-blue-500 hover:border-green-600 hover:bg-blue-500 hover:text-white shadow-md py-2 pr-24 inline-flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
								<path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
							</svg>
							<span class="mr-2 text-sm lading-normal">Sign in</span>
						</button>
					</div>
				</div>
				<div class="p-3 pr-8 text-gray-700 text-center">
					<a href="#" class="text-xs hover:text-gray-900 hover:underline pr-1">The Guidance and Testing Office</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>