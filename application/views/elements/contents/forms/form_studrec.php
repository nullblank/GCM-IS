<form method="post" action="">
    <input type='hidden' name='s_id' value='<?php echo $stud_id; ?>' />
    <div class="bg-coolGray-50 py-4">
        <div class="container px-4 mx-auto">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Personal Data Inventory Record of: <?php echo $student->s_first; ?>, <?php echo $student->s_last; ?></h2>
                            <p class="text-xs text-coolGray-500 font-medium"></p>
                        </div>
                        <div class="w-full md:w-auto p-2">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-10 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>


                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">ID Number</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <input value="<?php echo $student->stud_id; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Name</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <p class="text-sm text-coolGray-400 font-regular">First Name</p>
                                <input value="<?php echo $student->s_first; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <p class="text-sm text-coolGray-400 font-regular">Last Name</p>
                                <input value="<?php echo $student->s_last; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="mt-6 flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3"></div>
                            <div class="w-full md:w-2/6 p-3">
                                <p class="text-sm text-coolGray-400 font-regular">Middle Initial</p>
                                <input value="<?php echo $student->s_mi; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3"></div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Course</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <input value="<?php echo $student->s_course; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Year</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <input value="<?php echo $student->s_year; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Status</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <input value="<?php echo $student->s_stat; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-6/6">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/6 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Email</p>
                            </div>
                            <div class="w-full md:w-2/6 p-3">
                                <input value="<?php echo $student->s_email; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-2/6 p-3"></div>
                            <div class="w-full md:w-1/6 p-3">
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>










            </div>
        </div>
    </div>
</form>