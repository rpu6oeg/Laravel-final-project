@extends('layouts.index')

@section('page_title', 'Registration')

@section('content')
    <section class="registration">
        <div class="osnova-registration">
            <h1 class="title__page">
                Регистрация
            </h1>
            <form action="{{route('register')}}" class="registration-form" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Введите имя">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="password" name="repeat_password" placeholder="Повторите пароль">
            <input type="submit" value="Зарегистрироваться" class="registration-button">

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
