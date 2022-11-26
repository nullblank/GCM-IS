<div class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">




            <form method="post" action="<?php echo base_url(); ?>DashboardAdmin/StudentRecords">
                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Student Records</h2>
                            <p class="text-xs text-coolGray-500 font-medium">The search feature is CASE SENSITIVE</p>
                        </div>

                        <div class="w-full md:w-1/3 p-3">
                            <input placeholder="Search..." name="search" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-blue-500 border border-coolGray-200 rounded-lg shadow-input">
                            <p><?php echo form_error('search'); ?></p>
                        </div>
                        <div class="w-full md:w-1/6 p-3">
                            <select name="searchby" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                <option disabled selected value="stud_id">Search by...</option>
                                <option selected value="stud_id">ID Number</option>
                                <option value="s_first">First Name</option>
                                <option value="s_last">Last Name</option>
                                <option value="s_course">Course</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/6 p-3">
                            <button type="submit" name="submit" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>



            <!-- Table -->
            <div class="px-2 overflow-x-auto">
                <table class="w-full">
                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>STUDENT ID#</p>
                        </th>
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>NAME</p>
                        </th>
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>GENDER</p>
                        </th>
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>Course</p>
                        </th>
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>Year</p>
                        </th>
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>Address</p>
                        </th>
                        <th />
                    </tr>
                    <!--Start item loop-->
                    <?php if ($students) : ?>
                        <?php foreach ($students as $student) : ?>
                            <tr class="h-18 border-b border-coolGray-100">
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->stud_id; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->s_first; ?>, <?php echo $student->s_last; ?> <?php echo $student->s_mi; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->s_gender; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->s_course; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->s_year; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $student->s_brgy; ?> <?php echo $student->s_muni; ?>, <?php echo $student->s_provi; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">



                                        <form method="post" action="<?php echo base_url(); ?>student/record/view/">
                                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                                            <div class="w-auto p-2">
                                                <button type="submit" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                                                    View Records
                                                </button>
                                            </div>
                                    </div>
                                    </form>




                                </th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p style="color:red;">No Ethnicity Entries Found.</p>
                    <?php endif ?>
                    <!--End of item-->
                </table>
            </div>




















        </div>
    </div>
</div>