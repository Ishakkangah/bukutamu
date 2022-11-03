<?php

namespace App\Policies;

use App\Models\User;
use App\Models\role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function update(role $role, User $user)
    {
        // return $user->role_id::find(2); //1. Jika user dengan role-id sama dengan id 1 maka tampilkan data
    }
}
