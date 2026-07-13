<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin Account — SocialHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/admin/auth.css') }}">

    <style>
        .sh-auth-brand {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .sh-auth-logo {
            font-family: var(--sh-font-mono);
            font-size: 24px;
            font-weight: 700;
            color: var(--sh-orange);
            margin-right: 12px;
        }

        .sh-auth-brand-text {
            display: flex;
            flex-direction: column;
        }

        .sh-auth-brand-label {
            font-family: var(--sh-font-mono);
            font-size: 11px;
            color: var(--sh-text-faint);
            text-transform: uppercase;
        }

        .sh-auth-brand-name {
            font-family: var(--sh-font-display);
            font-size: 20px;
            font-weight: 700;
            color: var(--sh-text);
        }
    </style>
</head>
<body>
    <div class="sh-auth-page">
        <div class="sh-auth-card">
            <div class="sh-auth-brand">
                <span class="sh-auth-logo">S/H</span>
                <div class="sh-auth-brand-text">
                    <span class="sh-auth-brand-label">workspace</span>
                    <span class="sh-auth-brand-name">socialhub</span>
                </div>
            </div>

            <h1 class="sh-auth-title">Create admin account</h1>
            <p class="sh-auth-subtitle">Fill in the details below to add a new admin.</p>

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

                    <a href="#" class="sh-auth-link">Already have an account?</a>
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
</body>
</html>