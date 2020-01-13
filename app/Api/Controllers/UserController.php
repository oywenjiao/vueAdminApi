<?php


namespace App\Api\Controllers;

use Illuminate\Http\Request;

class UserController extends BaseController
{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if (empty($username) || empty($password)) {
            return $this->jsonError('缺失必要参数!');
        }
        if ($username != 'admin') {
            return $this->jsonError('用户名错误');
        }
        if (strlen($password) < 6) {
            return $this->jsonError('密码长度不能少于6位');
        }
        return $this->jsonSuccess(['token' => md5($username.$password)]);
    }
}