    <x-slot:title>{{ __('register') }}</x-slot>
    <div class="relative flex items-center justify-center min-h-screen bg-secFirst">
        <a href="{{ route('home') }}" class="absolute top-[50px] left-[50px] p-2.5 bg-white text-textDark rounded border-2 border-textDark hover:bg-textDark hover:text-white transition duration-200">kembali</a>
        <form method="POST" class="flex p-5 flex-col my-8 justify-around w-[750px] bg-white shadow-2xl text-textDark rounded-xl " action="{{ route('auth.register') }}" enctype="multipart/form-data">
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
            <div class="flex items-center gap-2">
                <div class="flex flex-col w-[20%] gap-1.5">
                    <label>Pendidikan terakhir</label>
                    @error('pendidikan_terakhir')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <select class="p-1.5 border-2 border-gray-300 rounded" type="text" name="pendidikan_terakhir">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktor">Doktor</option>
                    </select>
                </div>
                <div class="flex flex-col w-1/5 gap-1.5">
                    <label>no telp</label>
                    @error('no_telp')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="number" class="p-1.5 border-2 border-gray-300 rounded"  name="no_telp">
                </div>
                <div class="flex flex-col w-2/5 gap-1.5">
                    <label>Spesialis</label>
                    @error('spesialis')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="text" class="p-1.5 border-2 border-gray-300 rounded"  name="spesialis">
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
            <div class="my-5">
                <label>Deskripsi</label>
                <textarea name="deskripsi" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsikan biodata anda"></textarea>
            </div>
            <div class="flex items-center gap-4 py-4 my-5">
                <div class="flex flex-col">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="p-1.5 w-full border-2 border-gray-300 rounded" id="">
                        <option value="laki-laki" >Laki Laki</option>
                        <option value="perempuan" >Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col">
                <label>Asal kota</label>
                    <select name="Kota" class="p-1.5 w-full border-2 border-gray-300 rounded" id="">
                        @foreach($getKota as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label>photo profile</label>
                    <input name="foto" type="file">
                </div>
            </div>
            <button class="p-1.5 w-full border-2 border-gray-300 rounded" type="submit">Submit</button>
            <hr class="my-5 border border-gray-500">
            <p class='my-4'>already have a account, <a href="{{ route('auth.login') }}" class="text-blue-500 hover:underline">Login</a></p>
            <p class='my-4'>are u, human resource development?, <a href="{{ route('auth.action.register.hrd') }}" class="text-blue-500 hover:underline">Regist in here</a></p>
        </form>
    </div>