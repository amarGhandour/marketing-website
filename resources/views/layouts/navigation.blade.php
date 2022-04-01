<nav>
   <div class="">
       <x-nav-link href="#" class="bg-indigo-500 hover:bg-gray-200 mr-0">
           <i class="fa-solid fa-house text-sm mr-3"></i>
           Logo
       </x-nav-link>
       <x-nav-link href="#" class="hover:bg-white hover:text-black">Team</x-nav-link>
       <x-nav-link href="#" class="hover:bg-white hover:text-black">Work</x-nav-link>>
       <x-nav-link href="#" class="hover:bg-white hover:text-black">Price</x-nav-link>>
       <x-nav-link href="#" class="hover:bg-white hover:text-black">Contact</x-nav-link>
   </div>

    <div x-data="{open : false}" @mouseover.away="open = false" class="absolute ml-370 -mt-9">
        <button @mouseover="open = true" class="text-white py-2 px-3 ml-0.5 text-sm inline-block hover:bg-gray-200 hover:text-black">Dropdown<i class="fa-solid fa-caret-down ml-1"></i></button>

        <div x-show="open" class="flex flex-col bg-white">
            <a href="#" class="py-2 pl-3 w-32 text-black hover:bg-gray-200">Link 1</a>
            <a href="#" class="py-2 pl-3 w-32 text-black hover:bg-gray-200">Link 2</a>
            <a href="#" class="py-2 pl-3 w-32 text-black hover:bg-gray-200">Link 3</a>
        </div>
    </div>
</nav>
