@extends('layouts.app')
@section('title', __('messages.admin'))
@section('content')
<h1>{{ __('messages.admin') }}</h1>
<div class="actions"><a class="btn btn-primary" href="{{ route('admin.conferences.index') }}">{{ __('messages.manage_conferences') }}</a>
<a class="btn btn-outline-primary" href="{{ route('admin.users.index') }}">{{ __('messages.manage_users') }}</a></div>
@endsection
