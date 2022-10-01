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
                                                    <img class="rounded-full" src=<?php echo $students->s_photo; ?>
                                                        width="64" height="64" alt="User 01" />
                                                </a>
                                                <div class="mt-1 pr-1">
                                                    <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                                                        <h2
                                                            class="text-xl leading-snug justify-center font-semibold mt-3">
                                                            <?php echo $students->s_last; ?>
                                                            <?php echo $students->s_mi; ?>,
                                                            <?php echo $students->s_first; ?></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </div>






                            <table class="table-auto">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="flex mr-auto">
                                                <div class="w-auto p-4">
                                                    <h3 class="text-blue-900 text-sm font-bold">Gender</h3>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="w-auto p-4">
                                                <label class="block text-gray-700 text-sm mb-auto"
                                                    for="username"><?php echo $students->s_gender;?></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex mr-auto">
                                                <div class="w-auto p-4">
                                                    <h3 class="text-blue-900 text-sm font-bold">Birthday</h3>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="w-auto p-4">
                                                <label class="block text-gray-700 text-sm mb-auto"
                                                    for="username"><?php echo $students->s_bday;?></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex mr-auto">
                                                <div class="w-auto p-4">
                                                    <h3 class="text-blue-900 text-sm font-bold">Age</h3>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="w-auto p-4">
                                                <label class="block text-gray-700 text-sm mb-auto"
                                                    for="username"><?php echo $students->s_age;?></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex mr-auto">
                                                <div class="w-auto p-4">
                                                    <h3 class="text-blue-900 text-sm font-bold">Address Details</h3>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="w-auto p-4">
                                                <label class="block text-gray-700 text-sm mb-auto"
                                                    for="username"><?php echo $students->s_brgy;?>
                                                    <?php echo $students->s_municipality;?>,
                                                    <?php echo $students->s_province;?></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex mr-auto">
                                                <div class="w-auto p-4">
                                                    <h3 class="text-blue-900 text-sm font-bold">Contact No.</h3>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="w-auto p-4">
                                                <label class="block text-gray-700 text-sm mb-auto"
                                                    for="username"><?php echo $students->s_cpnumber;?></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>





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