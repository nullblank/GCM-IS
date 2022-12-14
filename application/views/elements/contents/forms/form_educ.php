<form method="post" action="<?php echo base_url(); ?>student/education/register/<?php echo $stud_id; ?>">
    <input type='hidden' name='s_id' value='<?php echo $stud_id; ?>' />
    <div class="bg-coolGray-50 py-4">
        <div class="container px-4 mx-auto">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Educational Background DEBUG: <?php echo $stud_id; ?></h2>
                            <p class="text-xs text-coolGray-500 font-medium">Please fill out the form and answer honestly.</p>
                        </div>
                        <div class="w-full md:w-auto p-2">
                            <div class="flex flex-wrap justify-between -m-1.5">
                                <div class="w-full md:w-auto p-1.5">
                                    <a href="<?php echo base_url() ?>student/record/toMenu/<?php echo $stud_id; ?>" class="flex flex-wrap justify-center w-full px-4 py-2 font-medium text-sm text-coolGray-500 hover:text-coolGray-600 border border-coolGray-200 hover:border-coolGray-300 bg-white rounded-md shadow-button">
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

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Elementary</p>
                                <p class="text-xs text-coolGray-500 font-medium">
                                    If you dont see your school in the list, please ask a counselor to add it in.
                                </p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select id="e_ename" name="e_ename" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Name of school last attended</option>
                                        <?php foreach ($schools as $s) : ?>
                                            <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p><?php echo form_error('e_ename'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="e_eyear_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <input type="number" placeholder="Year Graduated" name="e_eyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                <p><?php echo form_error('e_eyear'); ?></p>
                            </div>
                        </div>
                        <div id="e_ehonor_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Honors and Awards Recieved</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <textarea name="e_ehonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Junior HS</p>
                                <p class="text-xs text-coolGray-500 font-medium">
                                    If you dont see your school in the list, please ask a counselor to add it in.
                                </p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select id="e_jname" name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Name of school last attended</option>
                                        <?php foreach ($schools as $s) : ?>
                                            <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p><?php echo form_error('e_jname'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="e_jyear_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <input type="number" placeholder="Year Graduated" name="e_jyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                <p><?php echo form_error('e_jyear'); ?></p>
                            </div>
                        </div>
                        <div id="e_jhonor_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Honors and Awards Recieved</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <textarea name="e_jhonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Senior HS</p>
                                <p class="text-xs text-coolGray-500 font-medium">
                                    If you dont see your school in the list, please ask a counselor to add it in.
                                </p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select id="e_sname" name="e_sname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Name of school last attended</option>
                                        <?php foreach ($schools as $s) : ?>
                                            <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p><?php echo form_error('e_sname'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="e_syear_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <input type="number" placeholder="Year Graduated" name="e_syear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                <p><?php echo form_error('e_syear'); ?></p>
                            </div>
                        </div>
                        <div id="e_shonor_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Honors and Awards Recieved</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <textarea name="e_shonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">College</p>
                                <p class="text-xs text-coolGray-500 font-medium">
                                    If you dont see your school in the list, please ask a counselor to add it in.
                                </p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select id="e_cname" name="e_cname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Name of school last attended</option>
                                        <?php foreach ($schools as $s) : ?>
                                            <option value="<?php echo $s->description; ?>"><?php echo $s->description; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <p><?php echo form_error('e_cname'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div id="e_cyear_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <input type="number" placeholder="Year Graduated" name="e_cyear" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                <p><?php echo form_error('e_cyear'); ?></p>
                            </div>
                        </div>
                        <div id="e_chonor_field" class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Honors and Awards Recieved</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <textarea name="e_chonor" class="block w-full h-64 p-6 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none"></textarea>
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

        // Form fields collection.
        const fields = [{
                id: "#e_ename",
                related_fields: ['#e_eyear_field', '#e_ehonor_field']
            },
            {
                id: "#e_jname",
                related_fields: ['#e_jyear_field', '#e_jhonor_field', ]
            },
            {
                id: "#e_sname",
                related_fields: ['#e_syear_field', '#e_shonor_field', ]
            },
            {
                id: "#e_cname",
                related_fields: ['#e_cyear_field', '#e_chonor_field', ]
            }
        ]

        function init() {
            fields.forEach((field) => {
                const {
                    id,
                    related_fields = []
                } = field

                // Hide related fields by default.
                related_fields.forEach((rf) => $(rf).hide())

                $(id).change(function(e) {
                    const val = e.target.value
                    // If parent field is not empty, show all related fields.
                    if (!!val)
                        related_fields.forEach((rf) => $(rf).show())

                })
            })
        }

        init();
    })
</script>