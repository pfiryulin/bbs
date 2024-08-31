@extends('layouts.app')

@section('title', $bb->title)

@section('content')

        <section class="subject">
            <h1> {{ $bb->title }} </h1>
            <p> {{ $bb->content }} </p>
            <p> {{ $bb->price }} </p>
            <p>Автор: {{ $bb->user->name }}</p>

        </section>
        <a href="{{ route('index') }}"> На главную </a>
@endsection('content')

