<x-slot:title>{{ __('login') }}</x-slot>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-300 to-green-300">
        <form method="POST" class="flex flex-col justify-around gap-5 p-5 bg-white shadow-xl -2/4 rounded-xl" action="{{ route('auth.login') }}">
            @csrf 
            <h1 class="text-xl">Login</h1>
            @if(session()->has('message'))
                @php $message = session()->get('message') @endphp
                <livewire:components.messages :message='$message'/>
            @endif
            @foreach($errors->all() as $message)
                <p class="text-red-500">{{ $message }}</p>
            @endforeach
                <div class="flex flex-col">
                    <label>Email</label>
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="email" name="email">
                </div>
                <div class="flex flex-col">
                    <label>Password</label>
                    <div x-data='open : false' class="relative">
                        <input class="p-1.5 w-full border-2 border-gray-300 rounded" x-bind:type="open ? 'password' : 'text'" name="password">
                    </div>
                </div>
            <button class="p-1.5 w-1/2 border-2 border-gray-300 rounded" type="submit">Submit</button>
            <p>don't have account, <a href="{{ route('auth.register') }}" class="text-blue-500 hover:underline">register</a></p>
        </form>
    </div>