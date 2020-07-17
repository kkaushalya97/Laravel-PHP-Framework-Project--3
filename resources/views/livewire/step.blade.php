<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add Steps for task</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer" />
    </div>

    @foreach($steps as $step)
        <div class="flex justify-center py-2" wire:key="{{$step}}">
            <input type="text" name="step[]" class="py-1 px-2 border rounded" placeholder="{{'Describe Step '.($step+1)}}" />
            <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$step}})" />
        </div>
    @endforeach
</div>
