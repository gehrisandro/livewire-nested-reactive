<div>
    <h2>This is the child component</h2>

    <p>Value on child: {{ $value }}</p>

    <p>timestamp on child: {{ time() }}</p>

    <livewire:sub-child :value="$value" />
</div>
