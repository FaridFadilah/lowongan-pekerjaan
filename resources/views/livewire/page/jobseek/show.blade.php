<x-slot:title>{{ __('loker ' . $loker->name) }}</x-slot>
<div x-data='{ 
    apply: false,
    openForm: false
    }'>
    <div class="container flex justify-center mx-auto gap-9">
        <div class="border-2 border-gray-500 w-[350px] p-4 rounded-xl">
            <div class="flex flex-col gap-2">
                <h1 class="text-2xl font-bold text-textDark">{{ $loker->name }}</h1>
                <a href="{{ route('company.show', $loker->company->id) }}" class="text-lg text-blue-500 hover:underline">{{ $loker->company->name }}</a>
                <button x-on:click='apply = !apply' class="h-10 text-white bg-blue-500 w-36 rounded-xl">Apply sekarang</button>
                <ul class="flex flex-col gap-3 p-3 list-none">
                <li class="flex items-center gap-3">
                    <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                  
                    </span>{{ number_format($loker->sallary,2, ',', '.') }}</li>
                <li class="flex items-center gap-3">
                    <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                      
                    </span> {{ Str::replace('-' ,' ',$loker->type->name) }}</li>
                <li class="flex items-center gap-3"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                </span>{{ $loker->kota->name }}</li>
                <li class="flex items-center gap-3"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>
                    </span>{{ $loker->min_pengalaman }}</li>
                <li class="flex items-center gap-3"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>                  
                    </span><a href="/" class="text-green-600">{{ $loker->category->name }}</a></li>
                </ul>
            </div>
        </div>
    <div :class="apply ? 'border-2 border-gray-500 w-[350px] h-full p-4 rounded-xl flex flex-col gap-3' : 'hidden' ">
        <h1 class="text-2xl font-bold text-textDark">Apply</h1>
        @if(Auth::check())
        <form method="POST" action="{{ route('jobs.action.apply') }}">
            @csrf
            <input type="hidden" value="{{ $loker->id }}" name="loker_id">
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <div class="flex flex-col">
                <label>Promosikan diri anda</label>
                    <textarea name="deskripsi" class="p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sebutkan keterampilan khusus dan bagaimana anda dapat berkontribusi "></textarea>
                </div>
                <div class="flex flex-col">
                    @php $cv = App\Models\Cv::where('user_id', Auth::user()->id)->first() @endphp
                    @if($cv == null)
                    <h4 class="my-2 text-gray-500">harap upload terlebih dahulu cv sebelum melakukan apply</h4>
                    @else 
                    <input type="hidden" value="{{ Auth::user()->cv->id }}" name="cv_id">
                    <div class="flex items-center justify-between">
                        <label>Cv yang akan kamu kirim</label>
                        <div class="">
                            <a href="{{ route('jobs.action.download.cv', Auth::user()->cv->id) }}" target="_blank" rel="noopener" class="text-blue-500 hover:underline">lihat</a>
                            <button type="button" x-on:click='openForm = !openForm' class="text-blue-500 hover:underline">edit</button>
                        </div>
                    </div>
                        <p class="text-xs">{{ $cv->name_file }}</p>
                    </div>
                    <button class="p-3 mt-5 text-white bg-blue-500 rounded-xl" type="submit">submit</button>
                    @endif
            </form>
            @else 
            <a class="text-blue-500" href="{{ route('auth.login') }}">login terlebih dahulu untuk melakukan apply</a>
            @endif
        </div>

        <form :class='openForm ? "flex flex-col gap-5" : "hidden"' action="{{ route('jobs.action.update.cv') }}" enctype="multipart/form-data" method="POST">
            @csrf @method('PUT')
            <h1 class="text-2xl font-bold">Edit CV</h1>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="file" name="name_file">
            <button type="submit" class="p-3 mt-5 text-white bg-blue-500 rounded-xl">Submit</button>
        </form>
    </div>
</div>