<form method="post" action="<?php echo base_url(); ?>student/record/updaterecord/educ">

    <input type='hidden' name='uid' value='<?php echo $user->user_id; ?>' />
    <input type='hidden' name='un' value='<?php echo $user->user_name; ?>' />
    <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />


    <div class="py-6 border-b border-coolGray-100">
        <div class="w-full md:w-6/6">
            <div class="flex flex-wrap -m-3">
                <div class="w-full md:w-1/6 p-3">
                </div>
                <div class="w-full md:w-2/6 p-3 pb-9">
                    <p class="text-sm text-coolGray-400 font-regular">ID Number</p>
                    <p><?php echo $educ->stud_id; ?></p>
                </div>
                <div class="w-full md:w-1/6 p-3"></div>
                <div class="w-full md:w-1/6 p-3">
                    
                    <a href="<?php echo base_url(); ?>DashboardAdmin/StudentRecords" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                        Cancel
                    </a>
                </div>
                <div class="w-full md:w-1/6 p-3">
                    <button type="submit" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                        Save
                    </button>
                </div>
            </div>
        </div>


        <!-- CONTENT -->

        <!-- Elementary -->
        <div class="py-6 border-t border-coolGray-100">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3">
                        <p class="text-sm text-coolGray-800 font-semibold"></p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Level</p>
                        <p class="font-bold">Elementary</p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Name of School Graduated/Last Attended</p>
                        <div class="relative">
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                            </svg>
                            <select name="e_ename" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                <option selected value="<?php echo $educ->e_ename; ?>"><?php echo $educ->e_ename; ?></option>
                                <?php foreach ($schools as $s) : ?>
                                    <?php if ($s->description == $educ->e_ename) : ?>
                                    <?php else : ?>
                                        <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-6 border-b border-coolGray-100">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3"></div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Year Graduated</p>
                        <input value="<?php echo $educ->e_eyear; ?>" name="e_eyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Year">
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                        <textarea name="e_ehonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"><?php echo $educ->e_ehonor; ?></textarea>
                    </div>
                    <div class="w-full md:w-2/6 p-3"></div>
                    <div class="w-full md:w-1/6 p-3"></div>
                </div>
            </div>
        </div>
        <!-- Junior HS -->
        <div class="py-6">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3">
                        <p class="text-sm text-coolGray-800 font-semibold"></p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Level</p>
                        <p class="font-bold">Junior Highschool</p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Name of School Graduated/Last Attended</p>
                        <div class="relative">
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                            </svg>
                            <select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                <option selected value="<?php echo $educ->e_jname; ?>"><?php echo $educ->e_jname; ?></option>
                                <?php foreach ($schools as $s) : ?>
                                    <?php if ($s->description == $educ->e_jname) : ?>
                                    <?php else : ?>
                                        <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-6 border-b border-coolGray-100">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3"></div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Year Graduated</p>
                        <input value="<?php echo $educ->e_jyear; ?>" name="e_jyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Year">
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                        <textarea name="e_jhonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"><?php echo $educ->e_jhonor; ?></textarea>
                    </div>
                    <div class="w-full md:w-2/6 p-3"></div>
                    <div class="w-full md:w-1/6 p-3"></div>
                </div>
            </div>
        </div>
        <!-- Senior HS -->
        <div class="py-6">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3">
                        <p class="text-sm text-coolGray-800 font-semibold"></p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Level</p>
                        <p class="font-bold">Senior Highschool</p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Name of School Graduated/Last Attended</p>
                        <div class="relative">
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                            </svg>
                            <select name="e_sname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                <option selected value="<?php echo $educ->e_sname; ?>"><?php echo $educ->e_sname; ?></option>
                                <?php foreach ($schools as $s) : ?>
                                    <?php if ($s->description == $educ->e_sname) : ?>
                                    <?php else : ?>
                                        <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-6 border-b border-coolGray-100">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3"></div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Year Graduated</p>
                        <input value="<?php echo $educ->e_syear; ?>" name="e_syear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Year">
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                        <textarea name="e_shonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"><?php echo $educ->e_shonor; ?></textarea>
                    </div>
                    <div class="w-full md:w-2/6 p-3"></div>
                    <div class="w-full md:w-1/6 p-3"></div>
                </div>
            </div>
        </div>
        <!-- College -->
        <div class="py-6">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3">
                        <p class="text-sm text-coolGray-800 font-semibold"></p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Level</p>
                        <p class="font-bold">College</p>
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Name of School Graduated/Last Attended</p>
                        <div class="relative">
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                            </svg>
                            <select name="e_cname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                <option selected value="<?php echo $educ->e_cname; ?>"><?php echo $educ->e_cname; ?></option>
                                <?php foreach ($schools as $s) : ?>
                                    <?php if ($s->description == $educ->e_cname) : ?>
                                    <?php else : ?>
                                        <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-6 border-b border-coolGray-100">
            <div class="w-full md:w-6/6">
                <div class="flex flex-wrap -m-3">
                    <div class="w-full md:w-1/6 p-3"></div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Year Graduated</p>
                        <input value="<?php echo $educ->e_cyear; ?>" name="e_cyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Year">
                    </div>
                    <div class="w-full md:w-2/6 p-3">
                        <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                        <textarea name="e_chonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"><?php echo $educ->e_chonor; ?></textarea>
                    </div>
                    <div class="w-full md:w-2/6 p-3"></div>
                    <div class="w-full md:w-1/6 p-3"></div>
                </div>
            </div>
        </div>




    </div>
</form>