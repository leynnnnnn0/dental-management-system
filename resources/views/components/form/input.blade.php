@props(['label', 'isRequired' => true, 'type' => 'text', 'model'])
<div class="flex flex-col gap-1">
    <span class="text-gray-800 text-sm font-bold">{{ $label }} {{ $isRequired ? '*' : ''}}</span>
    <input wire:model="{{ $model }}" {{ $attributes }} class="rounded-lg border-gray-300" type="{{$type}}" />
    @error($model)
    <span class="text-xs text-red-500">
        {{ $message }}
    </span>
    @enderror
</div>