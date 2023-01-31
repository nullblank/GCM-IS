<!-- Hidden Modal Elements -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter New User Details</h3>
                <form class="space-y-6" action="<?php echo base_url(); ?>user/profile/addUser/" method="post">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account Username</label>
                        <input name="username" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="JohnDoe12" required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account User's Full Name</label>
                        <input name="name" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="John D. Doe Jr." required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div hidden>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Account Role</label>
                        <select name="role" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input" required>
                            <option value="Administrator">Administrator</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Allow User to login with account?</label>
                        <select name="isactive" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input" required>
                            <option selected value="1">Yes</option>
                            <option value="0">Not yet</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Account</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->

<!-- Header -->
<section class="bg-coolGray-50 p-8">
    <div class="flex flex-wrap items-center -m-2">
        <div class="w-full md:w-1/2 p-2">
            <div class="flex flex-wrap -m-2">
                <div class="w-auto p-2">
                    <img src="flex-ui-assets/images/dashboard/pages/flex-ui-blue-circle.svg" alt="">
                </div>
                <div class="flex-1 p-2">
                    <h2 class="mb-2 font-semibold text-black text-3xl">GCM IS</h2>
                    <p class="text-coolGray-500 font-medium">The Guidance and Testing office Information System</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">

        </div>
    </div>
</section>
<!-- Overview Analaytics -->
<div class="container mx-auto">
    <section class="py-20 xl:py-24 bg-white" style="background-image: url('assets/flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-center text-center -mx-4">
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 text-4xl md:text-5xl font-bold text-blue-600 tracking-tighter"><?php echo $student_number; ?></h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Student Records Registered</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter"><?php echo $student_maleno; ?></h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Number of Male Students</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter"><?php echo $student_femaleno; ?></h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Number of Female Students</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter">nil</h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">PLACEHOLDER</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- OFFICE STAFF ACCOUNTS TABLE -->
<section class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">Office Staff Accounts</h2>
            <div class="px-6 overflow-x-auto">
                <table class="w-full">
                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>NAME</p>
                        </th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">USERNAME</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">ROLE</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">Date CREATED</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">IS ACTIVE</th>
                        <th><button class="flex flex-wrap justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white border border-blue-500 rounded-md shadow-button" type="button" data-modal-toggle="authentication-modal">Add New User</button></th>
                    </tr>

                    <!--Start item loop-->
                    <?php if ($user_item) : ?>
                        <?php foreach ($user_item as $user_items) : ?>




                            <div id="edit_user_<?php echo $user_items->user_id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit_user_<?php echo $user_items->user_id; ?>">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter New User Details</h3>
                                            <form class="space-y-6" action="<?php echo base_url(); ?>user/profile/editAccount/" method="post">
                                                <input type='hidden' name='user_id' value='<?php echo $user_items->user_id; ?>' />
                                                <div>
                                                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                                                    <input name="username" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $user_items->user_name;?>">
                                                </div>
                                                <div>
                                                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username</label>
                                                    <input name="name" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $user_items->user_account;?>">
                                                </div>
                                                <div>
                                                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                                                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                </div>
                                                <div>
                                                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Role</label>
                                                    <select name="role" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input" required>
                                                        <option value="Administrator">Administrator</option>
                                                    </select>
                                                </div>
                                                <div class = "pb-5">
                                                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Allow User to login with account?</label>
                                                    <select name="isactive" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input" required>
                                                        <option selected value="1">Yes</option>
                                                        <option value="0">Not yet</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Account</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>







                            <tr class="h-18 border-b border-coolGray-100">
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <div class="flex items-center justify-center w-10 h-10 text-base font-medium bg-blue-500 rounded-md">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 10.94C21.9896 10.8481 21.9695 10.7576 21.94 10.67V10.58C21.8919 10.4772 21.8278 10.3827 21.75 10.3L15.75 4.3C15.6673 4.22222 15.5728 4.15808 15.47 4.11H15.37C15.2728 4.058 15.1683 4.02092 15.06 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V11C22 11 22 11 22 10.94ZM16 7.41L18.59 10H17C16.7348 10 16.4804 9.89464 16.2929 9.70711C16.1054 9.51957 16 9.26522 16 9V7.41ZM20 17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7C4 6.73478 4.10536 6.48043 4.29289 6.29289C4.48043 6.10536 4.73478 6 5 6H14V9C14 9.79565 14.3161 10.5587 14.8787 11.1213C15.4413 11.6839 16.2044 12 17 12H20V17ZM7 12H11C11.2652 12 11.5196 11.8946 11.7071 11.7071C11.8946 11.5196 12 11.2652 12 11C12 10.7348 11.8946 10.4804 11.7071 10.2929C11.5196 10.1054 11.2652 10 11 10H7C6.73478 10 6.48043 10.1054 6.29289 10.2929C6.10536 10.4804 6 10.7348 6 11C6 11.2652 6.10536 11.5196 6.29289 11.7071C6.48043 11.8946 6.73478 12 7 12ZM7 14C6.73478 14 6.48043 14.1054 6.29289 14.2929C6.10536 14.4804 6 14.7348 6 15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16H17C17.2652 16 17.5196 15.8946 17.7071 15.7071C17.8946 15.5196 18 15.2652 18 15C18 14.7348 17.8946 14.4804 17.7071 14.2929C17.5196 14.1054 17.2652 14 17 14H7Z" fill="#EBF3FE"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $user_items->user_name; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_account; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_role; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_created; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_isactive; ?></th>
                                <th class="whitespace-nowrap px-4">
                                <button class="flex flex-wrap justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white border border-blue-500 rounded-md shadow-button" type="button" data-modal-toggle="edit_user_<?php echo $user_items->user_id; ?>">Edit</button>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p style="color:red;">No Student Record Found.</p>
                    <?php endif ?>
                    <!--End of item-->
                </table>
            </div>
        </div>
    </div>
</section>
</div>
</section>
</div>