@extends('layout.app')
@section('title','Доска обьявлений')
@section('content')
    Категории: <br>
    @foreach($category as $item)
        <a href="/{{$item->slug}}/all/">{{$item->name}}</a><br>
    @endforeach
@endsection
