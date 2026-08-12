{{-- ============================================
     TOPBAR
============================================ --}}
<header class="sh-topbar">

    {{-- LEFT: Sidebar toggle + Title --}}
    <div class="sh-topbar__left">
        <button
            class="sh-topbar__menu-toggle"
            type="button"
            aria-label="Toggle sidebar"
            onclick="document.body.classList.toggle('sh-sidebar-open')">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <h1 class="sh-topbar__title">Dashboard</h1>
    </div>

    {{-- RIGHT: Search + Account dropdown --}}
    <div class="sh-topbar__right">

        {{-- SEARCH --}}
        <div class="sh-search">
            <span class="sh-search__icon">⌕</span>
            <input
                type="text"
                placeholder="Search posts, clients, accounts…"
                class="sh-search__input">
        </div>

        {{-- ACCOUNT --}}
        <div class="sh-user" style="position: relative;">

            @php
                $admin = Auth::guard('admin')->user();

                $firstInitial = substr($admin->name, 0, 1);
                $lastInitial  = !empty($admin->last_name) ? substr($admin->last_name, 0, 1) : '';

                $initials = strtoupper($firstInitial . $lastInitial);
            @endphp

            {{-- AVATAR TRIGGER --}}
            <button
                type="button"
                class="admin-avatar"
                onclick="document.getElementById('accountMenu').classList.toggle('sh-account-menu--open')">
                {{ $initials }}
            </button>

            {{-- DROPDOWN --}}
            <div id="accountMenu" class="sh-account-menu">

                <div class="sh-account-menu__email">
                    {{ $admin->email }}
                </div>

                <div class="sh-account-menu__divider"></div>

                <div class="sh-account-menu__row">
                    <i class="ti ti-user"></i>
                    <span>{{ $admin->name }}</span>
                </div>

                <a href="#" class="sh-account-menu__item">
                    <i class="ti ti-lock"></i>
                    <span>Change password</span>
                </a>

                <div class="sh-account-menu__divider"></div>

                <a href="#" class="sh-account-menu__item sh-account-menu__item--danger">
                    <i class="ti ti-logout"></i>
                    <span>Log out</span>
                </a>

            </div>

        </div>

    </div>

</header>

<script>
    document.addEventListener('click', function (e) {
        var menu = document.getElementById('accountMenu');
        var trigger = document.querySelector('.admin-avatar');
        if (!menu || !trigger) return;
        if (!menu.contains(e.target) && !trigger.contains(e.target)) {
            menu.classList.remove('sh-account-menu--open');
        }
    });
</script>