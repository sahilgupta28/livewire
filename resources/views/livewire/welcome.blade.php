<div>
    <input type="text" wire:model.debounce.1000ms="name">
    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{implode(', ', $greeting)}} {{strtoupper($name)}} @if($loud) ! @endif
    <button wire:click="resetName('rupina')">reset Name</button>
</div>
