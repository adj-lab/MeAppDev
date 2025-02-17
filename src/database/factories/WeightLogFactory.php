<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\WeightLog;

class WeightLogFactory extends Factory
{

    //WeightLogモデルに対応するファクトリデータ生成許可
    protected $model = WeightLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //WeightLogのダミーデータ作成
            'date' => $this->faker->date(),
            'weight' => $this->faker->numberBetween(40,100),
            'calories' => $this->faker->numberBetween(0,5),
            'exercise_time' => $this->faker->time(),
            'exercise_content' => $this->faker->realText()
        ];
    }
}
