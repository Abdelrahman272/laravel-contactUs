<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザーページ') }}
        </h2>
    </x-slot>

    @include('admin.style')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl font-semibold mb-4">お問い合わせ</h3>

                    <div>
                        <form method="GET" action="{{ route('admin.users.index') }}">
                            <div class="search-container mb-4">
                                <input type="text" name="query" placeholder="検索..." value="{{ request('query') }}">
                                <button type="submit" class="search-button custom-button">検索</button>
                            </div>
                        </form>
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>名</th>
                                    <th>姓</th>
                                    <th>メール</th>
                                    <th>電話番号</th>
                                    <th>アクション</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr data-id="{{ $user->id }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->first_name}}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <a href="{{route('admin.user.show', $user)}}" class="custom-button">表示</a>

                                            {{-- <button class="custom-button delete-button"
                                                onclick="openDeleteModal({{ $user->id }}, '{{ $user->first_name }}')">削除</button> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <p class="text-center font-semibold text-red-600">データはありません</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $users->appends(request()->except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('admin.js') <!-- JavaScriptライブラリを含めることを確認 -->

</x-app-layout>
