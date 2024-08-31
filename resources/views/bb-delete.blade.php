@extends('layouts.app')

@section('title', 'Добавление нового объявления')

@section('content')

    <form action=" {{ route('bb.destroy', ['bb' => $bb->id]) }} " method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить" class="btn btn-primary">
    </form>

@endsection('content')
