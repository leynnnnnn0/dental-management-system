@props(['data' => collect() ])
@if($data->count() == 0)
<div class="mt-2 w-full h-96 flex flex-col items-center justify-center m-0 space-0 bg-white rounded-lg shadow-lg dark:bg-secondary-dark">
    <span class="text-2xl font-bold text-primary-brown dark:text-white">No data to show</span>
</div>
@endif