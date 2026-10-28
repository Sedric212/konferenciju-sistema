@extends('layouts.app')

@section('title', __('messages.employee'))

@section('content')
    <h1>{{ __('messages.employee') }}</h1>
    <h2>{{ __('messages.all_conferences') }}</h2>

    <table>
        <thead>
            <tr>
                <th scope="col">{{ __('messages.conference_title') }}</th>
                <th scope="col">{{ __('messages.date') }}</th>
                <th scope="col">{{ __('messages.time') }}</th>
                <th scope="col">{{ __('messages.address') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($conferences as $conference)
                <tr>
                    <td>
    <a href="{{ route('employee.show', ['id' => $conference['id']]) }}">
        {{ $conference['title'] }}
    </a>
</td>
                    <td>{{ $conference['date'] }}</td>
                    <td>{{ $conference['time'] }}</td>
                    <td>{{ $conference['address'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection