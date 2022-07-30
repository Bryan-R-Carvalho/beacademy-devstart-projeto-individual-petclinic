<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    

}