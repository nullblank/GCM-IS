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
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Note</h3>
                <form class="space-y-6" action="<?php echo base_url(); ?>student/record/addRec/" method="post">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        <input type='hidden' name='uid' value='<?php echo $user->user_id; ?>' />
                        <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                        <div class="pb-4">
                            <input placeholder="Enter Subject" name="subject" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg shadow-input">
                        </div>
                        <textarea name="remarks" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 bg-gray-50 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..." required></textarea>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Remarks</button>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold"><?php echo $student->s_first; ?>, <?php echo $student->s_last; ?>'s Counseling Records</h2>
            <div class="px-6 overflow-x-auto">
                <table class="w-full">
                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">Name of staff</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">Subject</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">Date and time</th>
                        <th><button class="flex flex-wrap justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white border border-blue-500 rounded-md shadow-button" type="button" data-modal-toggle="authentication-modal">Add Notes</button></th>
                        <th />
                    </tr>

                    <!--Start item loop-->
                    <?php if ($counselor_remarks) : ?>
                        <?php foreach ($counselor_remarks as $remark) : ?>




                            <div id="delete_remark_<?php echo $remark->cid; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <form class="space-y-6" action="<?php echo base_url(); ?>student/record/delRec/" method="post">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                            <!-- Heroicon name: outline/exclamation-triangle -->
                                                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                                            </svg>
                                                        </div>
                                                        <input type='hidden' name='cid' value='<?php echo $remark->cid; ?>' />
                                                        <input type='hidden' name='sid' value='<?php echo $remark->stud_id; ?>' />
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
                                                    <button type="button" data-modal-toggle="delete_remark_<?php echo $remark->cid; ?>" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="view_remark_<?php echo $remark->cid; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="view_remark_<?php echo $remark->cid; ?>">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">[<?php echo $remark->timestamp?>]</h3>
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                                    <input type='hidden' name='uid' value='<?php echo $user->user_id; ?>' />
                                                    <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                                                    <p><?php echo $remark->remark?></p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <tr class="h-18 border-b border-coolGray-100">
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $this->User_model->get_user_detail($remark->user_id);; ?></th>
                                <th class="px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $remark->subject;?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $remark->timestamp; ?></th>
                                <th>
                                    <button class="flex flex-wrap justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white border border-blue-500 rounded-md shadow-button" type="button" data-modal-toggle="view_remark_<?php echo $remark->cid; ?>">View Note</button>
                                </th>
                                <th class="whitespace-nowrap px-4">
                                    <button class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button" type="button" data-modal-toggle="delete_remark_<?php echo $remark->cid; ?>">Delete</button>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p style="color:red;">This student has no remarks yet.</p>
                    <?php endif ?>
                    <!--End of item-->
                </table>
            </div>
        </div>
    </div>
</section>