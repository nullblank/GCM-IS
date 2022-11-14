<div class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-6/6">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-3/6 p-3">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Records of <?php echo $student->s_first; ?>, <?php echo $student->s_last; ?></h2>
                        </div>
                        <div class="w-full md:w-1/6 p-3"></div>
                        <div class="w-full md:w-1/6 p-3">
                        </div>
                        <div class="w-full md:w-1/6 p-3">
                            <a href="<?php echo base_url('DashboardAdmin/StudentRecords');?>" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 pb-6 border-b border-coolGray-100">
                <div class="flex flex-wrap items-center justify-between -m-2">
                    <div class="w-full md:w-auto p-2">
                        <form method="post" action="<?php echo base_url(); ?>student/record/viewrecord/pi">
                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                            <button type="submit" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Personal Information
                            </button>
                        </form>
                    </div>

                    <div class="w-full md:w-auto p-2">
                        <form method="post" action="<?php echo base_url(); ?>student/record/viewrecord/educ">
                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                            <button type="submit" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Educational Background
                            </button>
                        </form>
                    </div>

                    <div class="w-full md:w-auto p-2">
                        <form method="post" action="<?php echo base_url(); ?>student/record/viewrecord/med">
                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Medical History
                            </button>
                        </form>
                    </div>

                    <div class="w-full md:w-auto p-2">
                        <form method="post" action="<?php echo base_url(); ?>student/record/viewrecord/men">
                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                Mental Health
                            </button>
                        </form>
                    </div>
                    <div class="w-full md:w-auto p-2">
                        <form method="post" action="<?php echo base_url(); ?>student/record/viewrecord/sur">
                            <input type='hidden' name='sid' value='<?php echo $student->stud_id; ?>' />
                            <button type="button" data-modal-toggle="" class="flex flex-wrap justify-center w-full px-4 py-3 font-medium text-sm border border-red-500 rounded-md shadow-button">
                                View Survey Answers
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <?php $this->load->view($record_content); ?>


        </div>
    </div>
</div>