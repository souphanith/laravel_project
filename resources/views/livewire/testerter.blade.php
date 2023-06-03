<div class="flex flex-col w-[300px] mx-auto py-16">
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="name" wire:keydown.enter="addTodo" placeholder="Type and hit enter"
            class="flex-1">

        <input type="text" wire:model="surname" wire:keydown.enter="addTodo" placeholder="Type and hit enter"
            class="flex-1">
        <button
            class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
            wire:click="addTodo">Add
        </button>

    </div>

</div>