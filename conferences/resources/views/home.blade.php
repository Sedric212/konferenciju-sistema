@extends('layouts.app')
@section('title', __('messages.home'))
@section('content')
<p class="eyebrow">{{ __('messages.portal') }}</p>
<h1>{{ __('messages.app_name') }}</h1>
<p class="lead">{{ __('messages.pick_role') }}</p>
<div class="role-grid">
@foreach (['client','employee','admin'] as $role)
<a class="role-card" href="{{ route($role.'.index') }}"><small>0{{ $loop->iteration }}</small><h2>{{ __('messages.'.$role) }}</h2><p>{{ __('messages.'.$role.'_intro') }}</p><span aria-hidden="true">→</span></a>
@endforeach
</div>
<p class="credit">{{ __('messages.student_name') }} · {{ __('messages.student_group') }}</p>
@endsection
