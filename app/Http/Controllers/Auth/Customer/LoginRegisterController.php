<?php

namespace App\Http\Controllers\Auth\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Customer\LoginRegisterRequest;
use App\Models\User;

class LoginRegisterController extends Controller
{
    public function loginRegisterForm()
    {
        return view('customer.auth.login-register');
    }

    public function loginRegister(LoginRegisterRequest $request)
    {
        $inputs = $request->all();

        //check if id is email
        if (filter_var($inputs['id'], FILTER_VALIDATE_EMAIL)) {
            $type = 1; // 1 => email
            $user = User::where('email', $inputs['id'])->first();
            if (empty($user)) {
                $newUser['email'] = $inputs['id'];
            }
        }
        //check if id is mobile
        elseif (preg_match('/^(\+98|98|0)9\d{9}$/', $inputs['id'])) {
            $type = 0; // 0 => mobile

            //all mobiles must to be in the same format
            $inputs['id'] = ltrim($inputs['id'], 0);
            $inputs['id'] = substr($inputs['id'], 0, 2) === '98' ? substr($inputs['id'], 2) : $inputs['id'];
            $inputs['id'] = str_replace($inputs['id'], '', '+98');

            $user = User::where('mobile', $inputs['id'])->first();
            if (empty($user)) {
                $newUser['mobile'] = $inputs['id'];
            }
        } else {
            $errorText = 'شناسه ورودی شما نه شماره موبایل است نه ایمیل';
            return redirect()->route('auth.customer.login-register-form')->withErrors(['id' => $errorText]);
        }
    }
}
