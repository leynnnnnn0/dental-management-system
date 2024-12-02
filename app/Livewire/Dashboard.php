<?php

namespace App\Livewire;

use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $columnChartModel = (new ColumnChartModel())
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4');

        $pieChartModel = (new PieChartModel())
            ->setTitle("Your Chart Title")
            ->addSlice('Category 1', 100, '#f6ad55')  // Value and color
            ->addSlice('Category 2', 200, '#fc8181')
            ->addSlice('Category 3', 300, '#90cdf4');

        return view('livewire.dashboard', [
            'columnChartModel' => $columnChartModel,
            'pieChartModel' => $pieChartModel
        ]);
    }
}
