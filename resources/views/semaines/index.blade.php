@extends('layouts.appNew')

@section('content')
    <h1 class="text-center text-red-800">Liste des semaines</h1>
    @foreach ($semaines as $semaine)
        <p>{{ $semaine->libelle }}</p>
    @endforeach
@endsection