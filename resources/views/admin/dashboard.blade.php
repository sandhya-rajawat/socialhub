{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layouts.app')

@section('content')
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px;">
        <div class="sh-card">
            <span style="font-family: var(--sh-font-mono); font-size: 11px; color: var(--sh-text-faint); text-transform: uppercase;">Connected Accounts</span>
            <div style="font-family: var(--sh-font-display); font-size: 28px; font-weight: 700; margin-top: 8px;">12</div>
        </div>
        <div class="sh-card">
            <span style="font-family: var(--sh-font-mono); font-size: 11px; color: var(--sh-text-faint); text-transform: uppercase;">Scheduled Posts</span>
            <div style="font-family: var(--sh-font-display); font-size: 28px; font-weight: 700; margin-top: 8px;">34</div>
        </div>
        <div class="sh-card">
            <span style="font-family: var(--sh-font-mono); font-size: 11px; color: var(--sh-text-faint); text-transform: uppercase;">Active Clients</span>
            <div style="font-family: var(--sh-font-display); font-size: 28px; font-weight: 700; margin-top: 8px;">7</div>
        </div>
        <div class="sh-card">
            <span style="font-family: var(--sh-font-mono); font-size: 11px; color: var(--sh-orange); text-transform: uppercase;">Failed Publishes</span>
            <div style="font-family: var(--sh-font-display); font-size: 28px; font-weight: 700; margin-top: 8px; color: var(--sh-danger);">2</div>
        </div>
    </div>

    <div class="sh-card">
        <h2 style="font-family: var(--sh-font-display); font-size: 16px; margin: 0 0 4px;">Recent Activity</h2>
        <p style="color: var(--sh-text-muted); font-size: 13px; margin: 0;">Post publishing history and team actions will appear here.</p>
    </div>
@endsection
