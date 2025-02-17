<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Requests\RegisterWeightRequest;
use App\Http\Requests\WeightTargetRequest;
use App\Models\WeightTarget;
use App\Models\User;

class WeightController extends Controller
{
    //新規登録Step2：初期体重登録処理
    public function update($RegisterWeightRequest): RedirectResponse
    {
        //ログイン中ユーザー情報取得
        $user = Auth::user();

        //体重情報登録処理
        WeightLog::create([
            'user_id' => $user->id,
            //現在の体重
            'weight' => $request->weight,
            //目標の体重
            'target_weight' => $request->target_weight
        ]);

        //体重管理画面へリダイレクト
        return redirect()->route('weight.management')->with('success', '体重情報を登録しました');
    }

    //体重管理画面（トップ画面）
    public function manageWeight()
    {        
        return view('weight');
    }
    
    //体重登録
    public function registerWeight()
    {
        
    }

    //目標体重変更画面表示
    public function goalEdit()
    {
        //ログイン機能実装前テスト用1：テストユーザーID取得
        $user = User::first(); //ユーザーIDは取得できている
        //dd($user);

        ////ログイン機能実装前テスト用2：ユーザーIDで目標体重データを取得
        $target = WeightTarget::firstOrCreate(
            ['user_id' => $user->id],
            ['target_weight' => 60]
        );
        //ログイン機能実装後
        //現在ログイン中のユーザーIDをWeightTargetモデルを使用して取得
        //$target = WeightTarget::where('user_id', Auth::id())->first();
        return view('goal', compact('target', 'user'));
    }

    //目標体重変更：更新処理
    public function goalUpdate(WeightTargetRequest $request)
    {
        //ログイン機能実装前テスト用：テストユーザーID取得
        $user = User::first();
        //現在ログイン中ユーザー情報取得、$userへ代入
        //$user =Auth::user();

        //テストユーザーに紐付くweight_targetテーブルからレコードを指定し更新
        $updated = WeightTarget::where('user_id', $user->id)->first();
        
        //$updatedの値が存在すれば、target_weightテーブルへのデータ更新処理実行
        if($updated)
        {
            $updated->update
            ([
                'target_weight' => $request->input('target_weight')
            ]);
            //更新処理成功：体重管理画面へリダイレクトし、更新成功メッセージ表示
            return redirect()->route('manageWeight')->with('success', '目標体重:更新成功');
        } else {
            //更新処理失敗：体重管理画面へリダイレクトし、更新失敗メッセージ表示
            return redirect()->route('manageWeight')->with('error', '目標体重:更新失敗。');
        }
    }
}
