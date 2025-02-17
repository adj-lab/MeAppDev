<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //ログイン画面表示
    public function login()
    {
        return view('auth.login');
    }
    //ログイン処理
    //public function authenticate(Request $request)
    //{
        //ログイン処理成功時は、xxx画面へ遷移
    //    return view('auth.login');
    //}

    //新規会員登録画面:表示
    public function editUser()
    {
        return view('auth.register');
    }

    //新規会員登録：ユーザー登録処理
    public function registerUser(RegisterUserRequest $request)
    {
        // リクエストデータをログ出力（デバッグ用）
        \Log::info('Register Step1 Request:', $request->all());
        //
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        Auth::login($user);

        //初期体重登録画面へリダイレクト
        return redirect()->route('newWeight');
    }

    //新規会員登録：体重データ入力画面表示
    public function newWeight()
    {
        return view('auth.newgoal');
    }


}
