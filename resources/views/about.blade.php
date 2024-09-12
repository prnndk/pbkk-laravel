<x-layout webTitle="Tentang" headerTitle="About Me">
    <h1 class="text-3xl">Hello Dunia</h1>
    <div class="flex flex-row flex-wrap gap-4 mt-5">
        @for ($i=1; $i <= 10; $i++)
        <x-post-card title="Portofolio Aplikasi" body="Ini adalah aplikasi yang telah saya buat nomer {{ $i }} " />
        @endfor
    </div>
</x-layout>
