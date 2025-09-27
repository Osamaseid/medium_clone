<x-app-layout>


    <div class="py-4 ">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-24">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- #region -->
                    <x-category-tabs> </x-category-tabs>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 gap-6 py-4">

                        @forelse ($posts as $post)
                            <x-post-item :post="$post"></x-post-item>

                        @empty
                            <div class="text-center text-gray-400 py-10">
                                No post found.
                            </div>
                        @endforelse
                    </div>

                    {{ $posts->onEachSide(1)->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>