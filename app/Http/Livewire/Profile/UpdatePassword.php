<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Laravel\Jetstream\Http\Livewire\UpdatePasswordForm;

class UpdatePassword extends UpdatePasswordForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.update-password-form')
            ->layout('profile.show');
    }
}
