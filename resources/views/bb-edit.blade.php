
@extends('layouts.app')

@section('title', 'Добавление нового объявления')

@section('content')

    <form action=" {{ route('bb.update', ['bb' => $bb->id]) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtTitle" class=form-label>Товар</label>
            <input type="text" name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value=" {{ old('title', $bb->title) }} ">
            @error('title')
                <div class="invalid-feedback"> {{ $message }}  </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtContent" class=form-label>Описание</label>
            <textarea type="text" name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3"> {{ old('content', $bb->content) }} </textarea>
            @error('content')
                <div class="invalid-feedback"> {{ $message }}  </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtPrice" class=form-label>Цена</label>
            <input type="text" name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value=" {{ old('price', $bb->price) }} ">
            @error('price')
                <div class="invalid-feedback"> {{ $message }}  </div>
            @enderror
        </div>
        <input type="submit" value="Сохранить" class="btn btn-primary">
    </form>

@endsection('content')
