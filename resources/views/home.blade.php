<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>practice</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

{{--header--}}
<header class="sticky top-0 z-50 flex flex-row justify-between bg-black ">
    @include('layouts.navigation')

    <div><i class="fa-solid fa-magnifying-glass text-white pr-2.5 pt-2"></i></div>

</header>

<main>
    {{--image--}}
    <section>
        <img src="{{asset("/images/sailboat.jpg")}}" class="h-500 w-full" >
        <a href="#" class="absolute inline-block -mt-16 ml-6 px-4 py-2 bg-black hover:bg-indigo-500 text-white text-2xl">LEARN W3.CSS</a>
    </section>

    {{--Our team--}}
    <section>
        <div class="text-center mt-16">
            <h1 class="text-2xl mb-3">OUR TEAM</h1>
            <p class="text-sm">Meet the team - our office rats:</p>
        </div>
        <div class="flex justify-around mt-8">

            <x-member-card avatar="/images/avatar.jpg" full-name="Jon Doe" job-position="Web Designer"/>
            <x-member-card avatar="/images/avatar.jpg" full-name="Jon Doe" job-position="Web Designer"/>
            <x-member-card avatar="/images/avatar.jpg" full-name="Jon Doe" job-position="Web Designer"/>
            <x-member-card avatar="/images/avatar.jpg" full-name="Jon Doe" job-position="Web Designer"/>

        </div>
    </section>

    {{--Our Work--}}
    <section>
        <div class="flex flex-row justify-evenly relative bg-neutral-800 mt-48 h-550">
            <div class="text-white w-[calc(95%/4)] mt-20">
                <h1 class="text-2xl">OUR WORK</h1>
                <p class="text-sm mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <x-work-card work-image="/images/mountains.jpg" customer-name="Customer 1" class="w-[calc(95%/4)]">
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
            </x-work-card>

            <x-work-card work-image="/images/lights.jpg" customer-name="Customer 2" class="w-[calc(95%/4)]">
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
            </x-work-card>

            <x-work-card work-image="/images/snow.jpg" customer-name="Customer 3" class="w-[calc(95%/4)]">
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
                <tr class="text-sm">
                    <td class=" py-2">Blablabla</td>
                </tr>
            </x-work-card>


        </div>
    </section>

    {{--Pricing--}}
    <section class="h-600">
        <div class="text-center mt-16">
            <h1 class="text-3xl">PRICING</h1>
            <p class="text-sm mt-4">Choose a pricing plan that fits your needs.</p>
        </div>

        {{--Pricing maps--}}
        <div class="flex flex-row justify-evenly mt-12">

            <x-service-card price="10" name="Basic">
                <x-service-card-item><x-slot name="strong">10GB</x-slot> Storage</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Emails</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Domains</x-service-card-item>
                <x-service-card-item><x-slot name="strong">Endless</x-slot> Support</x-service-card-item>
            </x-service-card>

            <x-service-card price="10" name="Basic">
                <x-service-card-item><x-slot name="strong">10GB</x-slot> Storage</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Emails</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Domains</x-service-card-item>
                <x-service-card-item><x-slot name="strong">Endless</x-slot> Support</x-service-card-item>
            </x-service-card>

            <x-service-card price="10" name="Basic">
                <x-service-card-item><x-slot name="strong">10GB</x-slot> Storage</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Emails</x-service-card-item>
                <x-service-card-item><x-slot name="strong">10</x-slot> Domains</x-service-card-item>
                <x-service-card-item><x-slot name="strong">Endless</x-slot> Support</x-service-card-item>
            </x-service-card>

        </div>
    </section>

    {{--Contact Us--}}
    <section class="flex flex-row justify-between items-center h-400 bg-gray-100 mt-12 ">
        <div class="ml-3 h-4/6">
            <h1 class="text-2xl underline decoration-4 decoration-green-700 py-2">Contact Us</h1>
            <h2 class="py-2 text-xl">Address</h2>
            <p class="py-2 text-sm">Swing by for a cup of coffee, or whatever.</p>

            <p class="py-2 text-sm"><i class="fa-solid fa-location-dot text-green-700 text-xl"></i> Chicago, US</p>

            <p class="py-2 text-sm"><i class="fa-solid fa-phone text-green-700 text-xl"></i> +00 1515151515</p>

            <p class="py-2 text-sm"><i class="fa-solid fa-envelope text-green-700 text-xl"></i> test@test.com</p>
        </div>
        <div class="bg-white h-80 w-7/12 mr-3 shadow shadow-gray-400 shadow-lg">
            <div class="px-4 mt-8 ">
                    <label class="text-sm">Name</label> <br>
                    <input type="text" class="border-b border-gray-300 w-full mt-3">
                </div>

            <div class="px-4 mt-3">
                <label class="text-sm">Email</label> <br>
                <input type="email" class="border-b border-gray-300 w-full mt-3">
            </div>

            <div class="px-4 mt-3">
                <label class="text-sm">Message</label> <br>
                <input type="text" class="border-b border-gray-300 w-full mt-3">
            </div>

            <div class="flex justify-between items-center py-6 px-4">
                <div>
                    <input type="checkbox" checked class="scale-150">
                    <label class="inline-block">
                        I Liked it
                    </label>
                </div>
                <button class="bg-black hover:bg-gray-400 text-white px-4 py-2">Send</button>
            </div>

        </div>
    </section>
    <div>
        <img src="{{asset("/images/map.jpg")}}" class="h-600 w-full">
    </div>
</main>

<footer class="h-60 bg-black text-white text-center">
    <h1 class="pt-10 pb-2 text-xl">Follow Us</h1>
    <div class="mb-3">
        <a href="#" class="inline-block bg-teal-600 hover:bg-gray-400 py-2 px-4"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="inline-block bg-teal-600 hover:bg-gray-400 py-2 px-4"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="inline-block bg-teal-600 hover:bg-gray-400 py-2 px-4"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="inline-block bg-teal-600 hover:bg-gray-400 py-2 px-4"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <p class="text-sm">Powered by w3.css</p>
</footer>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>


