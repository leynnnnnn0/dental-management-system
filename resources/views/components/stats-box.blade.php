@props(['icon', 'title', 'value'])
<div class="p-3 flex gap-3 h-32 w-auto rounded-lg bg-blue-500">
    <i class="bi {{ $icon }} text-white font-2xl h1"></i>
    <section class="flex flex-col gap-2 flex-1">
        <h1 class="text-white font-bold text-lg">{{ $title }}</h1>
        <span class="text-4xl font-bold text-white">{{ $value}}</span>
    </section>
</div>