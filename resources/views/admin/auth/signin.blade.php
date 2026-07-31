@extends('admin.auth.auth-layout')
@section('heading') Sign in @endsection
@section('subtitle') Enter your credentials to access the admin panel. @endsection

@section('content')
@if( $errors->any())
    <div class="sh-alert sh-alert--error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.signin.login') }}" method="POST">
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
             <div class="sh-field">
                        <label for="password_confirmation">Confirm Password</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="••••••••"
                            required>
                    </div>
    </div>

    <div class="sh-auth-row">
        <label class="sh-checkbox">
            <input type="checkbox" name="remember">
            Remember me
        </label>
          <a href="{{ route('admin.signup') }}" class="sh-auth-link">create account</a>
        <a href="#" class="sh-auth-link">Forgot password?</a>
      
    </div>

    <button type="submit" class="sh-btn sh-btn--primary sh-btn--block">
        Sign in
    </button>
</form>
@endsection