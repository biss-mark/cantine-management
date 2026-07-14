@extends('layouts.appRegisterUser')

@section('content')
<!-- <div class="hidden animate-fade-in" id="registerForm">
    <h2 class="font-headline-md text-headline-md text-on-surface mb-sm">Create Account</h2>
    <form class="space-y-sm">
        <div class="grid grid-cols-2 gap-sm">
            <div class="space-y-base">
                <label class="font-label-md text-label-md text-on-surface-variant" for="regFirstName">First Name</label>
                <input class="w-full px-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="regFirstName" placeholder="Jane" type="text" />
            </div>
            <div class="space-y-base">
                <label class="font-label-md text-label-md text-on-surface-variant" for="regLastName">Last Name</label>
                <input class="w-full px-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="regLastName" placeholder="Doe" type="text" />
            </div>
        </div>
        <div class="space-y-base">
            <label class="font-label-md text-label-md text-on-surface-variant" for="regStudentId">Student ID (Matricule)</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">badge</span>
                <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="regStudentId" placeholder="Enter your ID" type="text" />
            </div>
            <p class="hidden font-label-sm text-label-sm text-error mt-1" id="regIdError">Student ID must be 8 digits.</p>
        </div>
        <div class="space-y-base">
            <label class="font-label-md text-label-md text-on-surface-variant" for="regPassword">Password</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">lock</span>
                <input class="w-full pl-10 pr-3 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="regPassword" placeholder="Create a password" type="password" />
            </div>
        </div>
        <button class="w-full mt-md bg-primary text-on-primary font-label-md text-label-md py-3 rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm" type="submit">
            Register
        </button>
    </form>
</div> -->













<form action="{{ route('users.store') }}" method="post" class="shadow-lg rounded-lg p-4 w-full max-w-[500px] mx-auto">
    @csrf {{-- NE PAS OUBLIER : Sécurité obligatoire pour les formulaires Laravel --}}

    <h1 class="text-2xl text-center font-bold capitalize">inscription</h1>

    <div class="flex gap-2">
        <div>
            <label for="name" class="w-full">Name</label>
            <input type="text" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="name" id="name" value="{{ old('name') }}" placeholder="Name" />
            @error('name')
            <span style="color: red; display: block;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="name" class="w-full">Sex</label>
            <input type="text" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="sex" value="{{ old('sex') }}" id="sex" placeholder="Sex (F / M)" />
            @error('sex')
            <span style="color: red; display: block;">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div style="margin-top: 10px;">
        <label for="name" class="w-full">Email</label>
        <input type="email" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="email" value="{{ old('email') }}" id="email" placeholder="Email" />
        @error('email')
        <span style="color: red; display: block;">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex gap-2">
    <div style="margin-top: 10px;">
        <label for="name" class="w-full">Password</label>
        <input type="password" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="password" id="password" placeholder="Password" />
        @error('password')
        <span style="color: red; display: block;">{{ $message }}</span>
        @enderror
    </div>

    <div style="margin-top: 10px;">
        <label for="name" class="w-full">Confirm Password</label>
        <input type="password" class="w-full p-1 border focus:border-2 focus:border-primary outline-0" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
    </div>
    </div>

    <div class="mt-5 text-center">
        <button type="submit" class="p-2 bg-primary text-white w-full">Soumettre</button>
    </div>

    <p class="mt-2">Vous avez deja un compte ? <a href="{{ route('users.login') }}" class="text-primary font-semibold underline">Se connecter</a></p>
</form>

@endsection