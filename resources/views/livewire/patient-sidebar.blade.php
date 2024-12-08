<div class="w-64 bg-primary">
    <!-- Sidebar Menu -->
    <ul class="nav flex-column p-3">
        <li class="nav-item">
            <a href="/patient/appointments" class="nav-link text-white font-bold {{ request()->is('appointments*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Appointments
            </a>
        </li>
        <li class="nav-item">
            <a href="/patient/medical-histories" class="nav-link text-white font-bold {{ request()->is('medical-histories*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i> Medical Histories
            </a>
        </li>
    </ul>
</div>