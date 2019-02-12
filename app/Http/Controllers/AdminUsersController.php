<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\User;

class AdminUsersController extends Controller
{

    public function index()
    {
        $users =User::orderBy('created_at','DESC')->get();
        $data=['users'=>$users];
        return view('admin.users.index',$data);
    }


    protected function create()
    {
        return view('admin.users.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $data = ['users' => $user];

        return view('admin.users.edit', $data);
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index');
    }

    public function update(UserRequest $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }


}