<x-app-layout>

    <!-- Jumbotron -->
    @include('home.jumbotron')
    <!-- Jumbotron -->

   @include('home.product')


    <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Your Trip Starts
                        Here</h1>
                    <p class="mt-4 text-xl text-gray-500">The results are in! Explore this year's expert-approved list
                        of must-see destinations, places, and unforgettable experiences guaranteed to inspire.</p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                             class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="\Images\t8.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="\Images\t4.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="\Images\t5.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="\Images\t6.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="\Images\t7.jpg" alt=""
                                                 class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a href="#"
                           class="inline-block rounded-md border border-transparent bg-purple-800 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer container -->
    @include('home.footer')
</x-app-layout>





