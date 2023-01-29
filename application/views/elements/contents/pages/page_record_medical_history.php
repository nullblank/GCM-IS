<form method="post" action="<?php echo base_url(); ?>student/medical/register/<?//php echo $stud_id; ?>">
    <input type='hidden' name='s_id' value='<?php echo $stud_id; ?>' />
    <div class="">
        <div class="container px-4 mx-auto ">
            <div class="p-6 h-full">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold"> </h2>
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
                                <p class="text-sm text-coolGray-800 font-semibold">Has the student been CONFINED in the Hospital?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <p class="text-sm text-coolGray-800 font-semibold"><?php if($med->m_conf == 1){echo 'Yes';}else{echo 'No';};?></p>
                                </div>
                                <p><?php echo form_error('m_conf'); ?></p>
                            </div>
                        </div>
                        <div id="m_confdesc_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">Reasons why the student was confined</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <?php echo $med->m_confdesc;?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Has the student been DIAGNOSED with any medical illness or conditions by a MEDICAL DOCTOR?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <?php if($med->m_medill == 1){echo 'Yes';}else{echo 'No';};?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="m_medcon_field" class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">The following are all that apply:</p>
                            </div>

                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon1){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Heart Failure</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon2){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Asthma</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon3){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">HIV/AIDS Disease</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon4){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Sleeping Problem</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon5){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Allergies</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon6){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">UTI</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon7){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Hepatitis</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon8){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Lung Conditions</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon9){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Depression</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon10){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Hypertension</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon11){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Hearing Loss</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon12){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Kidney Problem</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon13){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Diabetes</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon14){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Covid-19</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon15){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Speech Problem</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon16){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Visual Problem</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon17){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Anxiety</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon18){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Anemia</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <?php if($med->m_medcon19){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Skin</span>
                                    </label>
                                    ';
                                }else{};?>
                                <?php if($med->m_medcon20){
                                    echo '
                                    <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                        <span class="ml-1">Cancer</span>
                                    </label>
                                    ';
                                }else{};?>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="m_medconO_field" class="py-6 border-b">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">Others</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <span class="ml-1"><?php echo $med->m_medconO;?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="m_medwhen_field" class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, when have you been diagnosed with that illness, sickness, or medical conditions?</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <span class="ml-1"><?php echo $med->m_medwhen;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Are you currently taking any medication?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <?php if($med->m_presmed == 1){echo 'Yes';}else{echo 'No';};?>
                                </div>
                            </div>
                        </div>
                        <div id="m_presmeddesc_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the sickness/medical concern that your medication is for:</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <span class="ml-1"><?php echo $med->m_presmeddesc;?></span>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Have you taken any Medication before in the past?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <?php if($med->m_pastmed == 1){echo 'Yes';}else{echo 'No';};?>
                                </div>
                            </div>
                        </div>
                        <div id="m_pastmeddesc_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the sickness/medical concern that your medication was for:</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <span class="ml-1"><?php echo $med->m_pastmeddesc;?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Do you have any Disabilities?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <?php if($med->m_dis == 1){echo 'Yes';}else{echo 'No';};?>
                                </div>
                            </div>
                        </div>
                        <div id="m_disdesc_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify your Disability</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                            <span class="ml-1"><?php echo $med->m_disdesc;?></span>
                            </div>
                        </div>
                        <div id="m_disass_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, has your Disability been diagnosed or assessed by a medical proffessional?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <?php if($med->m_disass == 1){echo 'Yes';}else{echo 'No';};?>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the Month and Year:</p>
                            </div>
                            <div id="m_dismonth_field" class="w-full md:w-1/3 p-3">
                                <div class="relative">
                                    <span class="ml-1"><?php echo $med->m_dismonth.' '.$med->m_disyear;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>


<script type="text/javascript">
    $(document).ready(function() {
        function init() {
            const fields = [{
                    id: "#m_conf",
                    related_fields: [
                        "#m_confdesc_field"
                    ]
                },
                {
                    id: "#m_medill",
                    related_fields: [
                        "#m_medcon_field", "#m_medconO_field", "#m_medwhen_field"
                    ]
                },
                {
                    id: "#m_presmed",
                    related_fields: [
                        "#m_presmeddesc_field"
                    ]
                },
                {
                    id: "#m_pastmed",
                    related_fields: [
                        "#m_pastmeddesc_field"
                    ]
                },
                {
                    id: '#m_dis',
                    related_fields: [
                        "#m_disdesc_field", "#m_disass_field", "#m_dismonth_field", "#m_disyear_field"
                    ]
                }
            ]


            fields.forEach((field) => {
                const {
                    id,
                    related_fields
                } = field

                // Hide related fields initially.
                related_fields.forEach((rf) => $(rf).hide())

                // Show related fields if answer is "Yes".
                $(id).change((e) => {
                    const val = e.target.value
                    if (val === '1')
                        related_fields.forEach((rf) => $(rf).show())
                    else
                        related_fields.forEach((rf) => $(rf).hide())

                })
            })

        }

        init();
    })
</script>