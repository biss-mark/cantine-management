 <!-- SideNavBar (Admin Rail) -->
        <nav
                class="fixed left-0 top-0 h-full w-[280px] hidden md:flex flex-col bg-surface dark:bg-surface-container-low border-r border-outline-variant flat no shadows p-sm gap-xs z-40 transition-all duration-200 ease-in-out">
                <div class="mb-lg">
                        <h1 class="font-headline-md text-headline-md text-primary">CanteenConnect</h1>
                </div>
                <div class="flex items-center gap-xs p-xs mb-md bg-surface-container-low rounded-lg">
                        <div
                                class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">
                                <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                        </div>
                        <div>
                                <p class="font-label-md text-label-md text-on-surface font-bold">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-on-surface-variant">Etudiant / Eleve</p>
                        </div>
                </div>
                <button
                        class="w-full bg-primary text-on-primary py-2 px-4 rounded-lg font-label-md text-label-md mb-md hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-soft">
                        Publish Weekly Menu
                </button>
                <div class="flex flex-col gap-base flex-grow">
                        <!-- Active Tab -->
                        <a class="flex items-center gap-xs p-xs bg-primary-container text-on-primary-container font-bold rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">dashboard</span>
                                <span class="font-label-md text-label-md">Dashboard</span>
                        </a>
                        <!-- Inactive Tabs -->
                        <a class="flex items-center gap-xs p-xs text-on-surface-variant dark:text-outline hover:bg-surface-container rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">restaurant_menu</span>
                                <span class="font-label-md text-label-md">Meal Planning</span>
                        </a>
                        <a class="flex items-center gap-xs p-xs text-on-surface-variant dark:text-outline hover:bg-surface-container rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">inventory_2</span>
                                <span class="font-label-md text-label-md">Inventory</span>
                        </a>
                        <a class="flex items-center gap-xs p-xs text-on-surface-variant dark:text-outline hover:bg-surface-container rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">analytics</span>
                                <span class="font-label-md text-label-md">Reports</span>
                        </a>
                </div>
                <div class="flex flex-col gap-base mt-auto pt-md border-t border-outline-variant">
                        <a class="flex items-center gap-xs p-xs text-on-surface-variant dark:text-outline hover:bg-surface-container rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">settings</span>
                                <span class="font-label-md text-label-md">Settings</span>
                        </a>
                        <a class="flex items-center gap-xs p-xs text-on-surface-variant dark:text-outline hover:bg-surface-container rounded-lg transition-all duration-200 ease-in-out"
                                href="#">
                                <span class="material-symbols-outlined">logout</span>
                                <span class="font-label-md text-label-md">Logout</span>
                        </a>
                </div>
        </nav>
