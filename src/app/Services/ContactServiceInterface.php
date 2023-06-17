<?php
declare(strict_types=1);

namespace App\Services;
use App\Models\Contact;

/**
 * Interface ContactService
 * お問合せ情報のビジネスロジックを行うService
 */
interface ContactServiceInterface
{
    /**
     * お問合せ内容を全てページネーション型で取得する。
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator お問合せのコレクションオブジェクト
     */
    public function getContacts(): \Illuminate\Pagination\LengthAwarePaginator;

    /**
     * 部署のidと部署名を全てコレクション型で取得する。
     *
     * @return \Illuminate\Support\Collection 部署のコレクションオブジェクト
     */
    public function getDepartments(): \Illuminate\Support\Collection;

    /**
     * 新規お問合せを保存する。
     *
     * @param int $department_id 部署ID
     * @param string $name ユーザー名
     * @param string $email メールアドレス
     * @param string $content お問合せ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @return Contact 作成したお問合せ
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;
}
