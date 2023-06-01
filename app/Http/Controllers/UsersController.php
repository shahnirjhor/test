<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display all users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();


        return view('users.index', compact('users'));
    }

    /**
     * Show form for creating user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'SuperAdmin')->get();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created user
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {

        $request->validate([
            'name' => 'required',
            // 'email' => 'required|email:rfc,dns|unique:users,email',
            'email' => 'required|email|unique:users,email',
            'status' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);



        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->assignRole([$request->role]);
        $user->image = 'user.jpg';
        if ($request->image != '') {
            $image_name = "user-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/user/'), $image_name);
            $user->image = $image_name;
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    /**
     * Edit user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::where('name', '!=', 'SuperAdmin')->get();

        $user = User::find($id);
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update user data
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'unique:users,email,' . $id,
        ]);
        $user = User::find($id);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->syncRoles($request->get('role'));
        $user->image = 'user.jpg';
        if ($request->image != '') {
            $image_name = "user-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/user/'), $image_name);
            $user->image = $image_name;
        }

        $user->update();

        return redirect()->route('users.index')->with('info', 'User Updated successfully.');
    }

    /**
     * Delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    public function changeStatus($id)
    {
        $user = User::find($id);
        $user->status = $user->status == '1' ? '0' : '1';
        $user->save();
        return response()->json(['status' => 'success']);
    }
}
