<?php

namespace App\Repositories;

interface ContactRepositoryInterface
{
    public function getContactsAll();
    public function getDepartmentsAll();
    public function create(array $data);
}
