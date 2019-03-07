<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //make users be signed in before they can see this page
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    //make users be signed in before they can see this page
    public function __construct()
    {
        $this->middleware('userAdmin');
    }




    //ADMIN: display all users
    public function index()
    {
        $users = User::all();

        return view('admin/users/index', compact('users'));
    }

    //ADMIN: edit a specific user
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin/users/edit', compact('user'));
    }

    //preform update on the user (actually change it in the DB)
    public function update(Request $request, User $user)
    {
        $name = $request->name;
        $email = $request->email;
        $id = $request->id;
        $userAdministrator = $request->userAdministrator;
        $postModerator = $request->postModerator;
        $themeManager = $request->themeManager;

        User::where('id', $id)->update(['name' => $name, 'email' => $email]);
        //$user_roles::where('id', 1)->update(['role_id' => $userAdministrator]);
//
//        \DB::table('role_user')->update([
//                'role_id' => '99'
//
//        ])->where('id', $id);


        return redirect('admin/users/index');

    }

    //ADMIN: display the 'are you sure you want to delete?' page
    public function delete($id)
    {
        $user = User::find($id);

        return view('admin/users/delete', compact('user'));
    }

    //ADMIN: preform a SOFT delete
    public function destroy(Request $request, User $user)
    {
        $id = $request->id;

        $user::destroy($id);

        return redirect('admin/users/index');

    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $users = User::search($searchTerm)->get();
        return view('admin/users/index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin/users/index', compact('user'));
    }

}
