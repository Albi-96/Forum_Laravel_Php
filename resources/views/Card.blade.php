<div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 mb-6">
    <h2 class="text-xl font-semibold mb-4">{{ $post->title }}</h2>
    <p class="text-gray-600 dark:text-gray-400">{{ $post->description }}</p>
    <p class="text-sm text-gray-500 mt-2">Posted by {{ $post->user->name }} on {{ $post->created_at->format('d M, Y') }}</p>
</div>