<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use JoelButcher\Socialstream\Http\Livewire\SetPasswordForm;

class SetPassword extends SetPasswordForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.set-password-form')
            ->layout('profile.show');
    }
}
