<?php
/**
 * Created by : PhpStorm
 * User: OuYangWenJiao
 * Date: 2019/12/17
 * Time: 15:16
 */

namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
}
