<div class="flex items-start space-x-5 border-b border-b-slate-200 pb-8">
    <div class="shrink-0 w-12">
        <img src="{{ $post->user->avatarUrl() }}" alt="avatar" class="w-12 h-12 rounded-full">        
    </div>

    <div class="grow space-y-2">
        <div class="font-bold text-lg">
            {{ $post->user->name }}
        </div>
        <div>
            <p>{{ $post->body }}</p>
        </div>

        <div class="flex items-center space-x-2">
            @can('delete', $post)
            <div>
                <button class="text-indigo-500" wire:click="delete">Delete</button>
            </div>
            @endcan
        </div>
    </div>
</div>
