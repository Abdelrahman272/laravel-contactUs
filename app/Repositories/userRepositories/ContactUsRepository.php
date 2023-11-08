<?php

namespace App\Repositories\userRepositories;

use App\Interface\userInterface\ContactUsRepositoryInterface;
use App\Models\ContactUs;

class ContactUsRepository implements ContactUsRepositoryInterface
{
    public function create(array $data)
    {
        return ContactUs::create($data);
    }

    public function isOnline($site = 'https://google.com')
    {
        if (@fopen($site, 'r')) {
            return true;
        } else {
            return false;
        }
    }
}
