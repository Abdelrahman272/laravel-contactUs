<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お問い合わせの表示') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl font-semibold mb-4 text-blue-600">お問い合わせの詳細</h3>

                    <div class="customer-info">
                        <div class="mb-4">
                            <span class="text-lg font-semibold text-green-600">名:</span> {{ $user->first_name }}
                        </div>
                        <div class="mb-4">
                            <span class="text-lg font-semibold text-pink-600">姓:</span> {{ $user->last_name }}
                        </div>
                        <div class="mb-4">
                            <span class="text-lg font-semibold text-purple-600">メールアドレス:</span> {{ $user->email }}
                        </div>
                        <div class="mb-4">
                            <span class="text-lg font-semibold text-yellow-600">電話番号:</span> {{ $user->phone }}
                        </div>
                    </div>

                    <div class="contact-info">
                        <h4 class="text-xl font-semibold mb-2 text-indigo-600">連絡先</h4>
                        @foreach ($user->contacts as $contact)
                            <div class="mb-4">
                                <span class="text-lg font-semibold text-orange-600 !important">メッセージ:</span>
                                {{ $contact->message }}
                            </div>
                            <div class="mb-4">
                                <span class="text-lg font-semibold text-teal-600">送信日時:</span>
                                {{ $contact->created_at->format('Y/m/d H:i') }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
