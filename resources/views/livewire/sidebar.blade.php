<div class="w-64 bg-primary">
    <!-- Sidebar Menu -->
    <ul class="nav flex-column p-3">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white font-bold {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/users" class="nav-link text-white font-bold {{ request()->is('users*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a href="/patients" class="nav-link text-white font-bold {{ request()->is('patients*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Patients
            </a>
        </li>
        <li class="nav-item">
            <a href="/dentists" class="nav-link text-white font-bold {{ request()->is('dentists*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Dentists
            </a>
        </li>
        <li class="nav-item">
            <a href="/schedules" class="nav-link text-white font-bold {{ request()->is('schedules*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Schedules
            </a>
        </li>
        <li class="nav-item">
            <a href="/settings" class="nav-link text-white font-bold {{ request()->is('settings') ? 'active' : '' }}">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
        </li>
    </ul>
</div>