@props(['name', 'price'])
<div class="h-450 w-[calc(96%/3)] shadow hover:shadow-gray-700 hover:shadow-md ">
    <table class="w-full">
        <thead>
        <th class="bg-black text-white py-8">{{$name}}</th>
        </thead>
        <tbody>

        {{$slot}}

        <tr class="text-center">
            <td class="py-3 border border-gray-200">
                <h1 class="text-3xl mt-4 mb-3 font-extrabold">$ {{$price}}</h1>
                <p class="text-xs text-gray-500">per month</p>
            </td>
        </tr>
        </tbody>
        <tfoot class="text-center h-20">
        <td class="bg-gray-200 text-white h-full">
            <button class="bg-teal-500 hover:bg-gray-400 py-3 px-5 text-sm"><i class="fa-solid fa-check"></i> Sign Up</button>
        </td>
        </tfoot>
    </table>
</div>
