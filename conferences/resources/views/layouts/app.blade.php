<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('messages.app_name'))</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
            <a href="{{ route('client.index') }}">{{ __('messages.client') }}</a>
            <a href="{{ route('employee.index') }}">{{ __('messages.employee') }}</a>
            <a href="{{ route('admin.index') }}">{{ __('messages.admin') }}</a>

            <span>{{ __('messages.student_name') }}</span>
            <button type="button" disabled>
                {{ __('messages.logout') }}
            </button>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>