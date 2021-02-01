@extends('layout')
@section('title')Отзывы@endsection
@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        {{csrf_field()}}
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Ваше сообщение"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1>Все отзывы</h1>
    <div class="alert alert-warning">

            @foreach($reviews->all() as $review)
            <div class="pricing-header px-3 mx-auto text-left">
                <br>
                <h3> {{$review['subject']}}</h3>
                <b> {{$review['message']}}<br></b>
                <p class="text-right"><i>{{$review['email']}}</i></p>
                <hr>
            </div>
            @endforeach
    </div>

@endsection