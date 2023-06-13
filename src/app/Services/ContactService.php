<?php

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
    public function getContacts()
    {
        return $this->contactRepository->getContactsAll();
    }

    public function getDepartments()
    {
        return $this->contactRepository->getDepartmentsAll();
    }

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
