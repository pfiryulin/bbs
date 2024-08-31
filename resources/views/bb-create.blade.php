@extends('layouts.app')

@section('title', 'Добавление нового объявления')

@section('content')

    <form action=" {{ route('bb.store') }} " method="POST">
        @csrf
        <div class="mb-3">
            <label for="txtTitle" class=form-label>Товар</label>
            <input type="text" name="title" id="txtTitle" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtContent" class=form-label>Описание</label>
            <textarea type="text" name="content" id="txtContent" class="form-control" row="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="txtPrice" class=form-label>Цена</label>
            <input type="text" name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" value="Добавить" class="btn btn-primary">
    </form>

@endsection('content')
