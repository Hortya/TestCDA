@extends('main')
@section('ttl', 'Les beaux livres')
@section('content')
<ul>
@foreach ($books as $book)
<li>
    <a href="{{route('show', $book->id)}}">{{ $book->name }}</a>
    <p>Au prix de {{ $book->price }}€</p>
    <a href="{{ route('edit', $book->id)}}">Modifier</a>
</li>
@endforeach
</ul>
@endsection
