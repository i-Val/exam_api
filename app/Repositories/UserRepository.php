<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface {

    public function all() {
        return User::where('role', 'teacher')->get();
    }
}