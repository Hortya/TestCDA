@extends('main')
@section('ttl', 'Une modification de livre ? SLURP')
@section('content')
    <h2>Voilà un {{ $book->name }} à modifier</h2>
    <x-form :action="'update-' . $book->id" :book="$book"/>
    <a href="{{ route('del', $book->id)}}">Supprimer</a>
@endsection