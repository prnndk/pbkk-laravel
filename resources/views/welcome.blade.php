<x-layout webTitle="Beranda" headerTitle="Beranda">
    <h1 class="text-3xl">Hello Dunia</h1>
        <div class="flex flex-row gap-4 mt-5">
    @foreach($posts as $post)
        <x-post-card href="/article/{{ $post['id'] }}" :title="Str::limit($post['title'], 20)" :body="Str::limit($post['body'], 150)" :author="$post['author']" :createdAt="Carbon\Carbon::parse($post['created_at'])->diffForHumans()"/>
    @endforeach
        </div>
</x-layout>
