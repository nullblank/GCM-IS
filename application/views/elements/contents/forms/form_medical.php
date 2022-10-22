<form method="post" action="<?php echo base_url(); ?>student/medical/register/<?php echo $stud_id; ?>">
    <input type='hidden' name='s_id' value='<?php echo $stud_id; ?>' />
    <div class="bg-coolGray-50 py-4 border border-coolGray-200 rounded-lg">
        <div class="container px-4 mx-auto ">
            <div class="p-6 h-full border border-coolGray-100 overflow-hidden bg-white rounded-md shadow-dashboard">

                <div class="pb-6 border-b border-coolGray-100">
                    <div class="flex flex-wrap items-center justify-between -m-2">
                        <div class="w-full md:w-auto p-2">
                            <h2 class="text-coolGray-900 text-lg font-semibold">Medical History DEBUG: <?php echo $stud_id; ?></h2>
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
                                <p class="text-sm text-coolGray-800 font-semibold">Have you been CONFINED in the Hospital?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_conf" id="m_conf" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the reason/s (sickness/illness) why you were confined.</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <textarea  name="m_confdesc" id="m_confdesc" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Have you been DIAGNOSED with any medical illness or conditions by a MEDICAL DOCTOR?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_medill" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly check all that apply</p>
                            </div>

                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon1" name="m_medcon1" value="1">
                                    <span class="ml-1">Heart Failure</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon2" name="m_medcon2" value="1">
                                    <span class="ml-1">Asthma</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon3" name="m_medcon3" value="1">
                                    <span class="ml-1">HIV/AIDS Disease</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon4" name="m_medcon4" value="1">
                                    <span class="ml-1">Sleeping Problem</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon5" name="m_medcon5" value="1">
                                    <span class="ml-1">Allergies</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon6" name="m_medcon6" value="1">
                                    <span class="ml-1">UTI</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon7" name="m_medcon7" value="1">
                                    <span class="ml-1">Hepatitis</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon8" name="m_medcon8" value="1">
                                    <span class="ml-1">Lung Conditions</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon9" name="m_medcon9" value="1">
                                    <span class="ml-1">Depression</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon10" name="m_medcon10" value="1">
                                    <span class="ml-1">Hypertension</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon11" name="m_medcon11" value="1">
                                    <span class="ml-1">Hearing Loss</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon12" name="m_medcon12" value="1">
                                    <span class="ml-1">Kidney Problem</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon13" name="m_medcon13" value="1">
                                    <span class="ml-1">Diabetes</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon14" name="m_medcon14" value="1">
                                    <span class="ml-1">Covid-19</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon15" name="m_medcon15" value="1">
                                    <span class="ml-1">Speech Problem</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon16" name="m_medcon16" value="1">
                                    <span class="ml-1">Visual Problem</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon17" name="m_medcon17" value="1">
                                    <span class="ml-1">Anxiety</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon18" name="m_medcon18" value="1">
                                    <span class="ml-1">Anemia</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                            </div>
                            <div class="w-full md:w-2/3 p-3 mt-3">
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon19" name="m_medcon19" value="1">
                                    <span class="ml-1">Skin</span>
                                </label>
                                <label class="w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input">
                                    <input type="checkbox" id="m_medcon20" name="m_medcon20" value="1">
                                    <span class="ml-1">Cancer</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">Others</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <textarea name="m_medconO" id="m_medconO" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-6 border-b border-coolGray-100">
                    <div class="w-full md:w-9/12">
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, when have you been diagnosed with that illness, sickness, or medical conditions?</p>
                            </div>
                            <div class="w-full md:flex-1 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_medwhen" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Please choose an option</option>
                                        <option value="When I was still a baby">When I was still a baby</option>
                                        <option value="When I was in my Preparatory Education">When I was in my Preparatory Education</option>
                                        <option value="When I was in my Elementary Years">When I was in my Elementary Years</option>
                                        <option value="When I was in my Junior High School">When I was in my Junior High School</option>
                                        <option value="When I was in my Senior High School">When I was in my Senior High School</option>
                                        <option value="More or less a month ago">More or less a month ago</option>
                                    </select>
                                    <p><?php echo form_error('e_ename'); ?></p>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_presmed" id="m_presmed" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the sickness/medical concern that your medication is for:</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <textarea name="m_presmeddesc" id="m_presmeddesc" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800 font-semibold">Have you taken any Medication before in the past?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_pastmed" id="m_pastmed" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the sickness/medical concern that your medication was for:</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <textarea name="m_pastmeddesc" id="m_pastmeddesc" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..."></textarea>
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
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_dis" id="m_dis" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify your Disability</p>
                            </div>
                            <div class="w-full md:w-2/3 p-3">
                                <textarea name="m_disdesc" id="m_disdesc" class="h-64 w-full px-4 py-2.5 text-base text-coolGray-900 font-normal outline-none focus:border-green-500 border border-coolGray-200 rounded-lg shadow-input resize-none" type="text" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, has your Disability been diagnosed or assessed by a medical proffessional?</p>
                            </div>
                            <div class="w-full md:w-1/6 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select name="m_disass" id="m_disass" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option selected value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full md:w-1/3 p-3">
                                <p class="text-sm text-coolGray-800">If Yes, kindly specify the Month and Year:</p>
                            </div>
                            <div class="w-full md:w-1/3 p-3">
                                <div class="relative">
                                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.3333 6.1133C11.2084 5.98913 11.0395 5.91943 10.8633 5.91943C10.6872 5.91943 10.5182 5.98913 10.3933 6.1133L8.00001 8.47329L5.64001 6.1133C5.5151 5.98913 5.34613 5.91943 5.17001 5.91943C4.99388 5.91943 4.82491 5.98913 4.70001 6.1133C4.63752 6.17527 4.58792 6.249 4.55408 6.33024C4.52023 6.41148 4.50281 6.49862 4.50281 6.58663C4.50281 6.67464 4.52023 6.76177 4.55408 6.84301C4.58792 6.92425 4.63752 6.99799 4.70001 7.05996L7.52667 9.88663C7.58865 9.94911 7.66238 9.99871 7.74362 10.0326C7.82486 10.0664 7.912 10.0838 8.00001 10.0838C8.08801 10.0838 8.17515 10.0664 8.25639 10.0326C8.33763 9.99871 8.41136 9.94911 8.47334 9.88663L11.3333 7.05996C11.3958 6.99799 11.4454 6.92425 11.4793 6.84301C11.5131 6.76177 11.5305 6.67464 11.5305 6.58663C11.5305 6.49862 11.5131 6.41148 11.4793 6.33024C11.4454 6.249 11.3958 6.17527 11.3333 6.1133Z" fill="#8896AB"></path>
                                    </svg><select id="m_dismonth" name="m_dismonth" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input">
                                        <option disabled selected value="">Month</option>
                                        <option value="January">January</option>
                                        <option value="Febuary">Febuary</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    <p><?php echo form_error('e_ename'); ?></p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 p-3">
                                <div class="relative">
                                    <input min="1995" minlength="4" type="number" placeholder="Year" id="m_disyear" name="m_disyear" class="appearance-none w-full py-2.5 px-4 text-coolGray-900 text-base font-normal bg-white border outline-none border-coolGray-200 focus:border-green-500 rounded-lg shadow-input"></input>
                                    <p><?php echo form_error('e_ename'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>