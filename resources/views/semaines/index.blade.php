@extends('layouts.appNew')

@section('content')
    <h1 class="">Liste des semaines</h1>
    @foreach ($semaines as $semaine)
        <p>{{ $semaine->libelle }}</p>
    @endforeach
@endsection