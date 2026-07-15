
@extends('layouts.app')
@section('Content')
<main class="flex-1 md:ml-[280px] p-4 md:p-gutter max-w-container-max mx-auto w-full">
    <!-- Header -->
    <header class="flex justify-between items-center mb-lg">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface">Daily Overview</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Tuesday, October 24th</p>
        </div>
        <div class="flex gap-xs">
            <button class="p-2 rounded-full hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            </button>
        </div>
    </header>
    <!-- KPI Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-md mb-lg">
        <div class="bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20 hover:shadow-hover transition-shadow">
            <div class="flex justify-between items-start mb-2">
                <p class="font-label-md text-label-md text-on-surface-variant">Total Meals
                    (Today)</p>
                <span class="material-symbols-outlined text-primary">restaurant</span>
            </div>
            <h3 class="font-display-lg text-display-lg text-primary">452</h3>
            <p class="text-sm text-tertiary-container mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">trending_up</span> +12 from
                yesterday
            </p>
        </div>
        <div class="bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20 hover:shadow-hover transition-shadow">
            <div class="flex justify-between items-start mb-2">
                <p class="font-label-md text-label-md text-on-surface-variant">Prep Forecast
                    (Tomorrow)</p>
                <span class="material-symbols-outlined text-secondary">calendar_today</span>
            </div>
            <h3 class="font-display-lg text-display-lg text-secondary">480</h3>
            <p class="text-sm text-on-surface-variant mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">info</span> Estimate based on
                current orders
            </p>
        </div>
        <div class="bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20 hover:shadow-hover transition-shadow">
            <div class="flex justify-between items-start mb-2">
                <p class="font-label-md text-label-md text-on-surface-variant">Special Diets
                    (Today)</p>
                <span class="material-symbols-outlined text-error">health_and_safety</span>
            </div>
            <h3 class="font-display-lg text-display-lg text-on-surface">64</h3>
            <div class="flex gap-2 mt-2">
                <span class="bg-tertiary-container text-on-tertiary text-xs px-2 py-1 rounded-full">30
                    Veg</span>
                <span class="bg-error-container text-on-error-container text-xs px-2 py-1 rounded-full">12
                    GF</span>
            </div>
        </div>
    </div>
    <!-- Charts Section (Bento Grid Style) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-md mb-lg">
        <!-- Main Meal Breakdown (Takes up 2 columns) -->
        <div class="lg:col-span-2 bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20">
            <h4 class="font-headline-md text-headline-md text-on-surface mb-4">Meal Selection
                Breakdown</h4>
            <!-- Simulated Bar Chart using HTML/CSS -->
            <div class="flex flex-col gap-4 mt-6">
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="font-label-md text-label-md text-on-surface">Option
                            A: Roast Chicken &amp; Veg</span>
                        <span class="font-bold text-primary">210 (46%)</span>
                    </div>
                    <div class="w-full bg-surface-container rounded-full h-4">
                        <div class="bg-primary h-4 rounded-full" style="width: 46%">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="font-label-md text-label-md text-on-surface">Option
                            B: Vegetarian Pasta Bake</span>
                        <span class="font-bold text-tertiary-container">145 (32%)</span>
                    </div>
                    <div class="w-full bg-surface-container rounded-full h-4">
                        <div class="bg-tertiary-container h-4 rounded-full" style="width: 32%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="font-label-md text-label-md text-on-surface">Option
                            C: Tuna Salad Wrap</span>
                        <span class="font-bold text-secondary">97 (22%)</span>
                    </div>
                    <div class="w-full bg-surface-container rounded-full h-4">
                        <div class="bg-secondary h-4 rounded-full" style="width: 22%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class Stats (Takes 1 column) -->
        <div class="bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20">
            <h4 class="font-headline-md text-headline-md text-on-surface mb-4">Orders by Grade</h4>
            <div class="space-y-3 mt-4">
                <div class="flex items-center justify-between p-2 hover:bg-surface-container rounded-lg transition-colors">
                    <span class="font-label-md text-label-md text-on-surface">Grade 9</span>
                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-xs font-bold">120</span>
                </div>
                <div class="flex items-center justify-between p-2 hover:bg-surface-container rounded-lg transition-colors">
                    <span class="font-label-md text-label-md text-on-surface">Grade
                        10</span>
                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-xs font-bold">145</span>
                </div>
                <div class="flex items-center justify-between p-2 hover:bg-surface-container rounded-lg transition-colors">
                    <span class="font-label-md text-label-md text-on-surface">Grade
                        11</span>
                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-xs font-bold">95</span>
                </div>
                <div class="flex items-center justify-between p-2 hover:bg-surface-container rounded-lg transition-colors">
                    <span class="font-label-md text-label-md text-on-surface">Grade
                        12</span>
                    <span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-xs font-bold">92</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detailed Tracking List -->
    <div class="bg-surface rounded-xl p-md shadow-soft border border-outline-variant/20 mb-xl">
        <div class="flex justify-between items-center mb-6">
            <h4 class="font-headline-md text-headline-md text-on-surface">Exception Tracking
                (Allergies/Special)</h4>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-outline">search</span>
                <input class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary w-64" placeholder="Search student or class..." type="text" />
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-outline-variant text-on-surface-variant font-label-md text-label-md">
                        <th class="pb-3 px-2">Student ID</th>
                        <th class="pb-3 px-2">Class</th>
                        <th class="pb-3 px-2">Meal Selection</th>
                        <th class="pb-3 px-2">Requirement</th>
                        <th class="pb-3 px-2 text-right">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
                        <td class="py-3 px-2 font-medium text-on-surface">STU-8892</td>
                        <td class="py-3 px-2 text-on-surface-variant">10-A</td>
                        <td class="py-3 px-2 text-on-surface">Option B (Veg Pasta)</td>
                        <td class="py-3 px-2">
                            <span class="bg-error-container text-on-error-container px-2 py-1 rounded-full text-xs font-bold">Nut
                                Allergy</span>
                        </td>
                        <td class="py-3 px-2 text-right">
                            <span class="text-tertiary font-medium flex items-center justify-end gap-1"><span class="material-symbols-outlined text-sm">check_circle</span>
                                Prepped</span>
                        </td>
                    </tr>
                    <tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
                        <td class="py-3 px-2 font-medium text-on-surface">STU-7103</td>
                        <td class="py-3 px-2 text-on-surface-variant">9-C</td>
                        <td class="py-3 px-2 text-on-surface">Custom Prep</td>
                        <td class="py-3 px-2">
                            <span class="bg-secondary-container text-on-surface px-2 py-1 rounded-full text-xs font-bold">Gluten
                                Free</span>
                        </td>
                        <td class="py-3 px-2 text-right">
                            <span class="text-secondary font-medium flex items-center justify-end gap-1"><span class="material-symbols-outlined text-sm">pending</span>
                                Pending</span>
                        </td>
                    </tr>
                    <tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
                        <td class="py-3 px-2 font-medium text-on-surface">STU-9941</td>
                        <td class="py-3 px-2 text-on-surface-variant">12-B</td>
                        <td class="py-3 px-2 text-on-surface">Option A (Chicken)</td>
                        <td class="py-3 px-2">
                            <span class="bg-surface-container-high text-on-surface px-2 py-1 rounded-full text-xs font-bold">Dairy
                                Free</span>
                        </td>
                        <td class="py-3 px-2 text-right">
                            <span class="text-tertiary font-medium flex items-center justify-end gap-1"><span class="material-symbols-outlined text-sm">check_circle</span>
                                Prepped</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
