<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Patient;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public function render()
    {
        // Appointment Status Distribution (Pie Chart)
        $appointmentStatusChart = $this->createAppointmentStatusChart();

        // Dentist Workload (Pie Chart)
        $dentistWorkloadChart = $this->createDentistWorkloadChart();

        // Key Metrics
        $totalAppointments = Appointment::count();
        $pendingAppointments = Appointment::where('status', 'pending')->count();
        $approvedAppointments = Appointment::where('status', 'approved')->count();
        $patients = Patient::count();
        $dentists = Dentist::count();

        return view('livewire.dashboard', [
            'appointmentStatusChart' => $appointmentStatusChart,
            'dentistWorkloadChart' => $dentistWorkloadChart,
            'totalAppointments' => $totalAppointments,
            'pendingAppointments' => $pendingAppointments,
            'approvedAppointments' => $approvedAppointments,
            'patients' => $patients,
            'dentists' => $dentists
        ]);
    }

    private function createAppointmentStatusChart()
    {
        $statuses = Appointment::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get();

        $chart = new PieChartModel(); // Keep this as PieChartModel
        $chart->setTitle('Appointment Status Distribution');

        $colors = [
            'pending' => '#f6ad55',
            'approved' => '#48bb78',
            'completed' => '#4299e1',
            'cancelled' => '#f56565'
        ];

        foreach ($statuses as $status) {
            $chart->addSlice(
                ucfirst($status->status),
                $status->count,
                $colors[$status->status] ?? '#90cdf4'
            );
        }

        return $chart;
    }


    private function createDentistWorkloadChart()
    {
        $dentistWorkload = Appointment::select('dentist_id', DB::raw('count(*) as count'))
            ->groupBy('dentist_id')
            ->join('dentists', 'appointments.dentist_id', '=', 'dentists.id')
            ->get();

        $chart = new PieChartModel(); // Keep this as PieChartModel
        $chart->setTitle('Dentist Appointment Distribution');

        $colors = ['#48bb78', '#4299e1', '#f6ad55', '#fc8181', '#90cdf4'];

        foreach ($dentistWorkload as $index => $data) {
            $chart->addSlice(
                $data->name ?? "Dentist " . ($index + 1),
                $data->count,
                $colors[$index % count($colors)]
            );
        }

        return $chart;
    }
}
