<?php


namespace App\Api\Controllers;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{

    public function jsonError($message = '操作失败', $code = 401, $content = [])
    {
        return response()->json(compact('message', 'code', 'content'));
    }

    public function jsonSuccess($content = [], $message='', $code = 0)
    {
        return response()->json(compact( 'content', 'message', 'code'));
    }
}