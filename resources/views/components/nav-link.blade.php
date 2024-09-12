@props(['active'=>false])
<a {{$attributes}}
   class="block rounded-md {{$active ? 'bg-slate-200 px-3 py-2 text-base font-medium text-blue-800': 'px-3 py-2 text-base font-medium text-gray-300 hover:bg-slate-200 hover:text-blue-800'}} "
   aria-current="{{ $active ? 'page' : false }}">{{$slot}}</a>