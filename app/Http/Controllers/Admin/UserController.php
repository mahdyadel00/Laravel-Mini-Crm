<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Company;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        //		$this->middleware('guest')->except('logout');
        $this->middleware('auth:admin')->except('logout');
    }
    protected function index()
    {

        $users = User::with('company')->get();
        return view('admin.users.index', compact('users'));
    } // end of index

    public function create()
    {
        $companies = Company::get();
        return view('admin.users.create' , compact('companies'));
    }
    public function store(Request $request)
    {
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required' , 'numeric' , 'min:11'],
            'password' => ['required'],
            'pictur' => ['sometimes'],
            'company_id' => ['required'],
        ]);

        $pictur_in_db = NULL;
        if( $request->has('pictur') )
        {
            $request->validate([
                'pictur' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path().'/uploads/users';
            $pictur = request('pictur');
            $pictur_name = time().request('pictur')->getClientOriginalName();
            $pictur->move($path , $pictur_name);
            $pictur_in_db = '/uploads/users/'.$pictur_name;
        }
        $user = User::create([
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'company_id'  => $request->company_id,
            'guard'  => 'user',
            'company_id'  => $request->company_id,
            'password' => Hash::make($request->password),
            'pictur'  => $pictur_in_db,
        ]);

        return redirect()->route('admin.users.index')->with('Successfully', 'User Added Successfully');
    }

    public function show($id)
    {
    }


    protected function edit($id)
    {
        $companies = Company::get();
        $user = User::where('id', $id)->first();
        return view('admin.users.edit', compact('user' , 'companies'));
    }


    protected function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        // $request->validate([

        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'phone' => ['required' , 'numeric' , 'min:11'],
        //     'pictur' => ['sometimes'],
        //     'company_id' => ['required'],
        // ]);
        // dd($request->all());

        $pictur_in_db = NULL;
        if( $request->has('pictur') )
        {
            $request->validate([
                'pictur' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path().'/uploads/users';
            $pictur = request('pictur');
            $pictur_name = time().request('pictur')->getClientOriginalName();
            $pictur->move($path , $pictur_name);
            $pictur_in_db = '/uploads/users/'.$pictur_name;
        }

       $user->update([
        'first_name'  => $request->first_name,
        'last_name'  => $request->last_name,
        'email'  => $request->email,
        'phone'  => $request->phone,
        'company_id'  => $request->company_id,
        'guard'  => 'user',
        'pictur'  => $pictur_in_db,
        ]);

        return redirect()->route('admin.users.index')->with('flash_message', 'User Updated successfully !');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return back();
        flash()->success("User deleted successfully");
    }

    protected function logout(){

        auth()->logout();

        return redirect('/');
    }
}//end of controller
