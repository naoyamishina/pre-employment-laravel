<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;
use App\Models\Department;
use App\Repositories\ContactRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getContactsAll(): LengthAwarePaginator
    {
        return Contact::select('department_id', 'name','email', 'content')->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * @inheritDoc
     */
    public function getDepartmentsName(): Collection
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
