<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function medicalReport($id)
    {
        $pdf = Pdf::loadView('pdf.medical-report', [
            'medicalHistory' => MedicalHistory::find($id)
        ]);
        return $pdf->setPaper('a4', 'download')->download('medical-report-' . Carbon::today()->format('Y-m-d') . '.pdf');
    }
}
