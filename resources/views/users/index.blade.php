@extends('layouts.appRegisterUser')

@section('content')
<div class="">
    <h1>users</h1>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
@endsection