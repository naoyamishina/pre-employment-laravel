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
    public function storeContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return Contact::create([
            'department_id' => $department_id,
            'name' => $name,
            'email' => $email,
            'content' => $content,
            'age' => $age,
            'gender' => $gender,
        ]);
    }
}
