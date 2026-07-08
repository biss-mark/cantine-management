@extends('layouts.appNew')

@section('content')
    {{-- @dd({{ $semaine->libelle }}) --}}
    <form action="{{ route('semaines.update', $semaine) }}" method="post" class="">
        @method('PUT')
        <input type="text" name="libelle" id="libelle" value="{{$semaine->libelle}}" class="" />
        <button type="submit">Ajouter</button>
    </form>

@endsection