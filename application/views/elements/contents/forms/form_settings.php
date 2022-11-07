<!-- Hidden Modal School -->
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
                                            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">List of Schools</h2>
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
                                        <th></th>
                                        <th></th>
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
                                                    <button type="button" data-modal-toggle="EditSchool<?php echo $school->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                                        Edit
                                                    </button>
                                                </th>
                                                <th class="whitespace-nowrap px-4">
                                                    <button type="button" data-modal-toggle="DelSchool<?php echo $school->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button">
                                                        Delete
                                                    </button>
                                                </th>
                                            </tr>
                                            <!-- Per item edit button -->
                                            <div id="EditSchool<?php echo $school->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="EditSchool<?php echo $school->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/editSchool/<?php echo $school->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Update Details</h3>
                                                                            <div>
                                                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Full Name of School</label>
                                                                                <input name="up_fullschoolname" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $school->description; ?>">
                                                                            </div>
                                                                            <div>
                                                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New School Acronym</label>
                                                                                <input style="text-transform:uppercase" name="up_schoolacronym" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $school->school; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                                    <button type="button" data-modal-toggle="EditSchool<?php echo $school->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Per item delete button -->
                                            <div id="DelSchool<?php echo $school->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="DelSchool<?php echo $school->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/deleteSchool/<?php echo $school->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Delete entry?</h3>
                                                                            <div class="mt-2">
                                                                                <p class="text-sm text-gray-500">Are you sure you want to delete this entry? The entry will be permanently removed. This action cannot be undone.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                    <button type="button" data-modal-toggle="DelSchool<?php echo $school->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p style="color:red;">No School Record Found.</p>
                                    <?php endif ?>
                                    <!--End of item-->
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            <!-- List of known religion parition and table -->
            <!-- Hidden Modal Religion -->
            <div id="AddNewReligion" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button data-modal-toggle="AddNewReligion" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/addReligion/" method="post">
                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter New Religion</h3>

                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name of Religion</label>
                                            <input name="relname" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="i.e Roman Catholic." required>
                                        </div>

                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Add</button>
                                    <button type="button" data-modal-toggle="AddNewReligion" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="py-0 border-b border-coolGray-100">
                <section class="py-6 border-b border-coolGray-100">
                    <div class="container px-4 mx-auto">
                        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
                            <div class="py-1 border-b border-coolGray-100">
                                <div class="w-full md:w-8/12">
                                    <div class="flex flex-wrap -m-4 grid grid-cols-2 gap-3">
                                        <div class="w-full p-3">
                                            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">List of Religions</h2>
                                        </div>
                                        <div class="w-full">
                                            <button type="button" data-modal-toggle="AddNewReligion" class="shadow-button border bordercolor-blue-100 rounded-md flex flex-wrap justify-center p-3 font-medium text-sm text-gray-400">
                                                Add New Religion
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                            <div class="px-2 overflow-x-auto">
                                <table class="w-full">
                                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                                            <p>RELIGION</p>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>





                                    <!--Start item loop-->
                                    <?php if ($religions) : ?>
                                        <?php foreach ($religions as $religion) : ?>
                                            <tr class="h-18 border-b border-coolGray-100">
                                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                                    <div class="flex items-center -m-2">
                                                        <div class="w-auto p-2">
                                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $religion->religion; ?></p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th class="whitespace-nowrap px-4">
                                                    <button type="button" data-modal-toggle="EditRel<?php echo $religion->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                                        Edit
                                                    </button>
                                                </th>
                                                <th class="whitespace-nowrap px-4">
                                                    <button type="button" data-modal-toggle="DelRel<?php echo $religion->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button">
                                                        Delete
                                                    </button>
                                                </th>
                                            </tr>
                                            <!-- Per item edit button -->
                                            <div id="EditRel<?php echo $religion->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="EditRel<?php echo $religion->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/editReligion/<?php echo $religion->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Update Details</h3>
                                                                            <div>
                                                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Name of Religion</label>
                                                                                <input required name="uprelname" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $religion->religion; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                                    <button type="button" data-modal-toggle="EditRel<?php echo $religion->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Per item delete button -->
                                            <div id="DelRel<?php echo $religion->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="DelRel<?php echo $religion->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/deleteReligion/<?php echo $religion->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Delete entry?</h3>
                                                                            <div class="mt-2">
                                                                                <p class="text-sm text-gray-500">Are you sure you want to delete this entry? The entry will be permanently removed. This action cannot be undone.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                    <button type="button" data-modal-toggle="DelRel<?php echo $religion->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p style="color:red;">No Religion Entries Found.</p>
                                    <?php endif ?>
                                    <!--End of item-->
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>










            <!-- List of known religion parition and table -->
            <!-- Hidden Modal Religion -->
            <div id="AddNewBarangay" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button data-modal-toggle="AddNewBarangay" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/addBarangay/" method="post">
                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Enter New Barangay</h3>

                                        <div>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Barangay</label>
                                            <input name="barangay" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="i.e Roman Catholic." required>
                                        </div>

                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Add</button>
                                    <button type="button" data-modal-toggle="AddNewBarangay" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="py-0 border-b border-coolGray-100">
                <section class="py-6 border-b border-coolGray-100">
                    <div class="container px-4 mx-auto">
                        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
                            <div class="py-1 border-b border-coolGray-100">
                                <div class="w-full md:w-8/12">
                                    <div class="flex flex-wrap -m-4 grid grid-cols-2 gap-3">
                                        <div class="w-full p-3">
                                            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">List of Barangays</h2>
                                        </div>
                                        <div class="w-full">
                                            <button type="button" data-modal-toggle="AddNewBarangay" class="shadow-button border bordercolor-blue-100 rounded-md flex flex-wrap justify-center p-3 font-medium text-sm text-gray-400">
                                                Add New Barangay
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                            <div class="px-2 overflow-x-auto">
                                <table class="w-full">
                                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                                            <p>RELIGION</p>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>





                                    <!--Start item loop-->
                                    <?php if ($barangays) : ?>
                                        <?php foreach ($barangays as $barangay) : ?>
                                            <tr class="h-18 border-b border-coolGray-100">
                                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                                    <div class="flex items-center -m-2">
                                                        <div class="w-auto p-2">
                                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $barangay->barangay; ?></p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th class="whitespace-nowrap px-4">
                                                    <button type="button" data-modal-toggle="EditBar<?php echo $barangay->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                                        Edit
                                                    </button>
                                                </th>
                                                <th class="whitespace-nowrap px-4">
                                                    <button type="button" data-modal-toggle="DelBar<?php echo $barangay->id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button">
                                                        Delete
                                                    </button>
                                                </th>
                                            </tr>
                                            <!-- Per item edit button -->
                                            <div id="EditBar<?php echo $barangay->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="EditBar<?php echo $barangay->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/editBarangay/<?php echo $barangay->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Update Details</h3>
                                                                            <div>
                                                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Name of Barangay</label>
                                                                                <input required name="upbarangay" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg bg-gray-50 shadow-input" placeholder="<?php echo $barangay->barangay; ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                                    <button type="button" data-modal-toggle="EditBar<?php echo $barangay->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Per item delete button -->
                                            <div id="DelBar<?php echo $barangay->id; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button data-modal-toggle="DelBar<?php echo $barangay->id; ?>" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <form class="space-y-6" action="<?php echo base_url(); ?>user/settings/deleteBarangay/<?php echo $barangay->id; ?>" method="post">
                                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Delete entry?</h3>
                                                                            <div class="mt-2">
                                                                                <p class="text-sm text-gray-500">Are you sure you want to delete this entry? The entry will be permanently removed. This action cannot be undone.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                    <button type="button" data-modal-toggle="DelBar<?php echo $barangay->id; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p style="color:red;">No Religion Entries Found.</p>
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