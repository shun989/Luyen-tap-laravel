<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = [
            '0' => [
                'id' => 1,
                'name' => 'Ta minh Tuan',
                'dob' => '24/11/1989',
                'email' => 'tuan@gmail.com'
            ],
            '1' => [
                'id' => 2,
                'name' => 'Loc van Khoi',
                'dob' => '1995',
                'email' => 'khoi@gmail.com'
            ],
            '2' => [
                'id' => 3,
                'name' => 'Pham van Trong',
                'dob' => '2001',
                'email' => 'trong@gmail.com'
            ],
            '3' => [
                'id' => 4,
                'name' => 'Tran duc Duy',
                'dob' => '2001',
                'email' => 'duy@gmail.com'
            ]
        ];
        return view('users.list', compact('users'));
    }

    function showDetail($id) {
        return view('users.detail');
    }

    function showFormRegister(){
        return view('users.register');
    }

    function register(Request $request) {
        return view('users.register_success');
    }
}
