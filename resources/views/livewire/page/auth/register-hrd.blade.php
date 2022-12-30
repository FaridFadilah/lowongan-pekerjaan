    <x-slot:title>{{ __('register hrd') }}</x-slot>
    <div class="relative flex items-center justify-center min-h-screen bg-secFirst">
        <a href="{{ route('home') }}" class="absolute top-[50px] left-[50px] p-2.5 bg-white text-greenDark rounded border-2 border-greenDark hover:bg-greenDark hover:text-white transition duration-200">kembali</a>
        <form enctype="multipart/form-data" method="POST" class="flex flex-col justify-around p-5 bg-white shadow-2xl text-textDark rounded-xl " action="{{ route('auth.action.register.hrd') }}">
            @csrf 
            <h1 class="text-3xl font-bold my-3">Register sebagai hrd</h1>
            <h3 class="text-lg">form HRD</h3>
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
                <div class="my-5">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </div>
                <div class="my-5">
                    <label>foto user</label>
                    <input name="foto_user" type="file" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
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
                </div>
            <h1>Company</h1>
            <div class="flex items-center py-5 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label>name company</label>
                    @error('name-hrd')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="text" name="name_company">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label>url</label>
                    @error('url')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="text" class="p-1.5 w-full border-2 border-gray-300 rounded"  name="url">
                </div>
            </div>
            <div class="flex items-center py-5 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label>jenis usaha</label>
                    @error('jenis_usaha')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input class="p-1.5 w-full border-2 border-gray-300 rounded" type="text" name="jenis_usaha">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label>size karyawan</label>
                    @error('size_karyawan')
                        <p class="italic text-red-500">{{ $message }}</p>
                    @enderror
                    <input type="number" class="p-1.5 w-full border-2 border-gray-300 rounded"  name="size_karyawan">
                </div>
            </div>
            <div class="my-5">
                <label>Deskripsi Company</label>
                <textarea name="deskripsi_company" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
            <div class="my-5 flex flex-col">
                <label>Foto</label>
                <input name="foto_company" type="file" class="">
            </div>
            <button class="p-1.5 w-full border-2 border-gray-300 rounded" type="submit">Submit</button>
            <hr class="my-5 border border-gray-500">
            <p>already have a account, <a href="{{ route('auth.login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </form>
    </div>