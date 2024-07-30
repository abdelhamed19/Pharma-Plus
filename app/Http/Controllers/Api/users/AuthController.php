<?php

namespace App\Http\Controllers\Api\users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\HTTPResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\users\UserLogin;
use App\Http\Requests\users\UserRegister;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use HTTPResponse;
    public function register(UserRegister $request)
    {
        $data = $request->validated();
        $user = User::where('email',$data['email'])->first();
        if (!$user)
        {
            $user=User::create($data);
            $token = $user->createToken('user-register')->plainTextToken;
            return $this->successRequest(['user'=>$user,'token'=>$token],'Register done Successfully');
        }
        return $this->wrongRequest('Register error',404);
    }
    public function login(UserLogin $request)
    {
        $user = User::where('email',$request->email)->first();
        if ($user && Hash::check($request->password,$user->password))
        {
            $token = $user->createToken('user-login')->plainTextToken;
            return $this->successRequest(['user'=>$user,'token'=>$token],'Login done Successfully');
        }
        return $this->wrongRequest('Wrong Inputs',404);
    }
    public function logout ()
    {
        $user = Auth::user()->tokens()->delete();
        return $this->successRequest(null,'Logout done');
    }
}
