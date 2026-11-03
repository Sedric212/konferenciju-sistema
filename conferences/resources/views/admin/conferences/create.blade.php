@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
    <h1>{{ __('messages.create_conference') }}</h1>

    <form method="post" action="{{ route('admin.conferences.store') }}">
        @csrf
        @include('admin.conferences.fields')

        <button class="btn btn-primary" type="submit">{{ __('messages.save') }}</button>
    </form>

    <p>
        <a href="{{ route('admin.conferences.index') }}">
            {{ __('messages.back_to_conferences') }}
        </a>
    </p>
@endsection
