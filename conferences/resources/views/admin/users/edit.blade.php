@extends('layouts.app')
@section('title', __('messages.edit_user'))
@section('content')
<h1>{{ __('messages.edit_user') }}</h1>
<form method="post" action="{{ route('admin.users.update',$id) }}">@csrf @method('PUT')
@foreach(['first_name','last_name','email'] as $key)
<p><label for="{{ $key }}">{{ __('messages.'.$key) }}</label>
<input class="form-control" id="{{ $key }}" name="{{ $key }}" type="{{ $key==='email'?'email':'text' }}" value="{{ old($key,$user[$key]) }}" required>
@error($key)<strong class="text-danger">{{ $message }}</strong>@enderror</p>
@endforeach
<button class="btn btn-primary">{{ __('messages.save') }}</button></form>
<a href="{{ route('admin.users.index') }}">{{ __('messages.manage_users') }}</a>
@endsection
