

       {{-- @yield('content') --}}


<div class="gap w-[300px] mx-auto py-16">
    <div class="gap-4 justify-between">
        <input type="text" wire:model="name" wire:keydown.enter="addTodo" placeholder="Type and hit enter"
            class="flex-1">

        <input type="text" wire:model="surname" wire:keydown.enter="addTodo" placeholder="Type and hit enter"
            class="flex-1">

        <input type="text" wire:model="position" wire:keydown.enter="addTodo" placeholder="Type and hit enter"
            class="flex-1">


        <button
            class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
            wire:click="addTodo">Add
        </button>

    </div>

</div>





<table class="table" style="width: 60%">
    <thead>
        <tr style="border: 1px solid #000">
            <th style="border: 1px solid #000">ID</th>
            <th style="border: 1px solid #000" >Name</th>
            <th style="border: 1px solid #000">Surname</th>
            <th style="border: 1px solid #000">Position</th>
            <th style="border: 1px solid #000">Action</th>
        </tr>
    </thead>

    @foreach ($users as $item)
     <tr style="border: 1px solid #000">
        <td style="border: 1px solid #000">{{ $loop->iteration }}</td>
        <td style="border: 1px solid #000">{{$item -> name}}</td>
        <td style="border: 1px solid #000">{{$item -> surname}}</td>
        <td style="border: 1px solid #000">{{$item -> position}}</td>

        <td>

            <button
            class="py-2 px-4 bg-blue-500 hover:bg-blue-600  rounded text-white"
            wire:click="">Edit
            </button>

            <button
            class="py-2 px-4 bg-red-500 hover:bg-red-600  rounded text-white"
            wire:click="deleteItem({{ $item->id }})">Delete
            </button>
        </td>
     </tr>
    @endforeach
</table>


{{-- <div class="gap w-[300px] mx-auto py-16">
    <div class="gap-4 justify-between">
        <form action="" method="post"> --}}
            {{-- {!! csrf_field() !!}
            @method("PATCH") --}}
            {{-- <input type="hidden" name="id" id="id" value=""/><br>
            <label>Name</label>
            <input type="text" name="name" id="name" value="" class="form-control"><br>
            <label>Surname</label>
            <input type="text" name="address" id="address" value="" class="form-control"><br>
            <label>Position</label>
            <input type="text" name="mobile" id="mobile" value="" class="form-control"><br>
            
            <button
            class="py-2 px-4 bg-green-500 hover:bg-green-600  rounded text-white"
            wire:click="">Update
            </button>
        </form>
    </div>
</div> --}}

