<div class="w-64 bg-primary flex flex-col">
    <!-- Sidebar Menu -->
    <ul class="nav flex-column p-3 flex-1">
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

    <div class="flex items-center gap-2 pl-5">
        <i class="bi bi-box-arrow-left text-white font-bold"></i>
        <button wire:click="logout" class="text-white font-bold text-start">Logout</button>
    </div>
</div>