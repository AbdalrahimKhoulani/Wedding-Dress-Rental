<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getUserById($user_id)
    {
        $user = User::with(['reservations'])->find($user_id);
        return $user;
    }

    public function updateUser($user_data)
    {

        $user = User::find($user_data['user_id']);
        $user->name = $user_data['name'];
        if ($user_data['password']) {
            $user->password = Hash::make($user_data['password']);
        }
        return $user->save();
    }
}
