<?php
declare(strict_types=1);

namespace App\Services;

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
     * @param  \App\Http\Requests\ContactRequest  $request バリデーション通過後のパラメーター
     */
    public function store($request);
}
