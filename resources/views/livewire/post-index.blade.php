<div class="space-y-8">
    @foreach ($posts as $post)
        <livewire:post-item :$post />
    @endforeach
</div>