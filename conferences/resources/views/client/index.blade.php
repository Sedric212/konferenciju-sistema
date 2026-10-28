@extends('layouts.app')

@section('title', __('messages.client'))

@section('content')
    <h1>{{ __('messages.client') }}</h1>

    @foreach ($conferences as $conference)
        <article>
            <h2>{{ $conference['title'] }}</h2>
            <p>{{ $conference['description'] }}</p>
            <p>
                {{ $conference['date'] }}
                {{ $conference['time'] }}
            </p>
            <a href="{{ route('client.show', ['id' => $conference['id']]) }}">
        {{ __('messages.view_conference') }}
    </a>
        </article>
    @endforeach
@endsection