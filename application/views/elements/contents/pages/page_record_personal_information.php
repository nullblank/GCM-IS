<!-- CONTENT -->

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">

            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">ID Number</p>
                <p><?php echo $student->stud_id; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3">
                <form method="post" action="<?php echo base_url(); ?>student/record/editrecord/pi">
                    <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                    <button type="submit" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                        Edit
                    </button>
                </form>
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
                <p class="text-sm text-coolGray-800 font-semibold"></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Marital Status</p>
                <p><?php echo $student->s_marstat; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Spouse's Name</p>
                <p><?php echo $student->s_nspouse; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="pb-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3"></div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Number of children</p>
                <p><?php echo $student->s_nchild; ?></p>
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
                <p class="text-sm text-coolGray-400 font-regular">Barangay</p>
                <p><?php echo $student->s_brgy; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Municipality</p>
                <p><?php echo $student->s_muni; ?></p>
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
                <p><?php echo $student->s_provi; ?></p>
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
                <p class="text-sm text-coolGray-400 font-regular">Nature of Residence</p>
                <p><?php echo $student->s_nor; ?></p>
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
                <p class="text-sm text-coolGray-400 font-regular">Full Name of Guardian</p>
                <p><?php echo $student->s_guardn; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Contact Number</p>
                <p><?php echo $student->s_guardno; ?></p>
            </div>

            <div class="w-full md:w-1/6 p-3">
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
                <p><?php echo $student->s_guardadd; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Relationship with Guardian</p>
                <p><?php echo $student->s_guardrel; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>