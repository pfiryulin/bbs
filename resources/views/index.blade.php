
@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<section>
    @if (count($bbs) > 0)
        <table>
                <tr>
                    <th>Товар</th>
                    <th>Описание</th>
                    <th>Цена</th>
                </tr>
            @foreach ($bbs as $bb)
                <tr>
                    <td><h4> {{ $bb->title}} </h4></td>
                    <td> {{ $bb->content }} </td>
                    <td> <a href="  {{ route('detail', ['bb' => $bb->id]) }}">{{ $bb->price }}</a> </td>
                    <td>
                        <a href="{{ route('author', ['userid' => $bb->user->id]) }}"> {{ $bb->user->name }} </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</section>
@endsection('content')
