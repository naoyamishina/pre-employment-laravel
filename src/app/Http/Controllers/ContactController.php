<?php 
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\ContactServiceInterface;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }
    
    /**
     * お問い合わせ一覧を表示するメソッド
     *
     * @return \Illuminate\Http\Response お問い合わせ一覧ビュー
     */
    public function index()
    {
        $contacts = $this->contactService->getContacts();
        return response()->view('contacts.index', compact('contacts'));
    }

    /**
     * お問い合わせ作成画面を表示するメソッド
     *
     * @return \Illuminate\Http\Response お問い合わせ作成ビュー
     */
    public function create()
    {
        $departments = $this->contactService->getDepartments();
        return response()->view('contacts.create', compact('departments'));
    }

    /**
     * お問い合わせ内容を保存するメソッド
     *
     * @param  \App\Http\Requests\ContactRequest  $request バリデーション通過後のパラメーター
     * @return \Illuminate\Http\Response お問合せ一覧へリダイレクト
     */
    public function store(ContactRequest $request)
    {
        DB::transaction(function () use ($request) {
            $this->contactService->createContact(
                $request->getDepartmentId(), 
                $request->getName(), 
                $request->getEmail(), 
                $request->getContents(), 
                $request->getAge(), 
                $request->getGender()
            );
        });

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
