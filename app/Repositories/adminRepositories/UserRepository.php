<?php

namespace App\Repositories\adminRepositories;

use App\Interface\adminInterface\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function searchUsers($query)
    {
        return User::where('first_name', 'like', "%$query%")
            ->orWhere('last_name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->paginate(10);
    }

    public function findUserById($id)
    {
        return User::with('contacts')->findOrFail($id);
    }
}
