<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\WeightLog;

class WeightLogModal extends Component
{
    public $isOpen = false;
    public $date;
    public $weight;
    public $calories;
    public $exercise_time;
    public $exercise_content;

    protected $rules = [
        'date' => 'required|date',
        'weight' => 'required|numeric|min:0',
        'calories' => 'nullable|integer|min:0',
        'exercise_time' => 'nullable',
        'exercise_content' => 'nullable|string',
    ];

    //Modalを有効化
    public function openModal()
    {
        $this->resetInput();
        $this->isOpen = true;
    }

    //Modalを有効化
    public function closeModal()
    {
        $this->isOpen = false;
    }

    //WeightLogモデル経由でバリデーション・DB登録
    public function save()
    {
        $this->validate();

        WeightLog::create([
            'user_id' => Auth::id(),
            'date' => $this->date,
            'weight' => $this->weight,
            'calories' => $this->calories,
            'exercise_time' => $this->exercise_time,
            'exercise_content' => $this->exercise_content,
        ]);

        session()->flash('message', '体重を登録しました！');
        $this->closeModal();
    }

    private function resetInput()
    {
        $this->date = now()->format('Y-m-d');
        $this->weight = '';
        $this->calories = '';
        $this->exercise_time = '';
        $this->exercise_content = '';
    }

    public function render()
    {
        return view('livewire.weight-log-modal');
    }
}
