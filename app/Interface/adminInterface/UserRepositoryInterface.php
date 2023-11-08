<?php

namespace App\Interface\adminInterface;

interface UserRepositoryInterface {
    public function searchUsers($query);
    public function findUserById($id);
}
