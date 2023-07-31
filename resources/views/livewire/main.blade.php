<div x-data="{ c: false}">
    <h1>This is the main component</h1>

    <p>Value on main: {{ $value }}</p>

    <p>timestamp on main: {{ time() }}</p>

    <livewire:child :value="$value" />

    <button wire:click="increment">Change</button>
</div>
