<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Laravel\Jetstream\Http\Livewire\UpdateProfileInformationForm;

class UpdateProfile extends UpdateProfileInformationForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.update-profile-information-form')
            ->layout('profile.show');
    }
}
