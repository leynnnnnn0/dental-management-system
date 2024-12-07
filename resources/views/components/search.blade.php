@props(['model'])
<input class="rounded-lg w-[300px]" type="text" placeholder="Search..." wire:model.live="{{ $model }}" />