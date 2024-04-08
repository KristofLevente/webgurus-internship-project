<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClinicProgramRequest;
use App\Mail\Invitation;
use App\Models\User;
use App\Notifications\InvitationNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ClinicProgramController extends Controller
{
    public function store(CreateClinicProgramRequest $request): RedirectResponse
    {

        $userData = json_decode(session('userData'), true);
        $invitationData = json_decode(session('invitationData'), true);

        //dd($invitationData);

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'role' => $userData['role'],
        ]);

        event(new Registered($user));
        Auth::login($user);

        if(isset($invitationData)) {
            $invitations = collect($invitationData['invite'])->map(function ($invitation) {
                return [
                    'email' => $invitation['email'],
                    'role' => $invitation['role'],
                    'token' => Str::random(50),
                ];
            })->all();

            $inv = $request->user()->invites()->createMany($invitations);

            collect($inv)->map(function ($invitation){
                Notification::send($invitation, new InvitationNotification());
            });

        }

        $program = $request->user()->program()->create([
            'opening_hour' => $request->input('opening_hour'),
            'closing_hour' => $request->input('closing_hour'),
            'days' => $request->input('days'),
        ]);

        return redirect(RouteServiceProvider::HOME);

    }

    public function create(): View
    {
        return view('auth.clinic-program');
    }
}
