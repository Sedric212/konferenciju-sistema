@extends('layouts.app')
@section('title', __('messages.manage_conferences'))
@section('content')
<h1>{{ __('messages.manage_conferences') }}</h1>
<p><a class="btn btn-primary" href="{{ route('admin.conferences.create') }}">{{ __('messages.create_conference') }}</a></p>
@forelse($conferences as $conference)
<article class="event-card"><p class="eyebrow">{{ $conference['date'] }} · {{ $conference['time'] }}</p>
<h2>{{ $conference['title'] }}</h2><p>{{ $conference['address'] }}</p>
<div class="actions"><a class="btn btn-outline-primary" href="{{ route('admin.conferences.edit',$conference['id']) }}">{{ __('messages.edit') }}</a>
@if(\App\Data\ConferenceData::upcoming($conference))
<form method="post" data-confirm="{{ __('messages.confirm_delete') }}" action="{{ route('admin.conferences.destroy',$conference['id']) }}">@csrf @method('DELETE')
<button class="btn btn-outline-danger">{{ __('messages.delete') }}</button></form>
@else <small>{{ __('messages.no_delete') }}</small> @endif</div></article>
@empty <p>{{ __('messages.empty') }}</p> @endforelse
@endsection
