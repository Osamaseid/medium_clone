<x-app-layout>
    <div class="py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
                    <p class="text-gray-600 mb-4">By {{ $post->user->name ?? 'Unknown' }} on
                        {{ $post->created_at->format('M d, Y') }}</p>
                    <div class="prose max-w-none">
                        {!! nl2br(e($post->content)) !!}
                    </div>
                    @if($post->category)
                        <p class="mt-4 text-sm text-gray-500">Category: {{ $post->category->name }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>