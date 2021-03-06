<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::paginate(10);
        return view("Users.index", compact('users'));
    }

    public function create(){
        return view('Users.create');
    }

    public function store(Request $request){
        $request->validate([
            'nis'       => 'required|digits:10',
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'no_hp'     => 'required|digits:12|unique:users',
            'alamat'    => 'required',
            'akses'     => 'required',
            'password'  => 'required|min:6',
        ]);

        User::create([
            'nis'       => $request->input('nis'),
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'no_hp'     => $request->input('no_hp'),
            'alamat'    => $request->input('alamat'),
            'akses'     => $request->input('akses'),
            'password'  => Hash::make($request->password)
        ]);

        return redirect('user')
            ->with('update-message', 'Data successfully updated');
    }

    public function edit($id){
        $users = User::all()->find($id);
        return view("Users.edit", compact('users'));
    }

    public function update(Request $request){

        $request->validate([
            'nis'       => ['required', 'digits:10',
                Rule::unique('users')->ignore($request->id)
            ],
            'name'      => ['required'],
            'email'     => ['required',
                Rule::unique('users')->ignore($request->id)
            ],
            'no_hp'     => ['required', 'digits:12',
                Rule::unique('users')->ignore($request->id)
            ],
            'alamat'    => ['required'],
            'password'  => ['required', 'min:6'],
        ]);

        User::where('id', $request->id)->update([
            'nis'       => $request->input('nis'),
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'no_hp'     => $request->input('no_hp'),
            'alamat'    => $request->input('alamat'),
            'password'  => Hash::make($request->password)
        ]);
        return redirect('user')
            ->with('update-message', 'Data successfully updated');
    }

    public function destroy($id){
        $user = User::all()->find($id);
        $user->delete();

        return redirect('user')
            ->with('delete-message', 'Data successfully deleted');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $users = User::where('name', 'LIKE', "%{$keyword}%")->paginate(5);
        return view('user.index', compact('users'));
    }


}
