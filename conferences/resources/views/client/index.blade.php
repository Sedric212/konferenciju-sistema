@extends('layouts.app')
@section('title', __('messages.upcoming'))
@section('content')
<h1>{{ __('messages.upcoming') }}</h1>
@forelse($conferences as $conference)
<article class="event-card"><p class="eyebrow">{{ $conference['date'] }} · {{ $conference['time'] }}</p>
<h2>{{ $conference['title'] }}</h2><p>{{ $conference['description'] }}</p>
<div class="actions"><a class="btn btn-outline-primary" href="{{ route('client.show',$conference['id']) }}">{{ __('messages.view_conference') }}</a>
@include('client.register')</div></article>
@empty <p>{{ __('messages.empty') }}</p> @endforelse
@endsection
