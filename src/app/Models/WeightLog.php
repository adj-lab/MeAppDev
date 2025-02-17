<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLog extends Model
{
    //Factory使用許可
    use HasFactory;

    //WeightLogsテーブルの指定したカラムへのデータ登録許可
    protected $fillable = ['user_id', 'date', 'weight', 'calories', 'exercise_time', 'exercise_content'];

    //Userテーブルとのリレーション定義
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
