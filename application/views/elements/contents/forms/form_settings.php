<!-- Hidden Modal Elements -->
<div id="AddNewSchool" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button data-modal-toggle="AddNewSchool" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/addSchool/" method="post">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter New School Information</h3>

                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Name of School</label>
                                <input name="fullschoolname" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="Saint Mary's University" required>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">School Acronym</label>
                                <input style="text-transform:uppercase" name="schoolacronym" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="SMU" required>
                            </div>

                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Add</button>
                        <button type="button" data-modal-toggle="AddNewSchool" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

            <div class="pb-6 border-b border-coolGray-100">
                <div class="flex flex-wrap items-center justify-between -m-2">
                    <div class="w-full md:w-auto p-2">
                        <h2 class="text-coolGray-900 text-lg font-semibold">Settings</h2>
                        <p class="text-xs text-coolGray-500 font-medium">Application and form item control panel.</p>
                    </div>
                </div>
            </div>

            <!-- List of known schools parition and table -->
            <div class="py-6 border-b border-coolGray-100">
                <section class="py-6 border-b border-coolGray-100">
                    <div class="container px-4 mx-auto">
                        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
                            <div class="py-1 border-b border-coolGray-100">
                                <div class="w-full md:w-8/12">
                                    <div class="flex flex-wrap -m-4 grid grid-cols-2 gap-3">
                                        <div class="w-full p-3">
                                            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">Known Schools to the University</h2>
                                        </div>
                                        <div class="w-full">
                                            <button type="button" data-modal-toggle="AddNewSchool" class="shadow-button border bordercolor-blue-100 rounded-md flex flex-wrap justify-center p-3 font-medium text-sm text-gray-400">Add New School</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- table -->
                            <div class="px-2 overflow-x-auto">
                                <table class="w-full">
                                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                                            <p>FULL NAME OF SCHOOL</p>
                                        </th>
                                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">ACRONYM</th>
                                        <th></th><th></th>
                                    </tr>
                                    <!--Start item loop-->
                                    <?php if ($schools) : ?>
                                        <?php foreach ($schools as $school) : ?>
                                            <tr class="h-18 border-b border-coolGray-100">
                                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                                    <div class="flex items-center -m-2">
                                                        <div class="w-auto p-2">
                                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $school->description; ?></p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $school->school; ?></th>
                                                <th class="whitespace-nowrap px-4">
                                                    <a href="<?php echo base_url(); ?>user/profile/editUser/<?php echo $school->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                                        <p>Edit</p>
                                                    </a>
                                                </th>
                                                <th class="whitespace-nowrap px-4">
                                                    <a href="<?php echo base_url(); ?>user/profile/editUser/<?php echo $school->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button">
                                                        <p>Delete</p>
                                                    </a>
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
        </div>
    </div>
</div>