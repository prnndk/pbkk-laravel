@props([
    'title'=>'',
    'body'=>'',
    'author'=>'',
    'createdAt'=>'',
])

<a {{$attributes}} class="block max-w-sm min-h-72 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 min-h-20 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$title}}</h5>
    <div class="flex flex-row justify-between mb-2 ">
        <span class="text-sm bg-slate-200 rounded py-1 px-2">{{ $author }}</span>
        <span class="text-sm bg-slate-200 rounded py-1 px-2">{{ $createdAt }}</span>
    </div>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{$body}}</p>
</a>
