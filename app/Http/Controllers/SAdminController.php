<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

class AdminController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function userlist(){
        $users = User::all(); 
        $users = DB::select('SELECT users.name AS username,users.email,roles.name AS roles FROM users,role_user,roles WHERE users.id = role_user.user_id AND roles.id = role_user.role_id');
        return view('superadmin.users', compact('users'));
    }
}
