@include('button.blade.php', ['type' => 'button', 'variant' => 'primary'])

<div class="flex items-center">
    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Comment
    </button>
</div>
@foreach ($post->comments as $comment)
    <div class="mt-2">
        <p class="text-gray-600">{{ $comment->content }}</p>
        <p class="text-sm text-gray-500">Posted by {{ $comment->user->name }} on {{ $comment->created_at->format('M d, Y') }}</p>       
    </div>
@endforeach