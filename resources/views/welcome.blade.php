<x-layout webTitle="Beranda" headerTitle="Beranda">
    <h1 class="text-3xl">List Postingan</h1>
        <div class="grid grid-cols-1 gap-3 md:grid-cols-3 my-5">
    @foreach($posts as $post)
        <x-post-card href="/article/{{ $post->id }}" :title="Str::limit($post->title, 20)" :body="Str::limit($post['body'], 150)" :author="Str::limit( $post->user->name,10)" :createdAt="Carbon\Carbon::parse($post['created_at'])->diffForHumans()"/>
    @endforeach
        </div>
</x-layout>
