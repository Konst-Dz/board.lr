@extends('layout.app')
@section('title',$title)
@section('content')
    <h2>Обьявления:</h2><br>
    @foreach($ad as $item)
        <p>
            <h3><a href="/{{$item->id}}/">{{$item->name}}</a><br></h3>
            <b>Описание:</b><br>
            <div>{{$item->desc}}</div>
            <b>Цена:</b>{{$item->price}}
        </p>
        <hr>
    @endforeach
    <form action="" method="post">
        {{csrf_field()}}
        <input type="text" name="name" value=""> Название<br>
        <textarea name="desc" id="" cols="30" rows="10"></textarea> Описание<br>
        <input type="number" name="price"> Цена <br>
        <input type="submit" value="Отправить">
    </form>

@endsection

