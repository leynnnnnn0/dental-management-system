@props(['label', 'isRequired' => true, 'type' => 'text', 'model'])
<div class="flex flex-col gap-1">
    <span class="text-gray-800 text-sm font-bold">{{ $label }} {{ $isRequired ? '*' : ''}}</span>
    <select class="rounded-lg border-gray-300">
        <option value="">Select from options</option>
        {{ $slot }}
    </select>
    @error($model)
    <span class="text-xs text-red-500">
        {{ $message }}
    </span>

    @enderror
</div>