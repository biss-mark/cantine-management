<!DOCTYPE html>
<!DOCTYPE html>

<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>CanteenConnect - Admin Dashboard</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
                rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
        <script id="tailwind-config">
                tailwind.config = {
                        darkMode: "class",
                        theme: {
                                extend: {
                                        "colors": {
                                                "secondary": "#9b4500",
                                                "on-tertiary": "#ffffff",
                                                "outline-variant": "#bfc9c1",
                                                "primary-fixed-dim": "#95d4b3",
                                                "tertiary": "#005503",
                                                "secondary-container": "#fc8a40",
                                                "tertiary-fixed-dim": "#89da79",
                                                "tertiary-fixed": "#a4f792",
                                                "on-tertiary-fixed-variant": "#005303",
                                                "on-tertiary-fixed": "#002201",
                                                "surface-container-high": "#e5e6ff",
                                                "on-error-container": "#93000a",
                                                "outline": "#707973",
                                                "primary": "#0f5238",
                                                "on-background": "#161a32",
                                                "on-secondary-fixed": "#331200",
                                                "on-tertiary-container": "#9cee8a",
                                                "secondary-fixed": "#ffdbc9",
                                                "on-surface": "#161a32",
                                                "surface-container-low": "#f4f2ff",
                                                "inverse-primary": "#95d4b3",
                                                "on-primary": "#ffffff",
                                                "surface-bright": "#fbf8ff",
                                                "on-primary-fixed": "#002114",
                                                "surface-container-lowest": "#ffffff",
                                                "surface-tint": "#2c694e",
                                                "error-container": "#ffdad6",
                                                "surface-container-highest": "#dee0ff",
                                                "on-secondary-fixed-variant": "#763300",
                                                "primary-container": "#2d6a4f",
                                                "inverse-on-surface": "#f0efff",
                                                "on-primary-container": "#a8e7c5",
                                                "surface-container": "#ececff",
                                                "primary-fixed": "#b1f0ce",
                                                "surface-dim": "#d5d8f9",
                                                "background": "#fbf8ff",
                                                "on-primary-fixed-variant": "#0e5138",
                                                "secondary-fixed-dim": "#ffb68d",
                                                "error": "#ba1a1a",
                                                "on-error": "#ffffff",
                                                "on-secondary-container": "#672c00",
                                                "on-secondary": "#ffffff",
                                                "surface": "#fbf8ff",
                                                "surface-variant": "#dee0ff",
                                                "on-surface-variant": "#404943",
                                                "inverse-surface": "#2b2f48",
                                                "tertiary-container": "#206e1b"
                                        },
                                        "borderRadius": {
                                                "DEFAULT": "0.25rem",
                                                "lg": "0.5rem",
                                                "xl": "0.75rem",
                                                "full": "9999px"
                                        },
                                        "spacing": {
                                                "base": "4px",
                                                "xs": "8px",
                                                "gutter": "24px",
                                                "md": "24px",
                                                "lg": "32px",
                                                "container-max": "1280px",
                                                "sm": "16px",
                                                "xl": "48px"
                                        },
                                        "fontFamily": {
                                                "headline-md": ["Inter"],
                                                "headline-lg-mobile": ["Inter"],
                                                "label-sm": ["Inter"],
                                                "display-lg": ["Inter"],
                                                "headline-lg": ["Inter"],
                                                "body-lg": ["Inter"],
                                                "label-md": ["Inter"],
                                                "body-md": ["Inter"]
                                        },
                                        "fontSize": {
                                                "headline-md": ["24px", {
                                                        "lineHeight": "32px",
                                                        "fontWeight": "600"
                                                }],
                                                "headline-lg-mobile": ["24px", {
                                                        "lineHeight": "32px",
                                                        "fontWeight": "600"
                                                }],
                                                "label-sm": ["12px", {
                                                        "lineHeight": "16px",
                                                        "fontWeight": "600"
                                                }],
                                                "display-lg": ["48px", {
                                                        "lineHeight": "56px",
                                                        "letterSpacing": "-0.02em",
                                                        "fontWeight": "700"
                                                }],
                                                "headline-lg": ["32px", {
                                                        "lineHeight": "40px",
                                                        "letterSpacing": "-0.01em",
                                                        "fontWeight": "600"
                                                }],
                                                "body-lg": ["18px", {
                                                        "lineHeight": "28px",
                                                        "fontWeight": "400"
                                                }],
                                                "label-md": ["14px", {
                                                        "lineHeight": "20px",
                                                        "letterSpacing": "0.01em",
                                                        "fontWeight": "500"
                                                }],
                                                "body-md": ["16px", {
                                                        "lineHeight": "24px",
                                                        "fontWeight": "400"
                                                }]
                                        }
                                },
                        },
                }
        </script>
        <style>
                body {
                        background-color: #F8F9FA;
                }

                .shadow-soft {
                        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05);
                }

                .shadow-hover {
                        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.08);
                }
                        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #bfc9c1;
            border-radius: 10px;
        }
        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }
        .side-panel-open {
            animation: slideIn 0.3s ease-out forwards;
        }


        </style>
</head>

<body class="font-body-md text-on-surface antialiased flex flex-col md:flex-row min-h-screen">
        <!-- SideNavBar (Admin Rail) -->
        @include('layouts.navigation')
        

        <!-- Main Content Area -->
        @yield('Content')
       <!-- BottomNavBar (Mobile Only) -->
        <nav
                class="fixed bottom-0 w-full md:hidden z-50 rounded-t-xl bg-surface dark:bg-inverse-surface shadow-[0px_-4px_20px_rgba(0,0,0,0.05)] shadow-lg flex justify-around items-center px-4 py-2 pb-safe">
                <a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-4 py-1 scale-95 active:scale-90 transition-transform"
                        href="#">
                        <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">dashboard</span>
                        <span class="font-label-sm text-label-sm-mobile">Dashboard</span>
                </a>
                <a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant active:bg-surface-container-highest scale-95 active:scale-90 transition-transform px-4 py-1 rounded-full"
                        href="#">
                        <span class="material-symbols-outlined">restaurant_menu</span>
                        <span class="font-label-sm text-label-sm-mobile">Meals</span>
                </a>
                <a class="flex flex-col items-center justify-center text-on-surface-variant dark:text-outline-variant active:bg-surface-container-highest scale-95 active:scale-90 transition-transform px-4 py-1 rounded-full"
                        href="#">
                        <span class="material-symbols-outlined">analytics</span>
                        <span class="font-label-sm text-label-sm-mobile">Reports</span>
                </a>
        </nav>
    </body>
</html>
