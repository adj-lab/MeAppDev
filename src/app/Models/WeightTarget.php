<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightTarget extends Model
{
    use HasFactory;
    //weight_targetテーブルへの接続許可するカラム
    protected $table = 'weight_target';
    protected $fillable = ['user_id', 'target_weight'];

    //weight_targetテーブルとusersテーブルのリレーション定義
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
