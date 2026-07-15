<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CanteenConnect - Login &amp; Registration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex items-center justify-center p-sm md:p-gutter">
    <div class="w-full max-w-container-max mx-auto bg-surface shadow-[0px_4px_20px_rgba(0,0,0,0.05)] rounded-[24px] overflow-hidden flex flex-col md:flex-row min-h-[600px]">
        <!-- Illustration Side -->
        <div class="hidden md:block md:w-1/2 relative bg-surface-container-low p-xl">
            <div class="absolute inset-0 z-0">
                <img alt="Canteen illustration" class="w-full h-full object-cover opacity-80 mix-blend-multiply" data-alt="A modern, vibrant vector illustration of a healthy school lunch tray featuring a fresh green salad, colorful vegetables, and a stylized sandwich. The style is flat, corporate illustration with a friendly, welcoming vibe. It uses a modern corporate aesthetic with human touch, heavily relying on the primary green (#0f5238) and soft gray backgrounds. The lighting feels bright and sunny, signaling freshness and health in a school canteen environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxtawdo7BX13jbLqt0RS__VjFXUGPtvfYeaYQ0FKdZuxRda6Hb616B8oMU8nQOzdRaUoia5tNhO67SE72xpElocFqYwmyHDmegMX1HdTUNDMI7zc1jdPIqyqc7TFtgnku0PUpXbqCNAEespYKmirLYo7kXs2U3x5i5g0zm6WctOQxZtjN4VKNWG_mddugSwq21dzG0nDsR4xnu_vdNet8gSC-6jYL_wWhqqKlVxcYElJO-IY7grdQ8WA"/>
            </div>
            <div class="relative z-10 flex flex-col justify-between h-full">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-primary mb-xs">CanteenConnect</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Fueling your mind, one healthy meal at a time.</p>
                </div>
            </div>
        </div>
        <!-- Form Side -->
        <div class="w-full md:w-1/2 p-lg md:p-xl flex flex-col justify-center relative">
            <!-- Mobile Header (Hidden on Desktop) -->
            <div class="md:hidden text-center mb-lg">
                <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary mb-xs">CanteenConnect</h1>
            </div>
            <!-- Tabs -->
            <div class="flex space-x-sm border-b border-outline-variant mb-lg pb-xs">
                <button class="font-label-md text-label-md text-primary border-b-2 border-primary pb-xs transition-colors" id="loginTab" onclick="switchTab('login')">Login</button>
                <button class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors pb-xs" id="registerTab" onclick="switchTab('register')">Register</button>
            </div>
            <!-- Login Form -->
            <div class="block animate-fade-in" id="loginForm">
                <h2 class="font-headline-md text-headline-md text-on-surface mb-sm">Welcome Back</h2>
                <form class="space-y-sm" action="{{ route('users.login') }}" method="post" >
                    @csrf
                    <div class="space-y-base">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="loginStudentId">Student ID (Matricule)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">badge</span>
                            <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}" id="email" placeholder="Email" />
                            @error('email')
                            <span style="color: red; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="space-y-base">
                        <div class="flex justify-between items-center">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="loginPassword">Password</label>
                            <a class="font-label-sm text-label-sm text-primary hover:underline" href="#">Forgot?</a>
                        </div>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">lock</span>
                            <input
                                class="w-full pl-10 pr-10 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                type="password"
                                name="password" placeholder="••••••••" id="password" placeholder="Password"
                            />
                            @error('password')
                            <span style="color: red; display: block;">{{ $message }}</span>
                            @enderror
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-primary" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="w-full mt-md bg-primary text-on-primary font-label-md text-label-md py-3 rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm" type="submit">
                        Sign In
                    </button>
                </form>
            </div>
            <!-- Registration Form -->
            <div class="hidden animate-fade-in" id="registerForm">
                <h2 class="font-headline-md text-headline-md text-on-surface mb-sm">Create Account</h2>
                <form class="space-y-sm" action="{{ route('users.register') }}" method="post" >
                    @csrf
                    <div class="grid grid-cols-2 gap-sm">
                        <div class="space-y-base">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="regFirstName">First Name</label>
                            <input class="w-full px-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                id="regFirstName" name="first_name" placeholder="Jane" type="text"/>
                        </div>
                        <div class="space-y-base">
                            <label class="font-label-md text-label-md text-on-surface-variant" for="regLastName">Last Name</label>
                            <input class="w-full px-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                            id="regLastName" name="last_name" placeholder="Doe" type="text"/>
                        </div>
                    </div>
                    {{-- Ajouter le champ email --}}
                    <div class="space-y-base">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="regEmail">Email</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">email</span>
                            <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                            id="regEmail" name="email" placeholder="Enter your email" type="email"/>
                            @error('email')
                                <p class="hidden font-label-sm text-label-sm text-error mt-1" id="regEmailError">Please enter a valid email address.</p>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="space-y-base">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="regStudentId">Student ID (Matricule)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">badge</span>
                            <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                            id="regStudentId" name="student_id" placeholder="Enter your ID" type="text"/>
                        </div>
                        <p class="hidden font-label-sm text-label-sm text-error mt-1" id="regIdError">Student ID must be 8 digits.</p>
                    </div> --}}
                    {{-- Ajouter un select pour le sexe --}}
                    <div class="space-y-base">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="regSex">Sex</label>
                        <select class="w-full px-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                            id="regSex" name="sexe">
                            <option value="">Selection du sexe</option>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                        @error('sexe')
                            <p class="hidden font-label-sm text-label-sm text-error mt-1" id="regSexError">Please select a valid sex.</p>
                        @enderror
                    </div>
                    <div class="space-y-base">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="regPassword">Password</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">lock</span>
                            <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                            id="regPassword" name="password" placeholder="Create a password" type="password"/>
                        </div>
                        @error('password')
                            <p class="hidden font-label-sm text-label-sm text-error mt-1" id="regPasswordError">Password must be at least 8 characters.</p>
                        @enderror
                    </div>
                    <button class="w-full mt-md bg-primary text-on-primary font-label-md text-label-md py-3 rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm" type="submit">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
            function switchTab(tab) {
                const loginForm = document.getElementById('loginForm');
                const registerForm = document.getElementById('registerForm');
                const loginTab = document.getElementById('loginTab');
                const registerTab = document.getElementById('registerTab');

                if (tab === 'login') {
                    loginForm.classList.remove('hidden');
                    registerForm.classList.add('hidden');

                    loginTab.classList.add('text-primary', 'border-primary');
                    loginTab.classList.remove('text-on-surface-variant', 'border-transparent');

                    registerTab.classList.remove('text-primary', 'border-primary', 'border-b-2');
                    registerTab.classList.add('text-on-surface-variant', 'border-transparent');
                } else {
                    registerForm.classList.remove('hidden');
                    loginForm.classList.add('hidden');

                    registerTab.classList.add('text-primary', 'border-primary', 'border-b-2');
                    registerTab.classList.remove('text-on-surface-variant', 'border-transparent');

                    loginTab.classList.remove('text-primary', 'border-primary');
                    loginTab.classList.add('text-on-surface-variant', 'border-transparent');
                }
            }

            // function validateRegistration() {
            //     const studentIdInput = document.getElementById('regStudentId');
            //     const errorText = document.getElementById('regIdError');

            //     // Simple validation example: ID must be 8 digits
            //     const isValid = /^\d{8}$/.test(studentIdInput.value);

            //     if (!isValid) {
            //         studentIdInput.classList.remove('border-outline-variant', 'focus:border-primary', 'focus:ring-primary/20');
            //         studentIdInput.classList.add('border-error', 'focus:border-error', 'focus:ring-error/20');
            //         errorText.classList.remove('hidden');
            //     } else {
            //         studentIdInput.classList.add('border-outline-variant', 'focus:border-primary', 'focus:ring-primary/20');
            //         studentIdInput.classList.remove('border-error', 'focus:border-error', 'focus:ring-error/20');
            //         errorText.classList.add('hidden');
            //         // Proceed with registration
            //         console.log('Valid registration');
            //     }
            // }
        </script>
</body></html>




<!-- <form action="{{ route('users.login') }}" method="post" class="shadow-lg rounded-lg p-4 w-full max-w-[500px] mx-auto">
    @csrf {{-- Sécurité obligatoire pour les formulaires Laravel --}}

    <h1 class="text-2xl text-center font-bold capitalize">connexion</h1>

    <div style="margin-top: 10px;">
        <label for="email" class="w-full">E-mail</label>
        <input
        class="w-full p-1 border focus:border-2 focus:border-primary outline-0"
        type="email"
        name="email"
        value="{{ old('email') }}" id="email" placeholder="Email" />
        @error('email')
        <span style="color: red; display: block;">{{ $message }}</span>
        @enderror
    </div>

    <div style="margin-top: 10px;">
        <label for="password" class="w-full">Password</label>
        <input type="password" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="password" id="password" placeholder="Password" />
        @error('password')
        <span style="color: red; display: block;">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-5 text-center">
        <button type="submit" class="p-2 bg-primary text-white w-full">Soumettre</button>
    </div>

    <p class="mt-2">Vous n'avez pas de compte ? <a href="{{ route('users.register') }}" class="text-primary font-semibold underline">S'inscrire</a></p>
</form> -->
