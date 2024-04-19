<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Widgets\AcceptedAppointmentsWidget;
use App\Http\Controllers\Widgets\ChartWidget;
use App\Http\Controllers\Widgets\NextAppointmentWidget;
use App\Http\Controllers\Widgets\PatientNumberWidget;
use App\Http\Controllers\Widgets\UpcomingAppointmentsWidget;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function index(Request $request): View
    {

        $patientWidget = new PatientNumberWidget();

        $acceptedAppointments = new AcceptedAppointmentsWidget();

        $upcomingAppointments = new UpcomingAppointmentsWidget();

        $nextAppointment = new NextAppointmentWidget();

        $chartWidget = new ChartWidget();

        $chartData = $chartWidget->getWidgetData($request->input('filter', ['interval'=>'MONTH', 'value'=>'12']));

        return view('dashboard', [
            'patientWidget' => $patientWidget->getWidgetData(),
            'acceptedAppointments' => $acceptedAppointments->getWidgetData(),
            'upcomingAppointments' => $upcomingAppointments->getWidgetData(),
            'nextAppointment' => $nextAppointment->getWidgetData(),
            'chartData' => $chartData,
        ]);
    }



}
