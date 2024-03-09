<div>
    <livewire:some-list-count :$things />

    @foreach ($things as $thing)
        <div>{{ $thing }}</div>
    @endforeach

    <button wire:click="addThing">Add a thing</button>
</div>
