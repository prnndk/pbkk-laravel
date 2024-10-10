<x-layout webTitle="Beranda" headerTitle="Beranda">
    <x-search-bar/>

    <h1 class="text-3xl mb-5 font-bold tracking-tight">Data postingan terbaru</h1>
    {{ $posts->links() }}

        <div class="grid grid-cols-1 gap-3 md:grid-cols-3 my-5">
    @foreach($posts as $post)
        <x-post-card href="/article/{{ $post->id }}" :title="$post->title" :body="Str::limit($post['body'], 150)" :author="Str::limit( $post->user->name,10)" :createdAt="Carbon\Carbon::parse($post['created_at'])->diffForHumans()"/>
    @endforeach
        </div>
</x-layout>
