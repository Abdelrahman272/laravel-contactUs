<?php

namespace App\Interface\userInterface;

interface ContactUsRepositoryInterface
{
    public function create(array $data);

    public function isOnline($site = 'https://google.com');
}
