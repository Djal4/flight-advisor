<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $user =User::firstWhere('username',$request->username);

        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['Error'=>'Bad Credentials'],400);
        }else{
            $token=$user->createToken('token')->plainTextToken;

            $user->tokens()->delete();

            $user->remember_token=$token;
            
            $user->save();

            return response()->json([
                'user'=>$user,
                'token'=>$token
            ],200);
        }
    }
}
