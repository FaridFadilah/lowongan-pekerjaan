    <x-slot:title>{{ __('register') }}</x-slot>
    <div class="relative flex items-center justify-center min-h-screen bg-secFirst">
        <a href="{{ route('home') }}" class="absolute top-[50px] left-[50px] p-2.5 bg-white text-greenDark rounded border-2 border-greenDark hover:bg-greenDark hover:text-white transition duration-200">kembali</a>
        <form method="POST" class="flex flex-col justify-around p-5 bg-white shadow-2xl text-textDark rounded-xl " action="{{ route('auth.register') }}">
            @csrf 
            <h1 class="text-xl">Register</h1>
            <div class="flex items-center gap-4 my-5">
                <div class="flex flex-col gap-1.5">
                    <label for="">Username</label>
                    @error('name')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="text" name="name">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label>Password</label>
                    @error('password')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="password" name="password">
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex flex-col gap-1.5">
                    <label>Pendidikan terakhir</label>
                    @error('pendidikan_terakhir')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="text" name="pendidikan_terakhir">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label>no telpon</label>
                    @error('no_telp')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="number" class="p-1.5 w-full border-2 border-gray-300 rounded"  name="no_telp">
                </div>
            </div>
            <div class="flex items-center gap-4 my-5">
                <div class="flex flex-col gap-1.5">
                    <label>Email</label>
                    @error('email')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="email" name="email">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label>tanggal lahir</label>
                    @error('tanggal_lahir')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="date" name="tanggal_lahir">
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-4 py-4 my-5 border-b-2 border-gray-500">
                <label>Jenis Kelamin</label>
                <select name="gender" class="p-1.5 w-2/4 border-2 border-gray-300 rounded" id="">
                    <option type="text" >Laki Laki</option>
                    <option type="text" >Perempuan</option>
                </select>
                <button class="p-1.5 w-1/2 border-2 border-gray-300 rounded" type="submit">Submit</button>
            </div>
            <p>already have a account, <a href="{{ route('auth.login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </form>
    </div>