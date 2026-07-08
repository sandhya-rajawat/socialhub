<header class="sh-topbar">
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

    <div class="sh-topbar__right">
        <div class="sh-search">
            <span class="sh-search__icon">⌕</span>
            <input
                type="text"
                placeholder="Search posts, clients, accounts…"
                class="sh-search__input">
        </div>

        <button class="sh-topbar__icon-btn" aria-label="Notifications">
            <span>◈</span>
            <span class="sh-topbar__badge">3</span>
        </button>

        <div class="sh-user">
            <div class="sh-user__avatar">A</div>

            <div class="sh-user__meta">
                <span class="sh-user__name">Admin</span>
                <span class="sh-user__role">admin</span>
            </div>

            <button type="button" class="sh-user__logout" title="Logout">
                ⏻
            </button>
        </div>
    </div>
</header>