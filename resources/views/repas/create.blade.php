@extends('layouts.app')
@section('Content')
<main class="flex-1 md:ml-[280px] h-full overflow-y-auto custom-scrollbar flex flex-col bg-surface-container-low">
    <header class="w-full top-0 sticky z-40 bg-surface dark:bg-surface-dim shadow-[0px_4px_20px_rgba(0,0,0,0.05)] h-16 flex justify-between items-center px-gutter">
        <div class="flex items-center gap-sm">
            <h2 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">Meal Database</h2>
            <div class="h-6 w-[1px] bg-outline-variant mx-sm"></div>
            <p class="text-on-surface-variant font-label-md">Total Meals: <span class="font-bold">142</span></p>
        </div>
        <div class="flex items-center gap-md">
            <div class="relative group hidden lg:block">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
                <input class="bg-surface-container-lowest border border-outline-variant rounded-lg pl-10 pr-4 py-2 text-label-md focus:ring-2 focus:ring-primary focus:border-primary w-64 transition-all" placeholder="Quick find meal..." type="text" />
            </div>
            <button class="flex items-center gap-xs bg-primary text-on-primary px-sm py-2 rounded-lg font-label-md hover:shadow-lg transition-all active:scale-95 duration-150" onclick="toggleSidePanel()">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                Enrégistrer un repas
            </button>
        </div>
    </header>
    <!-- Content Body -->
    <section class="p-gutter flex flex-col gap-lg">
        <!-- Filters Bar -->
        <div class="flex flex-wrap gap-sm items-center bg-surface p-sm rounded-xl border border-outline-variant shadow-sm">
            <span class="font-label-md text-on-surface-variant mr-xs">Filter by:</span>
            <button class="bg-primary-container text-on-primary-container px-sm py-1 rounded-full font-label-sm flex items-center gap-xs">All Categories</button>
            <button class="bg-surface-container-high text-on-surface-variant px-sm py-1 rounded-full font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-colors">Starters</button>
            <button class="bg-surface-container-high text-on-surface-variant px-sm py-1 rounded-full font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-colors">Main Courses</button>
            <button class="bg-surface-container-high text-on-surface-variant px-sm py-1 rounded-full font-label-sm flex items-center gap-xs hover:bg-surface-variant transition-colors">Desserts</button>
            <div class="ml-auto flex items-center gap-sm">
                <button class="text-on-surface-variant hover:text-primary p-2"><span class="material-symbols-outlined" data-icon="filter_list">filter_list</span></button>
                <button class="text-on-surface-variant hover:text-primary p-2"><span class="material-symbols-outlined" data-icon="download">download</span></button>
            </div>
        </div>
        <!-- Bento-Style Inventory Grid -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-md">
            <!-- Table View (Main Focus) -->
            <div class="xl:col-span-3 bg-surface rounded-xl border border-outline-variant shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-b border-outline-variant">
                                <th class="px-md py-sm font-label-md text-on-surface-variant uppercase tracking-wider">Meal Item</th>
                                <th class="px-md py-sm font-label-md text-on-surface-variant uppercase tracking-wider">Category</th>
                                <th class="px-md py-sm font-label-md text-on-surface-variant uppercase tracking-wider">Nutritional Highlights</th>
                                <th class="px-md py-sm font-label-md text-on-surface-variant uppercase tracking-wider">Allergens</th>
                                <th class="px-md py-sm font-label-md text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Row 1 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-md py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover" data-alt="A macro food photography shot of a vibrant garden salad with fresh cherry tomatoes, cucumber slices, and shredded carrots. The lighting is bright and airy, styled for a health-focused school cafeteria menu. High-resolution, clean composition with soft green and red accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFO3BfG9j4zM6uuKbiingl-W7-aS3vgDbr32qA1BPwC28kpYcEHBo5BQJ6n098t9Rb1sQZYc9gGNGpXjc7qafDMZFbwYdyOxEqdT6PA8a0ON9xypp-61beglLYzVipPcVHgWezffxLXt1R1wk69Khd01Xlmh0iiX_zzgt9frpJldK6nTq4oOxNwV987cfE3S9rS4sMETiMYXyJF0LKHbazkqn7bywcfGyuvXF28EkpFBNLhjTgLkd3aidi2Cba8MP6t8E86m8-KnE" />
                                        </div>
                                        <div>
                                            <p class="font-headline-md text-body-md font-bold">Classic Garden Salad</p>
                                            <p class="text-label-sm text-on-surface-variant line-clamp-1">Fresh mix of seasonal greens with lemon vinaigrette.</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <span class="bg-surface-container-highest text-on-surface-variant px-sm py-1 rounded-full text-label-sm">Starter</span>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-xs">
                                        <span class="text-tertiary-container bg-on-tertiary-container/10 px-2 py-0.5 rounded text-[10px] font-bold uppercase">Healthy</span>
                                        <span class="text-primary bg-primary-fixed/30 px-2 py-0.5 rounded text-[10px] font-bold uppercase">Low Cal</span>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-1">
                                        <span class="material-symbols-outlined text-[18px] text-error" data-icon="nature">nature</span>
                                        <span class="text-label-sm text-on-surface-variant">None</span>
                                    </div>
                                </td>
                                <td class="px-md py-md text-right">
                                    <div class="flex justify-end gap-xs">
                                        <button class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/20 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-md py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover" data-alt="A top-down professional food shot of a hearty chicken and vegetable stew in a ceramic bowl. Rich golden broth, visible chunks of carrots, potatoes, and tender chicken. The scene is warmly lit to convey comfort and high nutritional value. Soft shadows and high-end culinary photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnU26FZcTSotyyqFkO8F5Kcgj1dm-6Hmd-MJoNOP4ehKXsZZGOhmlE9QIlcHaqsz9HrrtD7cekaDuhI1ERTfPnD5vEGChNw0y6cFtmqXWGjECIGOMLQpr8mtTFt0NV9TqS92ShbivFcNq7uBkfHSelj-jSQF1YGuyXjAn17V-REwJfqep_oxDycqESJIQpBpaB-_k-nFKE24rI8h3ube1XALw2C2j_AYxu3WuYYRPg-KqhShsSluZIiG1Vjc5xUIzzLEp_X4SSOo4" />
                                        </div>
                                        <div>
                                            <p class="font-headline-md text-body-md font-bold">Roast Chicken Platter</p>
                                            <p class="text-label-sm text-on-surface-variant line-clamp-1">Slow-roasted chicken breast with steamed broccoli.</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <span class="bg-primary-container text-on-primary-container px-sm py-1 rounded-full text-label-sm">Main</span>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-xs">
                                        <span class="text-secondary bg-secondary-container/20 px-2 py-0.5 rounded text-[10px] font-bold uppercase">High Protein</span>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-1 items-center">
                                        <span class="material-symbols-outlined text-[18px] text-error" data-icon="warning">warning</span>
                                        <span class="text-label-sm text-on-surface-variant">Dairy</span>
                                    </div>
                                </td>
                                <td class="px-md py-md text-right">
                                    <div class="flex justify-end gap-xs">
                                        <button class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/20 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-md py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-12 h-12 rounded-lg bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover" data-alt="A delicious fruit parfait with layers of greek yogurt, red berries, and a sprinkle of granola on top. Shot in a clear glass to show textures. The lighting is bright morning light, emphasizing freshness and vitality. Modern, minimalist background with light wood accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU0FqU_AGG5ME1ytbKtdbUw1u22yv8PHv9zl7SrKItead2h9FZ1Reat1SAb8QeyTgFvIkHpaSh8X6M2B6MvVnhEAoMNdhU05CGqg1kYs0pH3ukmjtP3hNpiQq9u8cQKPDbyBMJOX8jHp9HnV9obkjYCv-2m8tUjKiYSwXcEhdDVI19hpXa29g56111dXhenML-H5ciqRAHVISYaHzeE9Pfp0qitGZSIFyDVj791_9W24qGKcV_QWF086ECPQlIjOWePS-SYtWLtV0" />
                                        </div>
                                        <div>
                                            <p class="font-headline-md text-body-md font-bold">Berry Yogurt Parfait</p>
                                            <p class="text-label-sm text-on-surface-variant line-clamp-1">Greek yogurt with mixed berries and honey.</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <span class="bg-secondary-container text-on-secondary-container px-sm py-1 rounded-full text-label-sm">Dessert</span>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-xs">
                                        <span class="text-tertiary-container bg-on-tertiary-container/10 px-2 py-0.5 rounded text-[10px] font-bold uppercase">Low Sugar</span>
                                    </div>
                                </td>
                                <td class="px-md py-md">
                                    <div class="flex gap-1 items-center">
                                        <span class="material-symbols-outlined text-[18px] text-error" data-icon="warning">warning</span>
                                        <span class="text-label-sm text-on-surface-variant">Lactose, Nuts</span>
                                    </div>
                                </td>
                                <td class="px-md py-md text-right">
                                    <div class="flex justify-end gap-xs">
                                        <button class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary-container/20 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error hover:bg-error-container/50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination Footer -->
                <div class="p-sm bg-surface-container-low border-t border-outline-variant flex items-center justify-between">
                    <p class="text-label-sm text-on-surface-variant">Showing 1 to 10 of 142 items</p>
                    <div class="flex gap-xs">
                        <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]" data-icon="chevron_left">chevron_left</span></button>
                        <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary text-label-sm font-bold">1</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant hover:bg-surface-container transition-colors text-label-sm">2</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant hover:bg-surface-container transition-colors text-label-sm">3</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]" data-icon="chevron_right">chevron_right</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Slide-over Register New Meal Panel -->
