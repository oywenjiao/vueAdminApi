<?php


namespace App\Api\Controllers;

use Illuminate\Http\Request;

class UserController extends BaseController
{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        return $this->jsonSuccess(['username' => $username, 'password' => $password]);
    }
}