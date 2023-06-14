<?php
declare(strict_types=1);

namespace App\Repositories;

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
     * @param array $data
     */
    public function create(array $data);
}
