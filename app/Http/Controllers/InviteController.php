<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use App\Models\User;
use App\Rules\UniqueEmails;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class InviteController extends Controller
{
    public function create(): View
    {
        return view('auth.invite');
    }

    public function show(): View
    {
        return view('auth.clinic-program');
    }

    public function store(Request $request): RedirectResponse
    {
        if($request->input('action') === 'save') {

            $request->validate([
                'invite.*.email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Invite::class],
                'invite.*.role' => ['required', 'string', 'max:255'],
                'invite' => [new UniqueEmails()]
            ]);

            session(['invitationData' => json_encode($request->toArray())]);

        }

        return redirect()->route('clinic-program');
    }



}
