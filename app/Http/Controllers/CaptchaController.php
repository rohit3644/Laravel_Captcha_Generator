<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CaptchaGenerator;
use Session;

class CaptchaController extends Controller
{
    public function index()
    {
        $captcha = new CaptchaGenerator();
        $captchaData = $captcha->captchGenerator();
        return view('welcome', ['captcha' => $captchaData]);
    }
    public function captchaValidate(Request $req)
    {
        if ($req->captcha === $req->captchaToken) {
            $msg = 'Captcha Valid';
            $res = 1;
        } else {
            $msg = 'Captcha Invalid';
            $res = 0;
        }

        return view('welcome', ['msg' => $msg, 'res' => $res, 'captcha' => $req->captchaToken]);
    }

    public function refresh()
    {
        $captcha = new CaptchaGenerator();
        $captchaData = $captcha->captchGenerator();
        return (['captcha' => $captchaData]);
    }
}
