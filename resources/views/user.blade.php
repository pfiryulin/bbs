@extends('layouts.app')

@section('title', $userid->id)

@section('content')

        <section class="subject">
            {{-- <h1> {{ $bb->title }} </h1>
            <p> {{ $bb->content }} </p>
            <p> {{ $bb->price }} </p>
            <p>Автор: {{ $bb->user->name }}</p> --}}
            <p>{{ $userid->name }}</p>
            @foreach ($userid->bbs as $bb)
                <p>
                    {{ $bb->title }} | {{ $bb->content }} | {{ $bb->price }}
                </p>
            @endforeach
            <p></p>
        </section>
        <a href="{{ route('index') }}"> На главную </a>
@endsection('content')
