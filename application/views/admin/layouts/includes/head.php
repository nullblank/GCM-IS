<header class="h-20 w-auto flex items-center px-6 bg-slate-300 sticky top-0">
    <button class="p-2 -ml-2 mr-5" @click="isSidebarExpanded = !isSidebarExpanded">
        <svg viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round" class="h-6 w-6 transform" :class="isSidebarExpanded ? 'rotate-180' : 'rotate-0'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="4" y1="6" x2="14" y2="6" />
            <line x1="4" y1="18" x2="14" y2="18" />
            <path d="M4 12h17l-3 -3m0 6l3 -3" />
        </svg>
    </button>
    <div class="relative w-full max-w-md sm:-ml-2">
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
            class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd" />
        </svg>
        <input type="text" role="search" placeholder="Search..."
            class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
    </div>
    <div class="flex flex-shrink-0items-center ml-auto text-slate-700">
        <span class="sr-only">User Menu</span>
        <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
            <span class="font-semibold"><?php echo $user->user_name; ?></span>
            <span class="text-sm text-gray-600"><?php echo $user->user_role; ?></span>
        </div>
        <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
            <img src=<?php echo $user->user_photo; ?> alt="user profile photo" class="h-full w-full object-cover">
        </span>
        <div class="border-l pl-3 ml-3 space-x-1">
            <a href="<?php echo base_url(); ?>logout">
                <button
                    class="relative p-2 bg-slate-200 text-gray-700 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                    <span class="sr-only">Log out</span>
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </a>
        </div>
    </div>
</header>