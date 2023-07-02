<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(){
        $users = $this->model->paginate(10);
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $this->model->create($request->all());
        return redirect()->route('users.index');
    }
    public function edit($id){
        $user = $this->model->find($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = $this->model->find($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $user = $this->model->find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
    
}