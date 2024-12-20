@props(['heading', 'location' => '/', 'buttonName', 'pdfLocation' => '/', 'target' => null, 'hasPdf' => true, 'hasCreateButton' => true])
<div class="flex items-center justify-between">
    <h1 class="font-bold text-2xl text-black dark:text-white">{{ $heading}}</h1>
    <section class="flex items-center gap-3">
        @if($hasPdf)
        <!-- <button wire:loading.attr="disabled" wire:target="downloadPdf" {{ $attributes }} class="flex items-center gap-2 px-4 py-1 bg-primary rounded-lg text-white hover:bg-opacity-75 transition-colors duration-300 dark:bg-dark-primary">
            Export as PDF
            <x-loading wire:loading wire:target="downloadPdf" />
        </button> -->
        @endif
        @if ($hasCreateButton)
        <a href="{{ $location }}" class="px-4 py-1 bg-primary rounded-lg text-white hover:bg-opacity-75 transition-colors duration-300 dark:bg-dark-primary" wire:navigate.hover>
            {{ $buttonName }}
        </a>
        @endif
    </section>
</div>