<x-layout webTitle="Beranda">
    <div class="container mx-5">
    <h1 class="text-3xl">Hello Dunia</h1>
        <div class="flex flex-row gap-4 mt-5">
    @foreach($posts as $post)
        <x-post-card :title="$post['title']" :body="$post['body']"/>
    @endforeach
        </div>
    </div>
</x-layout>
