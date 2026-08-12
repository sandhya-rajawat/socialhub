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
        /* Page wrapper — isse card screen par stable/centered rahega */
.sh-auth-page {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    padding: 24px;
    overflow-x: hidden; /* horizontal jump/scroll rokta hai */
}

/* Card ko fixed max-width do, warna content ke hisaab se size change hoke "move" jaisa lagta hai */
.sh-auth-card {
    width: 100%;
    max-width: 637px;
    background: var(--sh-surface);
    border: 1px solid var(--sh-border);
    border-radius: 12px;
    padding: 32px 28px;
}

/* Row layout — email/password same row me */
.sh-row-2 {
    display: flex;
    gap: 16px;
    width: 100%;
}

.sh-row-2 .sh-field {
    flex: 1 1 0;
    min-width: 0; /* important: isse flex item overflow nahi karega aur input squeeze ho jayega properly */
}

.sh-field input {
    width: 100%;
    box-sizing: border-box;
}

/* Responsive — chhoti screen par stack ho jaye */
@media (max-width: 480px) {
    .sh-row-2 {
        flex-direction: column;
        gap: 0;
    }
}
    </style>
    @stack('styles')
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

            <h1 class="sh-auth-title">@yield('heading')</h1>
            <p class="sh-auth-subtitle">@yield('subtitle')</p>

             @yield('content')

            {{-- <div class="sh-auth-footer">
                &copy; 2026 SocialHub &middot; Admin Panel
            </div> --}}
        </div>
    </div>
    @stack('scripts')
    <script src="{{ asset('js/admin/user-dropdown.js') }}"></script>
</body>
</html>