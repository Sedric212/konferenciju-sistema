@extends('layouts.app')

@section('title', __('messages.manage_conferences'))

@section('content')
    <h1>{{ __('messages.manage_conferences') }}</h1>

        <p>
        <a href="{{ route('admin.conferences.create') }}">
            {{ __('messages.create_conference') }}
        </a>
    </p>

    <ul>
        @foreach ($conferences as $conference)
            <li>
                {{ $conference['title'] }} —
                {{ $conference['date'] }} {{ $conference['time'] }}
            </li>
        @endforeach
    </ul>
@endsection