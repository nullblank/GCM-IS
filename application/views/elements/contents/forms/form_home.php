<form method="post" action="<?php echo base_url(); ?>student/education/register/<?php echo $stud_id; ?>">
    <input type='hidden' name='s_id' value='<?php echo $stud_id; ?>' />
    <div class="bg-coolGray-50 py-4">
        <div class="container px-4 mx-auto">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Home and Family Background DEBUG: <?php echo $stud_id; ?></h2>
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
                                <p class="text-sm text-coolGray-800 font-semibold">Father</p>
                            </div>
                            <div class="w-full md:w-5/12 p-3">
                                <input name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-3/12 p-3">
                                <input name="s_last" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="number" placeholder="Age">
                                <p><?php echo form_error('s_last'); ?></p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Status</option>
                                        <option value="Living">Living</option>
                                        <option value="Deceased">Deceased</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-2/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Educational Attainment</option>
                                        <?php foreach ($eth as $e) : ?>
                                            <option value="<?php echo $e->ethnicity; ?>"><?php echo $e->ethnicity; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-2/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Occupation</option>
                                        <?php foreach ($eth as $e) : ?>
                                            <option value="<?php echo $e->ethnicity; ?>"><?php echo $e->ethnicity; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:w-5/12 p-3">
                                <input name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Work Address">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-3/12 p-3">
                                <input name="s_last" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="number" placeholder="Contact No.">
                                <p><?php echo form_error('s_last'); ?></p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Words/Phrases that describe your father.</p>
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
                                <p class="text-sm text-coolGray-800 font-semibold">Mother</p>
                            </div>
                            <div class="w-full md:w-5/12 p-3">
                                <input name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Name">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-3/12 p-3">
                                <input name="s_last" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="number" placeholder="Age">
                                <p><?php echo form_error('s_last'); ?></p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-1/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Status</option>
                                        <option value="Living">Living</option>
                                        <option value="Deceased">Deceased</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-2/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Educational Attainment</option>
                                        <?php foreach ($eth as $e) : ?>
                                            <option value="<?php echo $e->ethnicity; ?>"><?php echo $e->ethnicity; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3"></div>
                            <div class="w-full md:w-2/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg>
                                    <select name="s_year" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Occupation</option>
                                        <?php foreach ($eth as $e) : ?>
                                            <option value="<?php echo $e->ethnicity; ?>"><?php echo $e->ethnicity; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:w-5/12 p-3">
                                <input name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Work Address">
                                <p><?php echo form_error('s_first'); ?></p>
                            </div>
                            <div class="w-full md:w-3/12 p-3">
                                <input name="s_last" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="number" placeholder="Contact No.">
                                <p><?php echo form_error('s_last'); ?></p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Words/Phrases that describe your mother.</p>
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
                                <p class="text-sm text-coolGray-800 font-semibold">Are you a child of an OFW parent/s?</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">If Yes, who is working abroad?</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Father">Father</option>
                                        <option value="Both">Both</option>
                                        <option value="Both">Not Applicable</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <input name="s_first" class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input" type="text" placeholder="Parent/Guardian Email">
                                <p><?php echo form_error('s_first'); ?></p>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Please select an option</option>
                                        <option value="Married (Church) & Staying Togther">Married (Church) & Staying Together</option>
                                        <option value="Married (Civil) & Staying Together">Married (Civil) & Staying Together</option>
                                        <option value="Single Parent">Single Parent</option>
                                        <option value="Not Married but Living Together">Not Married but Living Together</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Widow/Widower">Widow/Widower</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Socio-Economic Status of your parents</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Please select an option</option>
                                        <option value="Income is little, sometimes not enough for my family">Income is little, sometimes not enough for my family</option>
                                        <option value="Income is sufficient only for my family needs, can hardly save">Income is sufficient only for my family needs, can hardly save</option>
                                        <option value="Income is very sufficient for my family needs, can save">Income is very sufficient for my family needs, can save</option>
                                        <option value="I have much money and properties that we need, can buy whatever we like.">I have much money and properties that we need, can buy whatever we like</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Your Birth Order</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Please select an option</option>
                                        <option value="Eldest">Eldest</option>
                                        <option value="Middle">Middle</option>
                                        <option value="Youngest">Youngest</option>
                                        <option value="Only Child">Only Child</option>
                                    </select>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">If Yes, what is your relationship to them?</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Father">Father</option>
                                        <option value="Male Older Sibling">Male Older Sibling</option>
                                        <option value="Male Younger Sibling">Male Younger Sibling</option>
                                        <option value="Female Older Sibling">Female Older Sibling</option>
                                        <option value="Female Younger Sibling">Female Younger Sibling</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Grandmother">Grandmother</option>
                                        <option value="Grandfather">Grandfather</option>
                                    </select>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">If Yes, what is your relationship to them?</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Father">Father</option>
                                        <option value="Male Older Sibling">Male Older Sibling</option>
                                        <option value="Male Younger Sibling">Male Younger Sibling</option>
                                        <option value="Female Older Sibling">Female Older Sibling</option>
                                        <option value="Female Younger Sibling">Female Younger Sibling</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Grandmother">Grandmother</option>
                                        <option value="Grandfather">Grandfather</option>
                                    </select>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class=""></p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="e_jname" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">If Yes, what is your relationship to them?</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Father">Father</option>
                                        <option value="Male Older Sibling">Male Older Sibling</option>
                                        <option value="Male Younger Sibling">Male Younger Sibling</option>
                                        <option value="Female Older Sibling">Female Older Sibling</option>
                                        <option value="Female Younger Sibling">Female Younger Sibling</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Aunt">Aunt</option>
                                        <option value="Grandmother">Grandmother</option>
                                        <option value="Grandfather">Grandfather</option>
                                    </select>
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
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Father</span>
                                        </label>
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Mother</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-3/3 p-3">
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Brother/Sister</span>
                                        </label>
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Uncle/Aunt</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-3/3 p-3">
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Myself</span>
                                        </label>
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Grandparents</span>
                                        </label>
                                    </div>
                                    <div class="w-full md:w-3/3 p-3">
                                        <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                            <input type="checkbox" name="radio-name" value="option 1">
                                            <span class="ml-1">Not applicable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>