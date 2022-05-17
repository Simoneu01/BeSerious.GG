<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Laravel\Jetstream\Http\Livewire\TwoFactorAuthenticationForm;

class TwoFactor extends TwoFactorAuthenticationForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.two-factor-authentication-form')
            ->layout('profile.show');
    }
}
