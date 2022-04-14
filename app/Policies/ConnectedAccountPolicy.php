<?php

namespace App\Policies;

use App\Models\ConnectedAccount;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConnectedAccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ConnectedAccount  $connectedAccount
     * @return mixed
     */
    public function view(User $user, ConnectedAccount $connectedAccount)
    {
        return $user->ownsConnectedAccount($connectedAccount);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ConnectedAccount  $connectedAccount
     * @return mixed
     */
    public function update(User $user, ConnectedAccount $connectedAccount)
    {
        return $user->ownsConnectedAccount($connectedAccount);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ConnectedAccount  $connectedAccount
     * @return mixed
     */
    public function delete(User $user, ConnectedAccount $connectedAccount)
    {
        return $user->ownsConnectedAccount($connectedAccount);
    }
}
