<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') · {{ __('messages.app_name') }}</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<header><div class="shell topbar">
<a class="brand" href="{{ route('home') }}"><span aria-hidden="true">◉</span> {{ __('messages.app_name') }}</a>
<nav aria-label="{{ __('messages.navigation') }}">
@foreach (['home'=>'home','client'=>'client.index','employee'=>'employee.index','admin'=>'admin.index'] as $label=>$target)
<a href="{{ route($target) }}" @if(request()->routeIs($label, $label.'.*')) aria-current="page" @endif>{{ __('messages.'.$label) }}</a>
@endforeach
</nav>
@php($person = \App\Data\UserData::find(request()->routeIs('admin.*') ? \App\Data\UserData::ADMIN : (request()->routeIs('employee.*') ? \App\Data\UserData::EMPLOYEE : \App\Data\UserData::CLIENT)))
<div class="identity">{{ $person['first_name'] }} {{ $person['last_name'] }} <button disabled class="btn btn-sm btn-outline-secondary">{{ __('messages.logout') }}</button></div>
</div></header>
<main class="shell stage">
@if(session('status')) <p class="alert alert-success" role="status">{{ session('status') }}</p> @endif
@yield('content')
</main>
</body></html>
