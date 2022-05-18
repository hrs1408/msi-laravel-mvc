<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(12);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->password == $request->confirmPassword) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resources.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resources in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find($user->id);
        if (Hash::check($request->currentPassword, $user->password)) {
            if ($request->newPassword == null) {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->role = $request->role;
                $user->save();
            } else {
                if ($request->newPassword == $request->confirmPassword) {
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->role = $request->role;
                    $user->password = Hash::make($request->newPassword);
                    $user->save();
                }
            }

        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user = User::find($request->input('id'));
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
