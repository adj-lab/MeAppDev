<div>
    <div wire:model="isOpen">
    @if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-bold mb-4">体重登録</h2>

                <label class="block">日付</label>
                <input type="date" wire:model="date" class="border p-2 w-full mb-2">

                <label class="block">体重 (kg)</label>
                <input type="number" wire:model="weight" class="border p-2 w-full mb-2">

                <label class="block">摂取カロリー</label>
                <input type="number" wire:model="calories" class="border p-2 w-full mb-2">

                <label class="block">運動時間 (hh:mm:ss)</label>
                <input type="time" wire:model="exercise_time" class="border p-2 w-full mb-2">

                <label class="block">運動内容</label>
                <textarea wire:model="exercise_content" class="border p-2 w-full mb-4"></textarea>

                <button wire:click="save" class="bg-blue-500 text-white px-4 py-2 rounded">登録</button>
                <button wire:click="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">閉じる</button>
            </div>
        </div>
    @endif
</div>
</div>
