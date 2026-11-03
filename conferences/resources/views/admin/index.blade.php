@extends('layouts.app')

@section('title', __('messages.admin'))

@section('content')
    <h1>{{ __('messages.admin') }}</h1>
        <p>
        <a href="{{ route('admin.conferences.index') }}">
            {{ __('messages.manage_conferences') }}
        </a>
    </p>
@endsection