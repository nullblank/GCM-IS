<form method="post" action="<?php echo base_url(); ?>student/record/register/<?php echo $stud_id; ?>">
    <div class="bg-coolGray-50 py-4">
        <div class="container px-4 mx-auto">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Personal information DEBUG: <?php echo $stud_id; ?></h2>
                            <p class="text-xs text-coolGray-500 font-medium">Please fill out the form and answer honestly.</p>
                        </div>
                        <div class="w-full md:w-auto p-2">
                            <div class="flex flex-wrap justify-between -m-1.5">
                                <div class="w-full md:w-auto p-1.5">
                                    <a href="<?php echo base_url() ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm text-coolGray-500 hover:text-coolGray-600 border border-coolGray-200 hover:border-coolGray-300 bg-white rounded-md shadow-button">
                                        <p>Cancel</p>
                                    </a>
                                </div>
                                <div class="w-full md:w-auto p-1.5">
                                    <button class="flex flex-wrap justify-center w-full px-4 py-2 bg-green-500 hover:bg-green-600 font-medium text-sm text-white border border-green-500 rounded-md shadow-button" type="submit">
                                        <p>Save</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>