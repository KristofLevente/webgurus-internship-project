<?php
namespace App\Http\Controllers\Widgets;

use App\Interfaces\WidgetInterface;
use Illuminate\Support\Facades\Auth;

class PatientNumberWidget implements WidgetInterface
{
    public function getWidgetData($filter = null): int
    {
        return Auth::user()->patients()->count();
    }
}