<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function authenticate(AuthFormRequest $request)
    {
        $user =User::firstWhere('username',$request->username);

        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['Error'=>'Bad Credentials'],400);
        }else{

            $token=$user->createToken('token')->plainTextToken;

            $user->remember_token=$token;
            
            $user->save();

            return response()->json([
                'user'=>$user,
                'token'=>$token
            ],200);
        }
    }

    public function logout()
    {
        $user=User::get();
        if($user){
            Session::flush();
            $user->remember_token='';
            $user->save();
            $user->tokens()->delete();
        }
    }
}
