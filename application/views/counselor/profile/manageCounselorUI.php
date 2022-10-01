<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Welcome <?php echo $user->user_name; ?>!</title>
</head>

<body class="flex bg-gray-100">
    <div class="flex bg-gray-300 h-auto w-screen" x-data="{ isSidebarExpanded: false }">
        <?php $this->load->view('admin/layouts/includes/sidebar');?>
        <!--LOAD VIEW SIDEBAR-->
        <div class="flex-1 flex flex-col">
            <?php $this->load->view('admin/layouts/includes/head');?>
            <!--LOAD VIEW HEAD-->
            <main class="p-6 sm:p-10 space-y-6 bg-slate-100">
                <!--MAIN CONTENT HERE-->
                <section class="flex flex-col justify-center antialiased bg-gray-100 text-gray-600 min-h-screen p-4">
                    <div class="h-full">
                        <!-- Card -->
                        <div class=" max-w-screen-sm mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                            <div class="flex flex-col h-full auto-cols-max">
                                <!-- Card top -->
                                <div class="flex-grow p-5">
                                    <div class="flex justify-between items-start border-b border-gray-200">
                                        <!-- Image + name -->
                                        <header>
                                            <div class="flex mb-2">
                                                <a class="relative inline-flex items-start mr-5" href="#0">
                                                    <img class="rounded-full" src=<?php echo $counselors->c_photo; ?>
                                                        width="64" height="64" alt="User 01" />
                                                </a>
                                                <div class="mt-1 pr-1">
                                                    <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                                                        <h2 class="text-xl leading-snug justify-center font-semibold">
                                                            <?php echo $counselors->c_last; ?>,
                                                            <?php echo $counselors->c_first; ?></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </header>
                                        <!-- Menu button -->
                                    </div>
                                    <!-- Bio -->
                                    <div class="mt-2">
                                        <div class="text-sm">$PLACEHOLER_REMARKSTABLE</div>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="flex mr-auto p-4">
                                    <div class="w-auto">
                                        <h3 class="text-blue-900 text-sm font-bold">Phone Number</h3>
                                    </div>
                                    <div class="w-auto ml-52">
                                        <label class="block text-gray-700 text-sm mb-auto"
                                            for="username"><?php echo $counselors->c_cpnumber;?></label>
                                    </div>
                                </div>
                            </div>


                            <div class="flex mr-auto p-4">
                                <div class="w-auto">
                                    <h3 class="text-blue-900 text-sm font-bold">Address Details</h3>
                                </div>
                                <div class="w-auto ml-52">
                                    <label class="block text-gray-700 text-sm mb-auto"
                                        for="username"><?php echo $counselors->c_brgy;?>
                                        <?php echo $counselors->c_municipality;?>,
                                        <?php echo $counselors->c_province;?></label>
                                </div>
                            </div>

                            <div class="border-t border-gray-200">
                                <div class="flex divide-x divide-gray-200r">
                                    <a class="block flex-1 text-center text-sm text-gray-600 hover:text-indigo-600 font-medium px-3 py-4"
                                        href="#0">
                                        <div class="flex items-center justify-center">
                                            <span>Edit Record</span>
                                        </div>
                                    </a>
                                    <a class="block flex-1 text-center text-sm text-gray-600 hover:text-gray-800 font-medium px-3 py-4 group"
                                        href="#0">
                                        <div class="flex items-center justify-center">
                                            <span>Delete Record</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>