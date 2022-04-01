@props(['workImage', 'customerName'])

<div {{$attributes->merge(['class' => 'mt-16 h-420 bg-white'])}}">
    <img src="{{ asset($workImage) }}" class="w-full">
    <div class="ml-3 mt-3 p-2">
        <h1 class="text-xl">{{$customerName}}</h1>
        <table class="table-auto">
            <thead>
                <td class=" py-2"><h2 class="text-lg">Trade</h2></td>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
