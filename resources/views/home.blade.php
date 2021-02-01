@extends('layout')
@section('title')Главная страница@endsection
@section('main_content')
    <main role="main">

        <div class="jumbotron bg-warning">
            <div class="container"></div>
            <h1 class="display-3">Главная страница</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, itaque!</p>
            <p><a class="btn btn-danger btn-lg" href="/review" role="button">Отзывы >></a></p>
        </div>

        <div class="container">
            <div class="raw d-flex flex-column flex-md-row" >
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos mollitia voluptatibus? Alias, est, recusandae.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details >></a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos mollitia voluptatibus? Alias, est, recusandae.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details >></a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos mollitia voluptatibus? Alias, est, recusandae.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details >></a></p>
                </div>
            </div>
            <hr>
        </div>

    </main>
    @endsection