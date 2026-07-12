{{--
    resources/views/admin/layouts/app.blade.php
    Master layout for the admin panel.
    Every admin page extends this: @extends('admin.layouts.app')
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SocialHub Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">

        @stack('styles')
</head>
<body>
    <div class="sh-app">
        @include('admin.partials.sidebar')

        <div class="sh-main">
            @include('admin.partials.header')

            <main class="sh-content">
                @if (session('success'))
                    <div class="sh-card" style="border-color: var(--sh-success); margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="sh-card" style="border-color: var(--sh-danger); margin-bottom: 20px;">
                        <ul style="margin: 0; padding-left: 18px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>

            @include('admin.partials.footer')
        </div>
    </div>

    @stack('scripts')
</body>
</html>