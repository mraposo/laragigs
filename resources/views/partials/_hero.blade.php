<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="z-10">
        @auth
            <h1 class="text-5xl font-bold text-white ">
                Welcome
            </h1><br>
            <h1 class="text-3xl font-bold text-white ">
                {{ auth()->user()->name }}
            </h1>
            <div class="position-relative h-10 w-20 d-flex align-center">
                <img src="images/Beeldmerk.png" alt="">
            </div>
            <p class="text-2xl text-gray-200 font-bold my-4">
                Find or post jobs & projects
            </p>
        @else
            <h1 class="text-6xl font-bold uppercase text-white ">
                MoveAhead
            </h1>
            <div class="position-relative h-10 w-20 d-flex justify-content-center">
                <img src="images/Beeldmerk.png" alt="">
            </div>
            <p class="text-2xl text-gray-200 font-bold my-4">
                Find or post jobs & projects
            </p>
            <div>
                <a href="/register"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:bg-mario hover:bg-laravel">Sign
                    Up to List a Gig</a>
            </div>
        @endauth
    </div>
</section>
