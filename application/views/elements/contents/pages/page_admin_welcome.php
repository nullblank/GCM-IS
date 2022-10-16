<section class="bg-coolGray-50 p-8">
    <div class="flex flex-wrap items-center -m-2">
        <div class="w-full md:w-1/2 p-2">
            <div class="flex flex-wrap -m-2">
                <div class="w-auto p-2">
                    <img src="flex-ui-assets/images/dashboard/pages/flex-ui-blue-circle.svg" alt="">
                </div>
                <div class="flex-1 p-2">
                    <h2 class="mb-2 font-semibold text-black text-3xl">GCM IS</h2>
                    <p class="text-coolGray-500 font-medium">The Guidance and Testing office Information System</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 p-2">

        </div>
    </div>
</section>

<div class="container mx-auto">
    <section class="py-20 xl:py-24 bg-white" style="background-image: url('assets/flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-center text-center -mx-4">
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 text-4xl md:text-5xl font-bold text-blue-600 tracking-tighter"><?php echo $student_number; ?></h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Student Records Registered</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter">&lt;nil&gt;</h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Students with suicidal tendencies</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8 lg:mb-0">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter">&lt;nil&gt;</h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Students without parents</p>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 px-4">
                    <h2 class="mb-2 font-bold text-4xl md:text-5xl text-blue-600 tracking-tighter">&lt;nil&gt;</h2>
                    <p class="text-lg md:text-xl text-coolGray-500 font-medium">Student records processed</p>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="bg-coolGray-50 py-4">
    <div class="container px-4 mx-auto">
        <div class="pt-6 bg-white overflow-hidden border border-coolGray-100 rounded-md shadow-dashboard">
            <h2 class="px-6 mb-4 text-lg text-coolGray-900 font-semibold">Office Staff Accounts</h2>
            <div class="px-6 overflow-x-auto">
                <table class="w-full">
                    <tr class="whitespace-nowrap h-11 bg-coolGray-50 bg-opacity-80">
                        <th class="px-4 font-semibold text-xs text-coolGray-500 uppercase text-left rounded-l-md">
                            <p>NAME</p>
                        </th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">USERNAME</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">ROLE</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">Date CREATED</th>
                        <th class="whitespace-nowrap px-4 font-semibold text-xs text-coolGray-500 uppercase text-center">IS ACTIVE</th>
                        <th></th>
                    </tr>

                    <!--Start item loop-->
                    <?php if ($user_item) : ?>
                        <?php foreach ($user_item as $user_items) : ?>
                            <tr class="h-18 border-b border-coolGray-100">
                                <th class="whitespace-nowrap px-4 bg-white text-left">
                                    <div class="flex items-center -m-2">
                                        <div class="w-auto p-2">
                                            <div class="flex items-center justify-center w-10 h-10 text-base font-medium bg-blue-500 rounded-md">
                                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 10.94C21.9896 10.8481 21.9695 10.7576 21.94 10.67V10.58C21.8919 10.4772 21.8278 10.3827 21.75 10.3L15.75 4.3C15.6673 4.22222 15.5728 4.15808 15.47 4.11H15.37C15.2728 4.058 15.1683 4.02092 15.06 4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V17C2 17.7956 2.31607 18.5587 2.87868 19.1213C3.44129 19.6839 4.20435 20 5 20H19C19.7956 20 20.5587 19.6839 21.1213 19.1213C21.6839 18.5587 22 17.7956 22 17V11C22 11 22 11 22 10.94ZM16 7.41L18.59 10H17C16.7348 10 16.4804 9.89464 16.2929 9.70711C16.1054 9.51957 16 9.26522 16 9V7.41ZM20 17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H5C4.73478 18 4.48043 17.8946 4.29289 17.7071C4.10536 17.5196 4 17.2652 4 17V7C4 6.73478 4.10536 6.48043 4.29289 6.29289C4.48043 6.10536 4.73478 6 5 6H14V9C14 9.79565 14.3161 10.5587 14.8787 11.1213C15.4413 11.6839 16.2044 12 17 12H20V17ZM7 12H11C11.2652 12 11.5196 11.8946 11.7071 11.7071C11.8946 11.5196 12 11.2652 12 11C12 10.7348 11.8946 10.4804 11.7071 10.2929C11.5196 10.1054 11.2652 10 11 10H7C6.73478 10 6.48043 10.1054 6.29289 10.2929C6.10536 10.4804 6 10.7348 6 11C6 11.2652 6.10536 11.5196 6.29289 11.7071C6.48043 11.8946 6.73478 12 7 12ZM7 14C6.73478 14 6.48043 14.1054 6.29289 14.2929C6.10536 14.4804 6 14.7348 6 15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16H17C17.2652 16 17.5196 15.8946 17.7071 15.7071C17.8946 15.5196 18 15.2652 18 15C18 14.7348 17.8946 14.4804 17.7071 14.2929C17.5196 14.1054 17.2652 14 17 14H7Z" fill="#EBF3FE"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-auto p-2">
                                            <p class="text-sm font-medium text-coolGray-800"><?php echo $user_items->user_name; ?></p>
                                        </div>
                                    </div>
                                </th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_account; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_role; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_created; ?></th>
                                <th class="whitespace-nowrap px-4 bg-white text-sm font-medium text-coolGray-800 text-center"><?php echo $user_items->user_isactive; ?></th>
                                <th class="whitespace-nowrap px-4">
                                <a href="<?php echo base_url();?>user/profile/editUser/<?php echo $user_items->user_id;?>" class="flex flex-wrap justify-center w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white border border-blue-500 rounded-md shadow-button">
                                    <p>Edit</p>
                                </a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p style="color:red;">No Student Record Found.</p>
                    <?php endif ?>
                    <!--End of item-->



                </table>
            </div>
            <div class="flex flex-wrap items-center justify-between w-full lg:w-1/2 py-4 px-6 -m-2">
                <div class="w-auto p-2">
                    <p class="text-sm font-semibold text-coolGray-500">Showing X to X of X results</p>
                </div>
                <div class="w-auto p-2">
                    <div class="flex flex-wrap items-center">
                        <div class="w-auto mr-3">
                            <div class="relative flex items-center">
                                <svg class="absolute right-4 top-1/2 transform -translate-y-1/2" width="10" height="6" viewbox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.16667 0.641619C9.01053 0.48641 8.79932 0.399292 8.57917 0.399292C8.35901 0.399292 8.1478 0.48641 7.99167 0.641619L5 3.59162L2.05 0.641619C1.89386 0.48641 1.68266 0.399292 1.4625 0.399292C1.24235 0.399292 1.03114 0.48641 0.875 0.641619C0.796893 0.719088 0.734898 0.811256 0.692591 0.912805C0.650284 1.01435 0.628502 1.12328 0.628502 1.23329C0.628502 1.3433 0.650284 1.45222 0.692591 1.55377C0.734898 1.65532 0.796893 1.74748 0.875 1.82495L4.40833 5.35829C4.4858 5.43639 4.57797 5.49839 4.67952 5.54069C4.78107 5.583 4.88999 5.60478 5 5.60478C5.11001 5.60478 5.21893 5.583 5.32048 5.54069C5.42203 5.49839 5.5142 5.43639 5.59167 5.35829L9.16667 1.82495C9.24477 1.74748 9.30677 1.65532 9.34908 1.55377C9.39138 1.45222 9.41317 1.3433 9.41317 1.23329C9.41317 1.12328 9.39138 1.01435 9.34908 0.912805C9.30677 0.811256 9.24477 0.719088 9.16667 0.641619Z" fill="#556987"></path>
                                </svg>
                                <select class="appearance-none py-1 px-4 w-16 text-coolGray-500 text-sm font-medium bg-white border outline-none border-coolGray-200 focus:border-blue-500 rounded-md">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-auto">
                            <p class="text-sm text-coolGray-500 font-medium">per page</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</section>
</div>