<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
      public function register(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'c_password'=>'required|same:password'
        ]);
        if ($validator->fails()) {
      	return $this->sendError('validate Error',$validator->errors());
        }
        $input = $request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $success['token']=$user->createToken('mohammad1999')->accessToken;
        $success['name']=$user->name;
        return $this->sendResponse($success,'User registered successfully');

    }
      public function login(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'c_password'=>'required|same:password'
        ]);
        if ($validator->fails()) {
      	return $this->sendError('validate Error',$validator->errors());
        }
        $input = $request->all();
        $input['password']=Hash::make($input['password']);
        $user=User::create($input);
        $success['token']=$user->createToken('mohammad1999')->accessToken;
        $success['name']=$user->name;
        return $this->sendResponse($success,'User registered successfully');

    }


}
