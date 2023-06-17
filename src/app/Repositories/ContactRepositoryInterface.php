<?php
declare(strict_types=1);

namespace App\Repositories;
use App\Models\Contact;

/**
 * Interface ContactRepository
 * お問合せ情報のデータ操作を行うRepository
 */
interface ContactRepositoryInterface
{
    /**
     * お問合せ内容を全てページネーション型で取得する。
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getContactsAll(): \Illuminate\Pagination\LengthAwarePaginator;

    /**
     * 部署のidと部署名を全てコレクション型で取得する。
     *
     * @return \Illuminate\Support\Collection
     */
    public function getDepartmentsName(): \Illuminate\Support\Collection;

    /**
     * 新規お問合せを保存する。
     *
     * @param int $department_id 部署ID
     * @param string $name ユーザー名
     * @param string $email メールアドレス
     * @param string $content お問合せ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @return Contact
     */
    public function storeContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;
}
