<x-layout webTitle="Article" headerTitle="Detail Artikel">
    <div class="flex justify-center">
        <h1 class="text-3xl font-bold leading-tighter">{{ $post['title'] }}</h1>
    </div>
    <div class="flex flex-row justify-center gap-4 mt-4">
        <p>Author: {{ $post['author'] }}</p>
        <p>Created At: {{ $post['created_at'] }}</p>
    </div>
    <div class="flex justify-center mt-5">
        <p>{{ $post['body'] }}</p>
    </div>
</x-layout>
