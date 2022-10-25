<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Contributor;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->paginate(10);
        
        return view('users')->with('users', $users);
    }

    public function contributor()
    {
        $contributors = Contributor::orderBy('name', 'asc')->paginate(10);
        
        return view('contributors')->with('contributors', $contributors);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('msg','User Deleted');
    }

    public function contributorDestroy($id)
    {
        $user = Contributor::findOrFail($id);
        $user->delete();

        return redirect('/contributors')->with('msg','User Deleted');
    }
}
