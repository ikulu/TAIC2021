<?php

namespace App\Http\Controllers\customAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomAuthController extends Controller
{
    public function registerUser (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255',
            'confirmPassword' => 'required|same:password',
        ]);
        if($validator->fails()){
            return response()->json([
                'message' => "Validated Fails",
                'errors'=> $validator->errors()
            ]);
        }
        $data = $validator->validate();
        $newUser = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
        ]);
        return response()->json([
            'message'=> "Registration: Success",
            'data'=> $newUser
        ]);
    }
    public function loginUser(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        #check Validation Errors
        if($validator->fails()){
            return response()->json([
                'message'=> 'Validation:Errors',
                'Errors'=> $validator->errors()
            ]);
        }
        #Checking the user
        $credential = $validator->validate();
        $user = User::where('email',$credential['email'])->first();
        if($user){
            if(Hash::check($credential['password'],$user->password)){
                $token = $user->createToken('auth-token')->plainTextToken;
                return response()->json([
                    'message'=> 'Login: Success',
                    'data'=> $user,
                    'token'=> $token
                ]);
            }else{
                return response()->json([
                    'message' => "Wrong:Credentials"
                ]);
            }
        }
        return response()->json([
            'message'=> 'User:',
            'data'=> $user->password
        ]);
    }
    public function logout()
    {
        // $request->user()->currentAccessToken()->delete();
        Auth::logout();
        return response()->json([
            'message' => 'User successfully logged out'
        ], 200);
    }
}