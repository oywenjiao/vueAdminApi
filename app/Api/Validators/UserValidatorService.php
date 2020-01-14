<?php


namespace App\Api\Validators;


use Illuminate\Support\Facades\Validator;

class UserValidatorService
{
    protected static $message = [
        'required'  => ':attribute不能为空',
        'numeric'   => ':attribute必须是数字',
        'max'       => ':attribute长度（数值）不应该大于 :max',
        'min'       => ':attribute长度（数值）最少 :min 位',
        'regex'     => '请填写正确的:attribute'
    ];

    protected static $attributes = [
        'phone'     => '手机号',
        'username'  => '用户名',
        'password'  => '登录密码',
        'roles_id'  => '角色组'
    ];

    /**
     * 验证用户数据编辑
     * @param $data
     * @return array
     */
    public static function validatorEdit($data)
    {
        $rules = [
            'phone'     => 'required|regex:/^1[34578]{1}\d{9}$/',
            'username'  => 'required|max:20',
            'password'  => 'required|min:6',
            'roles_id'  => 'required|numeric'
        ];
        $validator = Validator::make($data, $rules, static::$message, static::$attributes);
        if ($validator->fails()) {
            $msg = $validator->errors()->first();
            return ['status' => 101, 'msg' => $msg];
        }
        return ['status' => 100];
    }
}