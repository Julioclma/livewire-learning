<div>
    @livewireScripts

    <style>
        #container {
            display: flex;
            width: 100px;
            align-items: center;
            justify-content: space-between;
        }
    </style>

    <div id="container">
        <button wire:click="increment">+</button>
        <div> {{ $counter }}</div>
        <button wire:click="decrement">-</button>
    </div>

</div>
