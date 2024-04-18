<?php

namespace App\Http\Controllers\Widgets;

use App\Interfaces\WidgetInterface;
use App\Models\Appointment;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class ChartWidget implements WidgetInterface
{
    public function getWidgetData($filter): array
    {
        $dataForWidget=[];

        $dataForWidget['currentData'] = $this->getAppointmentsChartData($filter,'current');
        $dataForWidget['previousData'] = $this->getAppointmentsChartData($filter,'previous');

        return $dataForWidget;
    }
    public function getAppointmentsChartData($filter, $flag): array
    {
        $data = Auth::user()->appointments()->selectRaw($filter['interval'].'(appointment_date_begin) as time, COUNT(*) as count');

        if($flag === 'current') {
            $appointments = $data->where('appointment_date_begin', '>', Carbon::now()->subMonths($filter['value']))
                ->where('appointment_date_begin', '<', Carbon::now()->startOfMonth());
        }

        if($flag === 'previous'){
            $appointments = $data->where('appointment_date_begin', '<', Carbon::now()->startOfMonth()->subMonths($filter['value']))
                ->where('appointment_date_begin', '>', Carbon::now()->subMonths(2*$filter['value']));
        }

        $appointments = $appointments->groupBy('time')->orderBy('time', 'asc')->get()->toArray();

        return $this->getAppointmentsForInterval($filter, $appointments);
    }

    public function getAppointmentsForInterval($filter, $appointments): array
    {
        $appointmentsPerInterval = [];

        if($filter['interval'] === 'MONTH') {
            collect($appointments)->map(function ($appointment) use (&$appointmentsPerInterval) {
                $key = Carbon::createFromDate(null, $appointment['time'], 1)->format('M');
                $appointmentsPerInterval[] = ['x' => $key, 'y' => $appointment['count']];
            });
        }

        if($filter['interval'] === 'WEEK') {
            $thisWeek = Carbon::now();
            $previousWeek = Carbon::now()->subWeek();

            collect($appointments)->map(function ($appointment) use (&$appointmentsPerInterval,$thisWeek,$previousWeek) {
                $appointmentsPerInterval[] = ['x' => $previousWeek->format('m-d').' / '.$thisWeek->format('m-d'), 'y' => $appointment['count']];
                $previousWeek = $previousWeek->subWeek();
                $thisWeek = $thisWeek->subWeek();
            });
        }
        return $appointmentsPerInterval;
    }

}