<div aria-labelledby="slide-over-title" aria-modal="true" class="fixed inset-0 z-[100] hidden overflow-hidden" id="sidePanel" role="dialog">
    <div class="absolute inset-0 bg-inverse-surface/40 backdrop-blur-sm transition-opacity" onclick="toggleSidePanel()"></div>
    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
        <form action="{{ route('repas.store') }}" method="post" class="w-screen max-w-md side-panel-open bg-surface shadow-2xl h-full flex flex-col" enctype="multipart/form-data">
            @csrf
            <div class="px-gutter py-md border-b border-outline-variant flex items-center justify-between">
                <h2 class="font-headline-md text-headline-md text-primary font-bold">Register New Meal</h2>
                <button type="button" class="text-on-surface-variant hover:text-error p-2 transition-colors" onclick="toggleSidePanel()">
                    <span class="material-symbols-outlined" data-icon="close">close</span>
                </button>
            </div>


            <div class="flex-1 overflow-y-auto custom-scrollbar p-gutter space-y-lg">
                <!-- Photo Upload -->
                <div class="space-y-sm">
                    <label class="font-label-md text-on-surface font-bold">Meal Presentation Photo</label>
                    <input type="file" name="image" id="image" class="w-full px-md py-2.5 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all">
                </div>
                <!-- Basic Info -->
                <div class="space-y-sm">
                    <div>
                        <label class="font-label-md text-on-surface font-bold block mb-1">Meal Name</label>
                        <input
                            class="w-full px-md py-2.5 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                            placeholder="e.g. Braised Beef Stew"
                            type="text"
                            id="name_meal"
                            name="name_meal" />
                    </div>
                    <div>
                        <label class="font-label-md text-on-surface font-bold block mb-1">Category</label>
                        <select
                            class="w-full px-md py-2.5 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                            name="category" id="category">
                            <!-- <option>Select Category</option> -->
                            <option value="starter">Starter</option>
                            <option value="main course">Main Course</option>
                            <option value="dessert">Dessert</option>
                            <option value="drink">Drink</option>
                        </select>
                    </div>
                </div>
                <!-- Details -->
                <div class="space-y-sm">
                    <div>
                        <label class="font-label-md text-on-surface font-bold block mb-1">Description</label>
                        <textarea
                            class="w-full px-md py-2.5 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                            placeholder="Describe the meal's taste, preparation style, and portion size..."
                            rows="3"
                            id="description"
                            name="description"></textarea>
                    </div>
                    <div>
                        <label class="font-label-md text-on-surface font-bold block mb-1">Ingredients</label>
                        <textarea class="w-full px-md py-2.5 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                            placeholder="List all main ingredients..."
                            rows="2"
                            id="ingredient"
                            name="ingredient"></textarea>
                    </div>
                </div>
            </div>
            <!-- Footer Actions -->
            <div class="p-gutter border-t border-outline-variant bg-surface-container-low flex gap-md">
                <button
                    class="flex-1 px-md py-3 rounded-lg bg-primary text-on-primary font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 active:translate-y-0 transition-all"
                    type="submit">
                    Save Meal</button>
            </div>
        </form>
    </div>
