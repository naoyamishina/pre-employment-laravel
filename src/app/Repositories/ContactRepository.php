<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;
use App\Models\Department;
use App\Repositories\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getContactsAll(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return Contact::select('department_id', 'name','email', 'content')->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * @inheritDoc
     */
    public function getDepartmentsName(): \Illuminate\Support\Collection
    {
        return Department::select('id', 'name')->get();
    }

    /**
     * @inheritDoc
     */
    public function create(array $data)
    {
        return Contact::create($data);
    }
}
