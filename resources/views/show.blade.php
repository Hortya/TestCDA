@extends('main')
@section('ttl', $book->name)
@section('content')
    <h2>Résumé</h2>
    <p class='summary'>{{$book->summary}}</p>
    <p>Au prix de {{$book->price}}€</p>
@endsection