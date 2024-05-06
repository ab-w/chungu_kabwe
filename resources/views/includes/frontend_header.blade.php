<header class="py-4 mb-2 h-" style="background: rgb(9,40,5); background: linear-gradient(90deg, rgba(9,40,5,1) 7%, rgba(54,131,45,1) 61%, rgba(164,159,3,1) 88%);">
    <div class=" mx-auto flex justify-between items-center px-4">
        <h1 class="flex items-center text-xl font-bold text-white">
            <img src="https://www.unza.zm/themes/unza/logo.svg" alt="UNZA Logo" class="mr-3 h-8">
                 
        </h1>
        <nav>
            <ul class="flex space-x-4 ">
                <li><a href="#" class="text-white hover:text-gray-200">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">FAQ</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Contact</a></li>
            </ul>
        </nav>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-300">Log in</a>
                @endif
            @endif
            
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-white hover:text-gray-300">/ Register</a>
            @endif
        </div>
    </div>
</header>
