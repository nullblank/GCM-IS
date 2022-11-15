<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">ID Number</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->stud_id; ?>" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3">
                <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="py-6">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">First Name</p>
                <input value="<?php echo $student->s_first; ?>" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Last Name</p>
                <input value="<?php echo $student->s_last; ?>" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
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
                <input value="<?php echo $student->s_mi; ?>" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
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
                <div class="relative">
                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                    </svg>
                    <select value="" name="s_course" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                        <option disabled selected value="<?php echo $student->s_course; ?>"><?php echo $student->s_course; ?></option>
                        <?php foreach ($courses as $co) : ?>
                            <option value="<?php echo $co->course; ?>"><?php echo $co->course; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p><?php echo form_error('s_course'); ?></p>
                </div>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
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
                <div class="relative">
                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                    </svg>
                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                        <option disabled selected value="<?php echo $student->s_year; ?>"><?php echo $student->s_year; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <p><?php echo form_error('s_gender'); ?></p>
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
                <div class="relative">
                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                    </svg><select name="s_stat" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                        <option disabled selected value="<?php echo $student->s_stat; ?>"><?php echo $student->s_stat; ?></option>
                        <option value="Freshman">Freshman</option>
                        <option value="Transferee">Transferee</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

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
                <input value="<?php echo $student->s_email; ?>" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Gender</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->s_gender; ?>" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Date of Birth</p>
                <input value="<?php echo $student->s_bday; ?>" name="s_bday" datepicker onblur="ageCalculator()" id="DOB" type="text" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" placeholder="Please select your birthday">
            </div>
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Age</p>
                <input value="<?php echo $student->s_age; ?>" readonly="readonly" name="s_age" id="age" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                </input>
                <p><?php echo form_error('s_age'); ?></p>
            </div>
            <div class="w-full md:w-1/6 p-3">
            </div>

        </div>
    </div>
</div>

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Ethnicity</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->s_eth; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Religion</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->s_rel; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>





<div class="py-6">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Household Information</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Martial Status</p>
                <input value="<?php echo $student->s_marstat; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Spouse's Name (If applicable)</p>
                <input value="<?php echo $student->s_nspouse; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Not Applicable">
                <p><?php echo form_error('s_first'); ?></p>
            </div>

        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Number of children (If applicable)</p>
                <input value="<?php echo $student->s_nchild; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Not Applicable">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>

<div class="py-6">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Address</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Barangay</p>
                <input value="<?php echo $student->s_brgy; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Municipality</p>
                <input value="<?php echo $student->s_muni; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Not Applicable">
                <p><?php echo form_error('s_first'); ?></p>
            </div>

        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Province</p>
                <input value="<?php echo $student->s_provi; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Not Applicable">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>



<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Nature of Residence</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->s_nor; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>

        </div>
    </div>
</div>

<div class="py-6">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">
                <p class="text-sm text-coolGray-800 font-semibold">Guardian to be contacted incase of emergancy</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Full Name of Guardian</p>
                <input value="<?php echo $student->s_guardn; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?> </p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Contact Number</p>
                <input value="<?php echo $student->s_guardno; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>

        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Address</p>
                <input value="<?php echo $student->s_guardadd; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Relationship with Guardian</p>
                <input value="<?php echo $student->s_guardrel; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
                <p><?php echo form_error('s_first'); ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>