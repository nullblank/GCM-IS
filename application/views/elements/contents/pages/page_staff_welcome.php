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

</div>
</section>
</div>