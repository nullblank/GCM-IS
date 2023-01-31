<div class="">
    <div class="container px-4 mx-auto">
        <div class="p-6 h-full">

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

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Father</p>
                        </div>
                        <div class="w-full md:w-5/12 p-3">
                            <?php echo $home->h_fname;?>
                            <p><?php echo form_error('h_fname'); ?></p>
                        </div>
                        <div class="w-full md:w-3/12 p-3">
                            <?php echo $home->h_fage.' years old.';?>
                            <p><?php echo form_error('h_fage'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3 text-coolGray-300">Status</div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_fstat;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3 text-coolGray-300">Educational Attainment</div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_feduc;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3 text-coolGray-300">Occupation</div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_fjob;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-coolGray-300">Work address and contact</p>
                        </div>
                        <div class="w-full md:w-5/12 p-3">
                            <?php echo $home->h_faddr;?>
                            <p><?php echo form_error('h_faddr'); ?></p>
                        </div>
                        <div class="w-full md:w-3/12 p-3">
                            <?php echo $home->h_fno;?>
                            <p><?php echo form_error('h_fno'); ?></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Words/Phrases that describe your father.</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <?php echo $home->h_fdesc;?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Mother</p>
                        </div>
                        <div class="w-full md:w-5/12 p-3">
                        <?php echo $home->h_mname;?>
                            <p><?php echo form_error('h_mname'); ?></p>
                        </div>
                        <div class="w-full md:w-3/12 p-3">
                        <?php echo $home->h_mage.' years old.';?>
                            <p><?php echo form_error('h_mage'); ?></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3"></div>
                        <div class="w-full md:w-1/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_mstat;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3"></div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_meduc;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3"></div>
                        <div class="w-full md:w-2/3 p-3">
                            <div class="relative">
                                <?php echo $home->h_mjob;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class=""></p>
                        </div>
                        <div class="w-full md:w-5/12 p-3">
                            <?php echo $home->h_maddr;?>
                            <p><?php echo form_error('h_maddr'); ?></p>
                        </div>
                        <div class="w-full md:w-3/12 p-3">
                        <?php echo $home->h_mno;?>
                            <p><?php echo form_error('h_mno'); ?></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Words/Phrases that describe your mother.</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                        <?php echo $home->h_mdesc;?>
                    </div>
                </div>
            </div>


            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Are you a child of an OFW parent/s?</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php if($home->h_ofwchild == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                        </div>

                        <div class="w-full md:flex-1 p-3" id="h_ofwrel2" name="h_ofwrel2">
                            <div class="relative">
                                <?php echo $home->h_ofwrel;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class=""></p>
                        </div>
                        <div class="w-full md:w-2/3 p-3">
                            <?php echo $home->h_ofwemail;?>
                            <p><?php echo form_error('h_ofwemail'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Parent's Marital Status</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_pmarstat;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Socio-Economic Status of your parents</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_pecostat;?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Your Birth Order</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_pbirthorder;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Is there a history of Depression (diagnosed) in your family?</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php if($home->h_kmsdep == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class=""></p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_kmsdeprel;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Is there a history of Completed Suicide (died bec. of suicide) in your family?</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php if($home->h_kms == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class=""></p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_kmsrel;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Is there any history of Attempted Suicide (but survived) in your family?</p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php if($home->h_kmsjk == 1){echo 'Yes';}else{echo 'No';};?>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class=""></p>
                        </div>
                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <?php echo $home->h_kmsjkrel;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-coolGray-100">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full md:w-1/3 p-3">
                            <p class="text-sm text-coolGray-800 font-semibold">Who among your family members are alcoholic and/smoking? (Pls. check all that applies)</p>
                        </div>

                        <div class="w-full md:flex-1 p-3">
                            <div class="relative">
                                <div class="w-full md:w-3/3 p-3">
                                    <?php if($home->h_kmsdrinkrel_f){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Father</span>
                                        </label>
                                        ';
                                    }else{};?>
                                    <?php if($home->h_kmsdrinkrel_m){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Mother</span>
                                        </label>
                                        ';
                                    }else{};?>
                                </div>
                                <div class="w-full md:w-3/3 p-3">
                                    <?php if($home->h_kmsdrinkrel_bs){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Brother/Sister</span>
                                        </label>
                                        ';
                                    }else{};?>
                                    <?php if($home->h_kmsdrinkrel_ua){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Uncle/Aunt</span>
                                        </label>
                                        ';
                                    }else{};?>
                                </div>
                                <div class="w-full md:w-3/3 p-3">
                                    <?php if($home->h_kmsdrinkrel_me){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Myself</span>
                                        </label>
                                        ';
                                    }else{};?>
                                    <?php if($home->h_kmsdrinkrel_g){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Grandparents</span>
                                        </label>
                                        ';
                                    }else{};?>
                                </div>
                                <div class="w-full md:w-3/3 p-3">
                                    <?php if($home->h_kmsdrinkrel_na){
                                        echo '
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <span class="ml-1">Not Applicable</span>
                                        </label>
                                        ';
                                    }else{};?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- <script type="text/javascript">
    $(document).ready(function() {

        function change_ofw(type) {
            if (type == 1) {
                $("#h_ofwemail").show();
                $("#h_ofwrel2").show();
            } else {
                $("#h_ofwemail").hide();
                $("#h_ofwrel2").hide();
            }
        }

        function change_dep(type) {
            if (type == 1) {
                $("#h_kmsdeprel").show();
            } else {
                $("#h_kmsdeprel").hide();
            }

        }

        function change_sui(type) {
            if (type == 1) {
                $("#h_kmsrel").show();
            } else {
                $("#h_kmsrel").hide();
            }

        }

        $("#h_ofwchild").change((e) => change_ofw(e.target.value))
        $("#h_kmsdep").change((e) => change_dep(e.target.value))
        $("#h_kms").change((e) => change_sui(e.target.value))
    })
</script> -->