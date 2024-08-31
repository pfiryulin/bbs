@extends('layouts.app')

@section('title', 'Мои объявления')

@section('content')

<div class="container">
    <p class="text-end"><a href=" {{ route('bb.create') }} ">Добавить объявление</a></p>
    <h2> {{ $user }} </h2>
    @if (count($bbs) > 0)
        <table class="table table-striped table-borderless">
            <tr>
                <td>Товар</td>
                <td>Цена</td>
                <td colspan="2"></td>
            </tr>
            @foreach ($bbs as $bb)
                <tr>
                    <td>
                        <h3> {{ $bb->title }} </h3>
                    </td>
                    <td> {{ $bb->price }} </td>
                    <td>
                        {{-- <a href="home/{{ $bb->id }}/edit">Изменить</a> --}}
                        <a href=" {{ route('bb.edit', ['bb' => $bb->id])}} ">Изменить</a>
                    </td>
                    <td>
                        <a href=" {{ route('bb.delete', ['bb' => $bb->id]) }} ">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

@endsection
