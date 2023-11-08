<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザー管理ページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    ユーザー管理ページへようこそ，{{ Auth::user()->first_name }}様 !
                </div>

                <div style="background-color: rgb(153, 153, 173); height: 1px;"></div>

                <section class="section">
                    <div class="container">

                        @include('messages.success')

                        <h1 class="title">お問い合わせフォーム</h1>
                        <div class="columns">
                            <div class="column is-half">
                                <form action="{{ route('contact-us.store') }}" method="post">
                                    @csrf
                                    <div class="field">
                                        <label class="label">タイトル</label>
                                        <div class="control">
                                            <input class="input" name="title" type="text" placeholder="あなたのタイトル">
                                            @include('messages.error', ['property' => 'title'])
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label">メッセージ</label>
                                        <div class="control">
                                            <textarea class="textarea" name="message" placeholder="メッセージを入力してください"></textarea>
                                            @include('messages.error', ['property' => 'message'])
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <button class="button is-primary">送信</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
