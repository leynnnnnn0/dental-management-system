<div class="sidebar bg-dark text-white" style="width: 250px; min-height: 100vh;">
    <!-- Sidebar Header -->
    <div class="p-3 border-bottom">
        <h5 class="text-white mb-0">My Dental System</h5>
    </div>

    <!-- Sidebar Menu -->
    <ul class="nav flex-column p-3">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white {{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/users" class="nav-link text-white {{ request()->is('users') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a href="/settings" class="nav-link text-white {{ request()->is('settings') ? 'active' : '' }}">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
        </li>
    </ul>
</div>