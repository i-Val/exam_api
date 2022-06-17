<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function register (Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'role' => 'required|string',
            'id_number' => 'required|string',
            'email' => 'required|string',
            'class' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'role' => $fields['role'],
            'id_number' => $fields['id_number'],
            'email' => $fields['email'],
            'class' => $fields['class'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        // event(new Registered($user));

        // return response($response, 201);
        return redirect('login');
    }

    

    public function login(Request $request){
        $data =  request();

         $status = User::where('id_number',$data['id_number']);
         if(!isset($status)){
             return back()->with('errors', 'Invalid Username or Password');
         }
        



         if (Auth::attempt(['id_number'=>$data['id_number'], 'password' =>$data['password']])) {

            $user = User::where("id_number", $data['id_number'])->firstOrFail();
             return view("$user->role.dashboard")->with('user',$user);
         }else{

             return back()->with('message', 'Invalid Username or Password');
         }

     }

    public function loggout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
