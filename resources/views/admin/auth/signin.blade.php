@extends('admin.auth.auth')
@section('heading') Sign in @endsection
@section('subtitle') Enter your credentials to access the admin panel. @endsection

@section('content')
       <form action="{{ route('admin.signin.store') }}" method="POST">
    @csrf
    <div class="sh-row-2">
        <div class="sh-field">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="you@example.com"
                required
                autofocus>
        </div>

        <div class="sh-field">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required>
        </div>
    </div>

    <div class="sh-auth-row">
        <label class="sh-checkbox">
            <input type="checkbox" name="remember">
            Remember me
        </label>
        <a href="#" class="sh-auth-link">Forgot password?</a>
    </div>

    <button type="submit" class="sh-btn sh-btn--primary sh-btn--block">
        Sign in
    </button>
</form>
@endsection