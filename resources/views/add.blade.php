@extends('layouts.index')

@section('page_title', 'Add books')

@section('content')
    <section class="registration">
        <div class="osnova-registration">
            <h1 class="title__page">
                Добавление книги
            </h1>
            <form action="{{route('book.create')}}" class="registration-form" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Введите заголовок">
                <input type="text" name="anons_title" placeholder="Анонимный заголовок">
                <textarea type="text" name="description" placeholder="Описание"></textarea>
                <input type="file" name="file">
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category['id']}}">
                            {{$category['name']}}
                        </option>
                    @endforeach
                </select>
                <input type="submit" value="Добавить товар" class="registration-button">
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

