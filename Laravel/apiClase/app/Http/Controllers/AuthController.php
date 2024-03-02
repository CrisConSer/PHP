<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data' => $user, 'acces_token'=> $token, 'token_type'=> 'Bearer']);
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return ['message'=> 'Sesión creada correctamente'];
    }

    public function login(Request $request)
    {
          $user=User::where('email',$request->email)
        //  ->where('password',$request->password)
        ->firstOrFail();
          $token=$user->createToken('auth_token')->plainTextToken;
          return response()->json(['message'=>'hola'.$user->name,
          
           'acces_token'=>$token,
           'token_type'=>'Bearer'] );
         
    }
}
