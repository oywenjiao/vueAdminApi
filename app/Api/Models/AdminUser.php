<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminUser extends Model
{
    protected $table = 'admin_user';
    // 关闭时间戳
    public $timestamps = false;

    public function saveUser(Request $request)
    {
        $user = new self();
        $user->user_name = $request->username;
        $user->phone = $request->phone;
        $user->roles_id = $request->roles_id;
        $user->create_time = timestamp();
        $user->update_time = timestamp();
        $result = $user->save();
        return $result;
    }
}
