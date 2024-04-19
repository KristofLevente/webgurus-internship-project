<?php

namespace App\Http\Controllers\Widgets;

use App\Interfaces\WidgetInterface;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NextAppointmentWidget implements WidgetInterface
{
    public function getWidgetData($filter = null): array
    {
        $dataForWidget=[];

        $nextAppointmentObject  = $this->getNextAppointmentObject();

        $dataForWidget['nextAppointment'] = $this->getNextAppointmentText($nextAppointmentObject);
        $dataForWidget['nextAppointmentDayName'] = $this->getNextAppointmentDayName($nextAppointmentObject);
        $dataForWidget['nextAppointmentHourBegin'] = $this->getNextAppointmentHourBegin($nextAppointmentObject);
        $dataForWidget['nextAppointmentHourEnd'] = $this->getNextAppointmentHourEnd($nextAppointmentObject);
        $dataForWidget['nextAppointmentServiceType'] = $this->getNextAppointmentServiceType($nextAppointmentObject);
        $dataForWidget['patientNameOfAppointment'] = $this->getPatientNameOfAppointment($nextAppointmentObject);

        return $dataForWidget;
    }

    public function getNextAppointmentObject(): Appointment
    {
        return Auth::user()->appointments()
            ->where('status', 'accepted')
            ->where('date_begin', '>', now())
            ->orderBy('date_begin', 'asc')->first();
    }

    public function getNextAppointmentText(Appointment $appointment): string
    {
        Carbon::setLocale('ro');
        return Carbon::parse($appointment->date_begin)->translatedFormat('F d');
    }

    public function getNextAppointmentDayName(Appointment $appointment): string
    {
        Carbon::setLocale('ro');
        return Carbon::parse($appointment->date_begin)->dayName;
    }

    public function getNextAppointmentHourBegin(Appointment $appointment): string
    {
        return Carbon::parse($appointment->date_begin)->format('H:i');
    }

    public function getNextAppointmentHourEnd(Appointment $appointment): string
    {
        return Carbon::parse($appointment->date_end)->format('H:i');
    }

    public function getNextAppointmentServiceType(Appointment $appointment): string
    {
        return $appointment->service_type;
    }

    public function getPatientNameOfAppointment(Appointment $appointment): string
    {
        return $appointment->patient->name;
    }
}