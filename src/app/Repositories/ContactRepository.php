<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Models\Department;
use App\Repositories\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    public function getContactsAll()
    {
        return Contact::select('department_id', 'name','email', 'content')->orderBy('created_at', 'desc')->paginate(20);
    }

    public function getDepartmentsAll()
    {
        return Department::select('id', 'name')->get();
    }
    public function create(array $data)
    {
        return Contact::create($data);
    }
}
