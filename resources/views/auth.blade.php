@extends('layouts.index')

@section('page_title', 'Registration')

@section('content')
    <section class="registration">
        <div class="osnova-registration">
            <h1 class="title__page">
                Авторизация
            </h1>
            <form action="{{route('auth')}}" class="registration-form" method="POST">
                @csrf
                <input type="text" value="{{old('username')}}" name="username" placeholder="Введите имя">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="submit" value="Войти" class="registration-button">

                @if($errors->any())
                    <li class="errors">
                        @foreach($errors->all() as $error)
                            <p>
                                {{$error}}
                            </p>
                        @endforeach
                    </li>
                @endif
            </form>
        </div>
    </section>

@endsection

