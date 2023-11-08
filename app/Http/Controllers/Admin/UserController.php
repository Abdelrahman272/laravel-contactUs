<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SearchRequest;
use App\Interface\adminInterface\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(SearchRequest $request)
    {
        $users = $this->userRepository->searchUsers($request->input('query'));
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->userRepository->findUserById($id);
        return view('admin.users.show', compact('user'));
    }
}
