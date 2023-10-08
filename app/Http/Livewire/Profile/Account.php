<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Http\Livewire\LogoutOtherBrowserSessionsForm;

class Account extends LogoutOtherBrowserSessionsForm
{
    /**
     * Get the current user of the application.
     *
     * @return mixed
     */
    public function getUserProperty()
    {
        return Auth::user();
    }

    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.logout-other-browser-sessions-form')
            ->layout('profile.show');
    }
}
