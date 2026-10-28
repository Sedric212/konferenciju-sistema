@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')
    <h1>{{ __('messages.app_name') }}</h1>

    <p>
        {{ __('messages.student_name') }},
        {{ __('messages.student_group') }}
    </p>

    <ul>
        <li>
            <a href="{{ route('client.index') }}">
                {{ __('messages.client') }}
            </a>
        </li>
        <li>
            <a href="{{ route('employee.index') }}">
                {{ __('messages.employee') }}
            </a>
        </li>
        <li>
            <a href="{{ route('admin.index') }}">
                {{ __('messages.admin') }}
            </a>
        </li>
    </ul>
@endsection