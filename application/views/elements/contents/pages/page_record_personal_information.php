<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">

            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">ID Number</p>
                <p><?php echo $student->s_last; ?></p>
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
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">First Name</p>
                <p><?php echo $student->s_first; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Last Name</p>
                <p><?php echo $student->s_last; ?></p>
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
                <p><?php echo $student->s_mi; ?></p>
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
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Course</p>
                <p><?php echo $student->s_course; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Level Enrolled</p>
                <p><?php echo $student->s_year; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100 py-6 ">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Status</p>
                <p><?php echo $student->s_stat; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100 py-6 ">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Email</p>
                <p><?php echo $student->s_email; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100 py-6 ">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Sex</p>
                <p><?php echo $student->s_gender; ?></p>
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
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Date of Birth</p>
                <p><?php echo $student->s_bday; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Age</p>
                <p><?php echo $student->s_age; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100 py-6 ">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Ethnicity</p>
                <p><?php echo $student->s_eth; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100 py-6 ">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Religion</p>
                <p><?php echo $student->s_rel; ?></p>
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
                <p class="text-sm text-coolGray-400 font-regular">Province</p>
                <input value="<?php echo $student->s_provi; ?>" readonly="readonly" name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Not Applicable">
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
                <p class="text-sm text-coolGray-800 font-semibold">Nature of Residence</p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <input value="<?php echo $student->s_nor; ?>" readonly="readonly" name="stud_id" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="First Name">
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