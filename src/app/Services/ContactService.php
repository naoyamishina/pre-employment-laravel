<?php
declare(strict_types=1);

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;

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
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return $this->contactRepository->storeContact($department_id, $name, $email, $content, $age, $gender);
    }
}
