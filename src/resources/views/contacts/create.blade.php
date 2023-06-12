<x-guest-layout>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <h1 class="text-center">
                  お問い合わせフォーム
              </h1>
              <div class="p-6 bg-white border-b border-gray-200">
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <section class="text-gray-600 body-font relative">
              <form method="post" action="{{ route('contacts.store') }}">
                  @csrf
              <div class="container px-5 mx-auto">
                  <div class="lg:w-1/2 md:w-2/3 mx-auto">
                  <div class="flex flex-wrap -m-2">

                    <div class="p-2 w-full">
                      <div class="relative">
                          <label for="department_id" class="leading-7 text-sm text-gray-600">部署名</label>
                          <select name='department_id' class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                              <option value="">選択してください</option>
                              @foreach ($departments as $department)
                                  <option value="{{ $department->id }}" {{ old('department_id') == $loop->iteration ? 'selected' : '' }}>{{ $department->name }}</option>
                              @endforeach
                          </select>
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <div class="relative">
                          <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                          <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <div class="relative">
                          <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                          <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <div class="relative">
                          <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                          <input type="text" id="age" name="age" value="{{ old('age') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <div class="relative">
                          <label  class="leading-7 text-sm text-gray-600">性別</label><br>
                          <input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : ''}}>男性
                          <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : ''}}>女性
                          <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : ''}}>未回答
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <div class="relative">
                          <label for="content" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                          <textarea id="content" name="content" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('content')}}</textarea>
                      </div>
                      </div>

                      <div class="p-2 w-full">
                      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">投稿する</button>
                      </div>
                      
                  </div>
                  </div>
              </div>
              </form>
              </section>
              </div>
          </div>
      </div>
  </div>
</x-guest-layout>
