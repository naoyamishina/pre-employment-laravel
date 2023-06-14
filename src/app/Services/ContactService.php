<?php
declare(strict_types=1);

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;

class ContactService implements ContactServiceInterface
{
    protected $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @inheritDoc
     */
    public function getContacts(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return $this->contactRepository->getContactsAll();
    }

    /**
     * @inheritDoc
     */
    public function getDepartments(): \Illuminate\Support\Collection
    {
        return $this->contactRepository->getDepartmentsName();
    }

    /**
     * @inheritDoc
     */
    public function store($request)
    {
        $data = [
            'department_id' => $request->department_id,
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'content' => $request->content,
    ];

    $this->contactRepository->create($data);
    }
}
