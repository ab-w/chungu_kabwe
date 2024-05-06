<div class="sticky top-0 w-full flex justify-center z-50 " style="background: rgb(9,40,5); background: linear-gradient(20deg, rgba(9,40,5,0.9220281862745098) 0%, rgba(17,75,11,0.9808517156862745) 5%, rgba(223,139,11,1) 57%, rgba(17,75,11,0.9612438725490196) 100%);">
    <div class="navbar  left-0 z-40 h-20 max-w-7xl">
        <div class="flex-1">
            <div>
                <a href="/">
                    <x-application-logo class="w-10 h-10 fill-current base-content" />
                </a>
            </div>
        </div>
        <div class="hidden md:block flex-none gap-2">
            @if (Auth::user())
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>

                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </button>

                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img 
                                alt="Tailwind CSS Navbar component" 
                                src="" 
                            />
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a href="#" class="justify-between text-base-content">
                                Role
                                <span class="badge capitalize">{{ Auth::user()->role }}</span>
                            </a>
                        </li>
                        <li>
                            @if (Auth::user()->role === "admin")
                                <a href="route('admin.dashboard')" class="justify-between text-base-content">
                                    Dashboard
                                    <span class="badge capitalize">{{ Auth::user()->name }}</span>
                                </a>
                            @endif

                            @if (Auth::user()->role === "agent")
                                <a href="{{route('agent.dashboard')}}" class="justify-between text-base-content">
                                    Dashboard
                                    <span class="badge capitalize">{{ Auth::user()->name }}</span>
                                </a>
                            @endif

                            @if (Auth::user()->role === "user")
                                <a href="route('user.dashboard')" class="justify-between text-base-content">
                                    Dashboard
                                    <span class="badge capitalize">{{ Auth::user()->name }}</span>
                                </a>
                            @endif
                            
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <p>{{ __('Log Out') }}</p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>

            @else
                <div class="dropdown dropdown-end">
                    <button tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>                          
                    </button>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a href="{{route('login')}}" >Login </a>
                        </li>
                    </ul>
                </div>

            @endif
            
        </div>

        <div>
            <button 
            id="drawer-button"
            type="button" 
            class="block md:hidden btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>  
            </button>
        </div>

    </div>
</div>


