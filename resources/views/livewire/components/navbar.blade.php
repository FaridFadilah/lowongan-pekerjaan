<div class="p-5 ">
    <div class="flex items-center justify-between">
        <div class="flex gap-6">
            <a class="text-4xl font-bold text-textDark" href="{{ route('home') }}">Jobseek</a>
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" class="text-sm font-medium transition duration-500 hover:border-b-2 hover:border-textDark text-textDark">Lowongan pekerjaan</a>
                <a href="{{ route('company.index') }}" class="text-sm font-medium transition duration-500 hover:border-b-2 hover:border-textDark text-textDark">Perusahaan</a>
            </div>
        </div>
        <div class="flex items-center gap-5">
            @if(Auth::check())
                <div x-data='{open : false}' class="">
                    <button x-on:click='open = !open' class="flex flex-col items-center gap-3 p-3 border-2 border-gray-500 rounded-xl ">
                        <div class="flex items-center gap-4">
                            <div class="w-10">
                                <img class="w-full" src="{{ asset('img/' . Auth::user()->foto) }}" alt="">
                            </div>
                            {{ Auth::user()->name }}
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>                              
                            </span>
                        </div>
                        <a x-show='open' href="{{ Auth::user()->role_id == 1 ? route('jobs.dashboard') : route('company.dashboard') }}" class="w-full p-3 border-2 text-textDark rounded-xl border-textDark">Dashboard</a>
                        <a x-show='open' href="{{ route('auth.action.logout') }}" class="w-full p-3 border-2 text-textDark rounded-xl border-textDark">Logout</a>
                    </button>
                </div>
            @endif
            @guest
                <a href="{{ route('auth.login') }}" class="text-textDark">Login</a>
                <a href="{{ route('auth.register') }}" class="text-textDark">Register</a>
            @endguest
        </div>
    </div>
</div>