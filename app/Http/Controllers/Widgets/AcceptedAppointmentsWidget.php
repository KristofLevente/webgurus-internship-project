<?php

namespace App\Http\Controllers\Widgets;

use App\Interfaces\WidgetInterface;
use Illuminate\Support\Facades\Auth;

class AcceptedAppointmentsWidget implements WidgetInterface
{
    public function getWidgetData($filter = null): int
    {
        return Auth::user()->appointments()->where('status', 'accepted')->count();
    }
}