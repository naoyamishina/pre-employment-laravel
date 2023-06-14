<?php
declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * Interface ContactRepository
 * お問合せ情報のデータ操作を行うRepository
 */
interface ContactRepositoryInterface
{
    /**
     * お問合せ内容を全てページネーション型で取得する。
     *
     * @return LengthAwarePaginator
     */
    public function getContactsAll(): LengthAwarePaginator;

    /**
     * 部署のidと部署名を全てコレクション型で取得する。
     *
     * @return Collection　
     */
    public function getDepartmentsName(): Collection;

    /**
     * 新規お問合せを保存する。
     *
     * @param array $data
     */
    public function create(array $data);
}
