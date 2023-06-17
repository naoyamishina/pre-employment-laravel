<x-guest-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  お問い合わせ一覧
                  <div class="py-3"><a href="{{ route('contacts.create') }}" class="text-blue-500">新規作成</a></div>
                  
                  <div class="w-full mx-auto overflow-auto">
                  <table class="table-fixed w-full text-left whitespace-no-wrap">
                      <thead>
                      <tr>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">部署名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">お問い合わせ内容</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($contacts as $contact)
                      <tr>
                          <td class="border-t-2 border-gray-200 px-4 py-3"> {{ $contact->department->name }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 truncate">{{ $contact->content }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->email }}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                  </div>
                  {{ $contacts->links() }}
              </div>
          </div>
      </div>
  </div>
</x-guest-layout>
