<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Welcome <?php echo $user->user_name; ?>!</title>
    <style>
    .scrollbar::-webkit-scrollbar {
        width: 20px;
        height: 20px;
    }

    .scrollbar::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #f7f4ed;
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background: #e0cbcb;
        border-radius: 100vh;
        border: 3px solid #f6f7ed;
    }

    .scrollbar::-webkit-scrollbar-thumb:hover {
        background: #c0a0b9;
    }

    .ucfirst {
        text-transform: lowercase;
        color: blue;
    }

    .ucfirst:first-letter {
        text-transform: capitalize;
    }
    </style>
</head>

<body class="flex bg-gray-100">
    <div class="flex bg-gray-300 h-auto w-screen" x-data="{ isSidebarExpanded: false }">
        <?php $this->load->view('admin/layouts/includes/sidebar');?>
        <!--LOAD VIEW SIDEBAR-->
        <div class="flex-1 flex flex-col">
            <?php $this->load->view('admin/layouts/includes/head');?>
            <!--LOAD VIEW HEAD-->
            <!-- MAIN CONTENT -->


            <main class="p-6 sm:p-10 space-y-6 bg-slate-100">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Admin Dashboard</h1>
                        <h2 class="text-gray-600 ml-0.5">Welcome back <?php echo $user->user_name; ?></h2>
                    </div>
                </div>
                <!-- SECTION FOR TABLES -->
                <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
                    <div
                        class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg border-t-4 border-t-blue-600">
                        <div class="px-6 py-5 font-semibold border-b border-gray-100">
                            <li class="flex items-center">
                                <span class="text-gray-600">STUDENTS</span>
                                <div class="flex ml-auto">
                                    <button
                                        class="modal-open-student ml-auto w-auto bg-blue-600 text-white p-2 rounded font-semibold hover:bg-blue-500"
                                        type="submit">Add Record</button>



                                    <!--Student add record modal-->
                                <div
                                    class="modal opacity-0 transition-opacity ease-in duration-100 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                    <div class="modal-overlay-student absolute w-full h-full bg-gray-900 opacity-50">
                                    </div>

                                    <div
                                        class="modal-container-student bg-white w-9/12 h-5/6 mx-auto rounded-xl shadow-lg z-50 overflow-auto">
                                        <!-- Add margin if you want to see some of the overlay behind the modal-->
                                        <div class="modal-content-student py-4 text-left px-6">
                                            <!-- Modal Title-->
                                            <div class="flex pb-3">

                                                <div class="modal-close-student cursor-pointer pl-5">
                                                    <svg class="fill-current text-black"
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>

                                            <!--Model Body-->
                                            <main class="">
                                                <section class="bg-cream-lighter p-4 shadow">
                                                    <div class="md:flex">
                                                        <h2
                                                            class="md:w-1/3 uppercase tracking-wide text-sm sm:text-lg mb-6 p-1">
                                                            Add New Counselor Record</h2>
                                                    </div>
                                                    <form>
                                                        <div class="md:flex mb-8">
                                                            <div class="md:w-1/3">
                                                                <legend class="uppercase tracking-wide text-sm">Personal
                                                                    Information
                                                                </legend>
                                                                <p class="text-xs font-light text-red">This entire
                                                                    section is required.</p>
                                                            </div>
                                                            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                                                                <div class="md:flex mb-4">
                                                                    <div class="md:flex-1 md:pr-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-xs font-bold">First
                                                                            Name</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="fname"
                                                                            placeholder="First Name">
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Last
                                                                            Name</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="lname"
                                                                            placeholder="Last Name">
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Middle
                                                                            Initial</label>
                                                                        <input class="w-20 shadow-inner p-4 border-0"
                                                                            maxlength="1"
                                                                            style="text-transform:uppercase" type="text"
                                                                            name="mi" placeholder="M.I">
                                                                    </div>
                                                                </div>
                                                                <div class="md:flex mb-4">
                                                                    <div class="md:flex-1 md:pr-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Street
                                                                            Address</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="address_street"
                                                                            placeholder="555 Roadrunner Lane">
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Building/Suite
                                                                            No.</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="address_number"
                                                                            placeholder="#3">
                                                                        <span class="text-xs mb-4 font-thin">We lied,
                                                                            this isn't required.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="md:flex mb-4">
                                                                    <div class="md:flex-1 md:pr-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Latitude</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="lat"
                                                                            placeholder="30.0455542">
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Longitude</label>
                                                                        <input class="w-full shadow-inner p-4 border-0"
                                                                            type="text" name="lon"
                                                                            placeholder="-99.1405168">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="md:flex mb-8">
                                                            <div class="md:w-1/3">
                                                                <legend class="uppercase tracking-wide text-sm">Contact
                                                                </legend>
                                                            </div>
                                                            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                                                                <div class="mb-4">
                                                                    <label
                                                                        class="block uppercase tracking-wide text-xs font-bold">Phone</label>
                                                                    <input class="w-full shadow-inner p-4 border-0"
                                                                        type="tel" name="phone"
                                                                        placeholder="(555) 555-5555">
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label
                                                                        class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">URL</label>
                                                                    <input class="w-full shadow-inner p-4 border-0"
                                                                        type="url" name="url" placeholder="acme.co">
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label
                                                                        class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Email</label>
                                                                    <input class="w-full shadow-inner p-4 border-0"
                                                                        type="email" name="email"
                                                                        placeholder="contact@acme.co">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="md:flex">
                                                            <div class="md:w-1/3">
                                                                <legend class="uppercase tracking-wide text-sm">Social
                                                                </legend>
                                                            </div>
                                                            <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                                                                <div class="md:flex mb-4">
                                                                    <div class="md:flex-1 md:pr-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Facebook</label>
                                                                        <div class="w-full flex">
                                                                            <span
                                                                                class="text-xs py-4 px-2 bg-grey-light text-grey-dark">facebook.com/</span>
                                                                            <input
                                                                                class="flex-1 shadow-inner p-4 border-0"
                                                                                type="text" name="facebook"
                                                                                placeholder="acmeco">
                                                                        </div>
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Twitter</label>
                                                                        <div class="w-full flex">
                                                                            <span
                                                                                class="text-xs py-4 px-2 bg-grey-light text-grey-dark">twitter.com/</span>
                                                                            <input
                                                                                class="flex-1 shadow-inner p-4 border-0"
                                                                                type="text" name="twitter"
                                                                                placeholder="acmeco">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="md:flex mb-4">
                                                                    <div class="md:flex-1 md:pr-3">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Instagram</label>
                                                                        <div class="w-full flex">
                                                                            <span
                                                                                class="text-xs py-4 px-2 bg-grey-light text-grey-dark">instagram.com/</span>
                                                                            <input
                                                                                class="flex-1 shadow-inner p-4 border-0"
                                                                                type="text" name="instagram"
                                                                                placeholder="acmeco">
                                                                        </div>
                                                                    </div>
                                                                    <div class="md:flex-1 md:pl-3 mt-2 md:mt-0">
                                                                        <label
                                                                            class="block uppercase tracking-wide text-charcoal-darker text-xs font-bold">Yelp</label>
                                                                        <div class="w-full flex">
                                                                            <span
                                                                                class="text-xs py-4 px-2 bg-grey-light text-grey-dark">yelp.com/</span>
                                                                            <input
                                                                                class="flex-1 shadow-inner p-4 border-0"
                                                                                type="text" name="yelp"
                                                                                placeholder="acmeco">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="md:flex mb-6 border border-t-1 border-b-0 border-x-0 border-cream-dark">
                                                            <div class="md:flex-1 px-3 text-center md:text-right pt-5">
                                                                <div class="flex justify-end pt-2 flex ml-auto">
                                                                    <button
                                                                        class="modal-close-counselor px-8 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                                                                        type="submit">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </section>
                                            </main>

                                        </div>


                                    </div>
                                </div>

                                </div>
                            </li>
                        </div>
                        <!-- TABLE STUDENTS -->
                        <ul class="p-6 space-y-6 bg-slate-100">
                            <?php if ($students) : ?>
                            <?php foreach ($students as $student) : ?>
                            <li class="flex items-center">
                                <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                    <img src=<?php echo $student->s_photo; ?> alt="Student placeholder image">
                                </div>
                                <span class="text-gray-600"><?php echo $student->s_last; ?>,
                                    <?php echo $student->s_first; ?>
                                    <?php echo $student->s_mi; ?>.</span>
                                <div class="flex ml-auto">
                                    <a href="<?php echo base_url(); ?>student/profile/manageStudent/<?php echo $student->sid; ?>"
                                        class="btn btn-primary btn-sm" title="Modify and Update Student Records">
                                        <button
                                            class="ml-auto w-auto bg-white text-slate-800 p-2 rounded font-semibold hover:bg-slate-200"
                                            type="submit">More</button></a>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <p style="color:red;">No Student Record Found.</p>
                            <?php endif ?>
                        </ul>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <br />

    <!--Student Insert Modal Script-->
    <script>
    var openmodal = document.querySelectorAll(".modal-open-student");
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener("click", function(event) {
            event.preventDefault();
            toggleModal();
        });
    }

    const overlay = document.querySelector(".modal-overlay-student");
    overlay.addEventListener("click", toggleModal);

    var closemodal = document.querySelectorAll(".modal-close-student");
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener("click", toggleModal);
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event;
        var isEscape = false;
        if ("key" in evt) {
            isEscape = evt.key === "Escape" || evt.key === "Esc";
        } else {
            isEscape = evt.keyCode === 27;
        }
        if (isEscape && document.body.classList.contains("modal-active")) {
            toggleModal();
        }
    };

    function toggleModal() {
        const body = document.querySelector("body");
        const modal = document.querySelector(".modal");
        modal.classList.toggle("opacity-0");
        modal.classList.toggle("pointer-events-none");
        body.classList.toggle("modal-active");
    }
    </script>

</body>

</html>