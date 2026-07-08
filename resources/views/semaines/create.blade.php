@extends('layouts.appNew')

@section('content')
    <form action="{{ route('semaines.store') }}" method="post" class="">
        <input type="text" name="libelle" id="libelle" class="" />
        <button type="submit">Ajouter</button>
    </form>
@endsection