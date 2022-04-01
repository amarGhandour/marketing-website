@props(['avatar', 'fullName', 'jobPosition'])
<div>
    <img src="{{ asset($avatar) }}" class="rounded-full scale-125">
    <div class="text-center absolute mt-8">
        <h1 class="text-2xl">{{$fullName}}</h1>
        <p class="text-sm mt-4">{{$jobPosition}}</p>
    </div>
</div>
