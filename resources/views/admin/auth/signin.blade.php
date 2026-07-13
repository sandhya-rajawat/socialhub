<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in — SocialHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('css/admin/auth.css') }}">
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

            <h1 class="sh-auth-title">Sign in</h1>
            <p class="sh-auth-subtitle">Enter your credentials to access the admin panel.</p>

            <form>
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

            <div class="sh-auth-footer">
                &copy; 2026 SocialHub &middot; Admin Panel
            </div>
        </div>
    </div>
</body>
</html>


