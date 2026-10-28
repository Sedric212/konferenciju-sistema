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

    <h2>{{ __('messages.participants') }}</h2>

    @if (count($conference['participants']) > 0)
        <table>
            <thead>
                <tr>
                    <th scope="col">{{ __('messages.first_name') }}</th>
                    <th scope="col">{{ __('messages.last_name') }}</th>
                    <th scope="col">{{ __('messages.email') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conference['participants'] as $participant)
                    <tr>
                        <td>{{ $participant['first_name'] }}</td>
                        <td>{{ $participant['last_name'] }}</td>
                        <td>{{ $participant['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>{{ __('messages.no_participants') }}</p>
    @endif

    <a href="{{ route('employee.index') }}">
        {{ __('messages.back_to_conferences') }}
    </a>
@endsection