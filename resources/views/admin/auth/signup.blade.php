@extends('admin.auth.auth')
@section('heading') Create admin account @endsection
@section('subtitle') Fill in the details below to add a new admin. @endsection
          @section('content')
@if ($errors->any())
    <div class="sh-alert sh-alert--error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form enctype="multipart/form-data" action="{{ route('admin.signup.store') }}" method="POST">
                @csrf
                <div class="sh-field">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your Name"
                        required
                        autofocus>
                </div>

                <div class="sh-field">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="you@example.com"
                        required>
                </div>

                <div class="sh-field">
                    <label for="contact_number">Contact Number</label>
                    <input
                        type="tel"
                        id="contact_number"
                        name="contact_number"
                        placeholder="9876543210"
                        pattern="[0-9]*"
                        inputmode="numeric"
                        required>
                </div>

                <div class="sh-field">
                    <label for="profile_picture">Profile Picture</label>
                    <div class="sh-file">
                        <span class="sh-file__avatar">◎</span>
                        <div class="sh-file__input-wrap">
                            <input
                                type="file"
                                id="profile_picture"
                                name="profile_picture"
                                accept="image/*">
                        </div>
                    </div>
                    <p class="sh-hint">JPG or PNG, up to 2MB.</p>
                </div>

                <div class="sh-row-2">
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

                {{-- <div class="sh-field">
                    <label for="status">Status</label>
                    <select id="status" name="status">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div> --}}

                <div class="sh-auth-row">
                    <label class="sh-checkbox">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="auth.signin" class="sh-auth-link">Already have an account?</a>
                </div>

                <button type="submit" class="sh-btn sh-btn--primary sh-btn--block">
                    Create Account
                </button>
            </form>

            <div class="sh-auth-footer">
                &copy; 2026 SocialHub &middot; Admin Panel
            </div>
        </div>
    </div>
@endsection