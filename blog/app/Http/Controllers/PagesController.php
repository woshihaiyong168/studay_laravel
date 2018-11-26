<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }


    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }

    public function test(){
        $sms = app('easysms');
        try {
            $sms->send(17600153213, [
                'template' => '1',   //模板1
                'data' => [
                    8888,  //code
                    5    //5分钟
                    ],
            ]);
        } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
            $message = $exception->getException('yuntongxun')->getMessage();
            dd($message);
        }
    }
}