</div>
<!-- Mobile Navigation -->
<nav class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 py-2 pb-safe bg-surface dark:bg-inverse-surface shadow-lg md:hidden z-50 rounded-t-xl">
    <a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant active:bg-surface-container-highest transition-transform scale-95 active:scale-90" href="#">
        <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
        <span class="font-label-sm text-label-sm-mobile">Menu</span>
    </a>
    <a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-4 py-1 transition-transform scale-95 active:scale-90" href="#">
        <span class="material-symbols-outlined" data-icon="inventory_2" style="font-variation-settings: 'FILL' 1;">inventory_2</span>
        <span class="font-label-sm text-label-sm-mobile">Inventory</span>
    </a>
    <a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant active:bg-surface-container-highest transition-transform scale-95 active:scale-90" href="#">
        <span class="material-symbols-outlined" data-icon="person">person</span>
        <span class="font-label-sm text-label-sm-mobile">Profile</span>
    </a>
</nav>
<script>
    function toggleSidePanel() {
        const panel = document.getElementById('sidePanel');
        if (panel.classList.contains('hidden')) {
            panel.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            panel.classList.add('hidden');
            document.body.style.overflow = '';
        }
    }

    // Search highlight effect
    const searchInput = document.querySelector('input[placeholder="Quick find meal..."]');
    searchInput.addEventListener('focus', () => {
        searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
    });
    searchInput.addEventListener('blur', () => {
        searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
    });
</script>


@endsection