<?php

namespace App\Services;

interface ContactServiceInterface
{
    public function getContacts();
    public function getDepartments();
    public function store($request);
}
