<div class="">
    <div class="container px-4 mx-auto ">
        <div class="p-6 h-full">
            <!-- Header -->
            <div class="pb-6 border-b border-coolGray-100">
                <div class="flex flex-wrap items-center justify-between -m-2">
                    <div class="w-full md:w-auto p-2">
                        <h2 class="text-coolGray-900 text-lg font-semibold"></h2>
                        <p class="text-xs text-coolGray-500 font-medium"></p>
                    </div>
                    <div class="w-full md:w-auto p-2">
                        <div class="flex flex-wrap justify-between -m-1.5">
                            <div class="w-full md:w-auto p-1.5">
                                <button class="flex flex-wrap justify-center w-full px-4 py-2 bg-red-500 hover:bg-red-600 font-medium text-sm text-white border border-red-500 rounded-md shadow-button" type="submit">
                                    <p>Delete</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header -->
            <!-- contents -->
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">For the past TWO WEEKS have you thought of harming yourself with the intention to die?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php if($men->mt_die == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                            <p><?php echo form_error('men_die'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Psychological Statements</h2>
                            <p class="text-xs text-coolGray-500 font-medium">We're here for you. Please read the following psychological statements and rate how much it affects you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800">From 0 - 10, How often have you had thoughts about suicide for the past two weeks?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_q1.'/10';?>
                            </div>
                            <p><?php echo form_error('men_q1'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800">From 0 - 10, How much control have you had over these thoughts of suicide the past two weeks?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_q2.'/10';?>
                            </div>
                            <p><?php echo form_error('men_q2'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800">From 0 - 10, How close have you come to making a suicide attempt for the past two weeks?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_q3.'/10';?>
                            </div>
                            <p><?php echo form_error('men_q3'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800">From 0 - 10, To what extent have you felt tormented or distress by thoughts about suicide for the past two weeks?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_q4.'/10';?>
                            </div>
                            <p><?php echo form_error('men_q4'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800">From 0 - 10, How much have the thoughts about suicide interfered/distracted you with your ability to carry out daily activities, such as academics, household tasks or personal activities for the past two weeks?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_q5.'/10';?>
                            </div>
                            <p><?php echo form_error('men_q5'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-2/3 p-3">
                            <p class="text-sm text-coolGray-800 text-s font-semibold">Have you ever hurt yourself phisically but with no intention to die?</p>
                        </div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php if($men->mt_diein == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                            <p><?php echo form_error('men_diein'); ?></p>
                        </div>
                    </div>

                </div>
            </div>








            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Psychological Statements</h2>
                            <p class="text-xs text-coolGray-500 font-medium">We're here for you. You may answer in tagalog</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800">Kindly specify how did you hurt yourself physically?</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <?php echo $men->mt_hurtdesc;?>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800">Kindly specify the reason/s why you are Hurt/Hurting yourself physically</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <?php echo $men->mt_hurtres;?>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800">Kindly specify how old are you when you FIRST intentionally hurt yourself but with NO intention to die</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <?php echo $men->mt_hurtfirst;?>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 text-s">When was the last time you hurt yourself phisically but with NO intention to die</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_hurtlast;?>
                            </div>
                            <p><?php echo form_error('men_q1'); ?></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 text-s">Approximately, how many total occasions/times have you intentionally hurt yourself physically but with NO intention to die:</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $men->mt_hurtquan;?>
                            </div>
                            <p><?php echo form_error('men_q1'); ?></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800">Who have you talked with about hurting yourself physically but with NO intetion to die. (Specify all; Mother, Sister, Teacher, Etc..)</p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <?php echo $men->mt_hurttalk;?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>