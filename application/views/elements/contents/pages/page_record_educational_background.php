<!-- CONTENT -->

<div class="py-6 border-b border-coolGray-100">
    <div class="w-full md:w-6/6">
        <div class="flex flex-wrap -m-3">
            <div class="w-full md:w-1/6 p-3">

            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">ID Number</p>
                <p><?php echo $educ->stud_id; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3">
                <form method="post" action="<?php echo base_url(); ?>student/record/editrecord/educ">
                    <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                    <button type="submit" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-blue-500 rounded-md shadow-button">
                        Edit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Elementary -->
<div class="py-6">
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
                <p><?php echo $educ->e_ename; ?></p>
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
                <p><?php echo $educ->e_eyear; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                <p><?php echo $educ->e_ehonor; ?></p>
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
                <p><?php echo $educ->e_jname; ?></p>
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
                <p><?php echo $educ->e_jyear; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                <p><?php echo $educ->e_jhonor; ?></p>
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
                <p><?php echo $educ->e_sname; ?></p>
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
                <p><?php echo $educ->e_syear; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                <p><?php echo $educ->e_shonor; ?></p>
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
                <p><?php echo $educ->e_cname; ?></p>
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
                <p><?php echo $educ->e_cyear; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3">
                <p class="text-sm text-coolGray-400 font-regular">Honors Recieved</p>
                <p><?php echo $educ->e_chonor; ?></p>
            </div>
            <div class="w-full md:w-2/6 p-3"></div>
            <div class="w-full md:w-1/6 p-3"></div>
        </div>
    </div>
</div>