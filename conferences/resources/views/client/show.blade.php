@extends('layouts.app')

@section('title', $conference['title'])

@section('content')
    <h1>{{ $conference['title'] }}</h1>
    <p>{{ $conference['description'] }}</p>

    <dl>
        <dt>{{ __('messages.speaker') }}</dt>
        <dd>{{ $conference['speaker'] }}</dd>

        <dt>{{ __('messages.date') }}</dt>
        <dd>{{ $conference['date'] }}</dd>

        <dt>{{ __('messages.time') }}</dt>
        <dd>{{ $conference['time'] }}</dd>

        <dt>{{ __('messages.address') }}</dt>
        <dd>{{ $conference['address'] }}</dd>
    </dl>

    <a href="{{ route('client.index') }}">
        {{ __('messages.back_to_conferences') }}
    </a>
@endsection