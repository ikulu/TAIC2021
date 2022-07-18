<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('superadmin.newuser');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;

        $password = "TAIC2022";
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
        ]);
        $user->attachRole($request->role_id);
        event(new Registered($user));

        $data = array('name'=>$name, 'email' => $email);
        Mail::send(['text'=>'mail'], $data, function($message)use ($request) {

            $message->to($request->email, $request->name)->subject('TAIC MS Login credentials');
            $message->from('info@ictc.go.tz','ICTC');
        });
        
        return view('superadmin.newuser');
    }
    
    public function editprofile(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $updateuDetails = User::find($request->id);
        $updateuDetails->update(['name' => $request->name,'email' => $request->email]);
        return redirect('/profile')->with('success', "Your details Updated successfully!");
    }

    public function resetpass(Request $request){
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required',
        ]);

        if (!(Hash::check($request->get('password'), Auth::user()->password))) {
            // The passwords matches
            return redirect('/profile')->with('success', "Your current password does not matches with the password.");
            // return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('password'), $request->get('newpassword')) == 0){
            // Current password and new password same
            return redirect()->back()->with("success","New Password cannot be same as your current password.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }
}
