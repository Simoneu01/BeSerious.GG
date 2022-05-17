<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use Laravel\Jetstream\Http\Livewire\DeleteUserForm;

class DeleteAccount extends DeleteUserForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.delete-user-form')
            ->layout('profile.show');
    }
}
