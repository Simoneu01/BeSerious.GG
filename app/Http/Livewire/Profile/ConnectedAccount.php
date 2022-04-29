<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Contracts\View\View;
use JoelButcher\Socialstream\Http\Livewire\ConnectedAccountsForm;

class ConnectedAccount extends ConnectedAccountsForm
{
    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('profile.connected-accounts-form')
            ->layout('profile.show');
    }
}
