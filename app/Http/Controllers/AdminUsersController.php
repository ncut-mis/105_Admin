<?php

namespace App\Http\Controllers;


use App\Category;
use App\Clinic;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Staff;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{

    public function index()
    {
        $users =User::orderBy('id','ASC')->get();
        $clinics =Clinic::orderBy('id','ASC')->get();
        $staffs =Staff::orderBy('id','ASC')->get();
        $categories=Category::orderBy('id','ASC')->get();
        $data=['users'=>$users,'clinics'=>$clinics,'staffs'=>$staffs,'categories'=>$categories];
        return view('admin.users.index',$data);
    }


    protected function create()
    {
        $clinics =Clinic::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','ASC')->get();
        $data=['clinics'=>$clinics,'categories'=>$categories];
        return view('admin.users.create',$data);
    }

    public function edit($clinic,$staff)
    {
        $user = Clinic::find($clinic);
        $staff = Staff::find($staff);
        $data = ['users' => $user,'staffs' => $staff];

        return view('admin.users.edit', $data);
    }

    public function store(Request $request)
    {
        Clinic::create([
            'category_id' => $request->clinic_category,
            'name' => $request->clinic_name,
        ]);
       $max_clinic=Clinic::orderBy('id','DESC')->get()->first();
        Staff::create([
            'clinic_id' =>$max_clinic->id,
            'position_id' => 1,
            'name' => $request->clinic_admin,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        return redirect()->route('admin.users.index');
    }

    public function destroy(Clinic $clinic)
    {
       $clinic->delete();
       $staff = Staff::where('clinic_id',$clinic->id);
       $staff->delete();
        return redirect()->route('admin.users.index');
    }

    public function update(UserRequest $request, $id)
    {
        $user=Staff::find($id);
        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }


}