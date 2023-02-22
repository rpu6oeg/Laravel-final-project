@extends('layouts.index')

@section('page_title', 'Home Page')

@section('content')

    <div class="wrapper">
        <section class="post">
            <div class="osnova-post">
                @foreach($books as $book)
                <div class="one-post">
                    <div class="header-post">
                        <img src="{{$book->image_url}}" alt="post-image" class="post-image">
                    </div>
                    <div class="bottom-post">
                        <p class="title__post">
                            {{$book['title']}}
                        </p>
                        <p class="anons__post">
                            {{$book['anons_title']}}
                        </p>
                        <p class="category__post">{{$book->category()->name}}</p>
                    </div>
                    <div class="post-button">
                        <a href="#" class="button__post">More info</a>
                    </div>
                </div>
                @endforeach
            </div>
            @auth
            <div class="button-post-page">
                <a href="{{route('book.create')}}" class="post-button-page">Добавить товар</a>
            </div>
            @endauth
        </section>
    </div>
@endsection
