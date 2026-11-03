@extends('layouts.app')
@section('title', __('messages.edit_conference'))
@section('content')
<h1>{{ __('messages.edit_conference') }}</h1>
<form method="post" action="{{ route('admin.conferences.update',$conference['id']) }}">@csrf @method('PUT')
@include('admin.conferences.fields')
<button class="btn btn-primary">{{ __('messages.save') }}</button></form>
<a href="{{ route('admin.conferences.index') }}">{{ __('messages.back_to_conferences') }}</a>
@endsection
