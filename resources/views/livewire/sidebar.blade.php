<div class="w-64 bg-primary flex flex-col">
    <!-- Sidebar Menu -->
    <ul class="flex-1 nav flex-column p-3">
        <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link text-white font-bold {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/users" class="nav-link text-white font-bold {{ request()->is('*users*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Users
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/patients" class="nav-link text-white font-bold {{ request()->is('*patients*') ? 'active' : '' }}">
                <i class="bi bi-person-square mr-2"></i>Patients
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/dentists" class="nav-link text-white font-bold {{ request()->is('*dentists*') ? 'active' : '' }}">
                <i class="bi bi-person-vcard"></i> Dentists
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/schedules" class="nav-link text-white font-bold {{ request()->is('*schedules*') ? 'active' : '' }}">
                <i class="bi bi-calendar-date"></i> Schedules
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/appointments" class="nav-link text-white font-bold {{ request()->is('*appointments*') ? 'active' : '' }}">
                <i class="bi bi-file-medical"></i> Appointments
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/medical-histories" class="nav-link text-white font-bold {{ request()->is('*medical-histories*') ? 'active' : '' }}">
                <i class="bi bi-clipboard2-pulse"></i> Medical Histories
            </a>
        </li>
    </ul>

    <div class="flex items-center gap-2 pl-5">
        <i class="bi bi-box-arrow-left text-white font-bold"></i>
        <button wire:click="logout" class="text-white font-bold text-start">Logout</button>
    </div>
</div>