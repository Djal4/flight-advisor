<?php

namespace App\Policies;

use App\Models\Airport;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AirportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny()
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view()
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create()
    {
        return User::get()->role_id==2;
    }
}
