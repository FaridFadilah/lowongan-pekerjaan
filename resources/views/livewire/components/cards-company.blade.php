<div class="border-2 border-gray-500 w-[400px] p-3 rounded-xl">
    <div class="flex flex-col ">
        <div class="flex items-center gap-5">
            <div class="w-12 rounded-xl ">
                <img src="{{ asset('img/' . $company->logo) }}" class="rounded-xl" alt="">
            </div>
            <div class="flex flex-col">
                <a class='text-lg hover:underline' href="{{ route('company.show', $company->id) }}" >{{ $company->name }}</a>
                <h5 class='text-gray-500 text-md' href="/" >{{ $kota }}</h5>
            </div>
        </div>
        <ul class="flex flex-col gap-4 py-5">
            <li class="flex items-center gap-3"><span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                  </svg>                  
            </span>{{ $company->jenis_usaha }}</li>
            <li class="flex items-center gap-3">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>
                </span>@if($count != null) <p class="text-blue-500"> {{ $count . ' Lowongan' }} </p> @else <p class="text-gray-500">sedang tidak ada lowongan</p> @endif
                </li>
            </ul>
    </div>
</div>