<x-slot:title>{{ __('jobseek dashboard') }}</x-slot>
<div class="container mx-auto">
  <div x-data='{
    openCv : false,
    openFormTambah : false,
    openFormEdit : false 
  }' class="flex w-full gap-4 p-5 rounded-xl">
    <img class="w-[200px] h-full" src="{{ asset('img/' . Auth::user()->foto) }}" alt="">
    <div class="flex flex-col max-w-[1000px]">
      @if(session()->has('message'))
        @php $message = session()->get('message') @endphp
        <livewire:components.messages :message='$message'/>
      @endif
      <h1 class="text-2xl font-bold text-textDark">{{ Auth::user()->name }}</h1>
      <h3 class="text-lg font-bold text-blue-500">{{ Auth::user()->spesialis }}</h3>
      <ul class="flex flex-col w-1/2 gap-3 p-3 my-2">
        <li class="flex items-center gap-3"><span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
          </svg>          
          </span> {{ 'email : ' . Auth::user()->email }}</li>
        <li class="flex items-center gap-3"><span class="inline-block">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
          </svg>
          </span> {{ 'number phone : ' . Auth::user()->no_telp }}</li>
        <li class="flex items-center gap-3">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>         
          </span> {{ 'pendidikan terakhir : ' . Auth::user()->pendidikan_terakhir }}</li>
        <li class="flex items-center gap-3">
          <span>
            @if(Auth::user()->gender == 'laki laki')
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 9c0-4.97-4.03-9-9-9s-9 4.03-9 9c0 4.632 3.501 8.443 8 8.941v2.059h-3v2h3v2h2v-2h3v-2h-3v-2.059c4.499-.498 8-4.309 8-8.941zm-16 0c0-3.86 3.14-7 7-7s7 3.14 7 7-3.14 7-7 7-7-3.14-7-7z"/></svg>
            @else
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 2v2h3.586l-3.972 3.972c-1.54-1.231-3.489-1.972-5.614-1.972-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9c0-2.125-.741-4.074-1.972-5.614l3.972-3.972v3.586h2v-7h-7zm-6 20c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7z"/></svg>
            @endif
          </span> {{ 'gender : ' . Str::replace('-',' ',Auth::user()->gender) }}
        </li>
        <li class="flex items-center gap-4">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>            
          </span> {{ 'umur, tanggal lahir : ' . Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->age . ' tahun | ' . Auth::user()->tanggal_lahir }}
        </li>
      </ul>
        <div class="flex flex-col gap-4 w-[800px] py-2">
          <h1 class="text-lg">Biodata</h1>
          <p class="font-[300] text-md">{{ Auth::user()->deskripsi }}</p>
        </div>
        @foreach($errors->all() as $message)
          <p class="text-red-500">{{ $message }}</p>
        @endforeach
        <div class="flex my-2 rounded-xl max-w-[800px] gap-5">
          <div class="flex flex-col w-[400px] border-2 rounded-xl border-textDark py-1.5 px-2.5">
            <div class="flex items-center justify-between">
              <h1>Resume</h1>
              @if(Auth::user()->cv == null)
                <button x-on:click='openFormTambah = !openFormTambah' class="py-1.5 px-3 text-textDark border-2 border-textDark rounded-xl hover:text-white hover:bg-textDark transition duration-200">Tambah</button>
              @else 
              <div class="flex items-center gap-3">
                <button x-on:click='openFormEdit = !openFormEdit' class="py-1.5 px-3 text-textDark border-2 border-textDark rounded-xl hover:text-white hover:bg-textDark transition duration-200">Edit</button>
                <form method="POST" action="{{ route('jobs.delete.cv', Auth::user()->cv->id) }}">
                  @csrf @method('DELETE')
                  <button class="py-1.5 px-3 text-textDark border-2 border-textDark rounded-xl hover:text-white hover:bg-textDark transition duration-200">Delete</button>
                </form>
              </div>
              @endif 
            </div>
            <div class="w-full my-3">
              @if(Auth::user()->cv == null)
                <p class="text-lg text-center text-gray-500">Kamu belum upload CV</p>
              @else 
                <p class="text-sm text-blue-700">{{ Auth::user()->cv->name_file }}</p>
              @endif 
            </div>
          </div>
          <form method="POST" enctype="multipart/form-data" action="{{ route('jobs.action.update.cv') }}" :class="openFormEdit ? 'flex flex-col gap-3' : 'hidden' ">
            @csrf @method('PUT')
            <h1>Edit CV</h1>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="file" name="name_file">
            <button type="submit" class="rounded-xl hover:bg-textDark hover:text-white text-textDark border-2 border-textDark px-2.5 py-1.5 transition duration-200">Submit</button>
        </form>
          <form method="POST" enctype="multipart/form-data" action="{{ route('jobs.action.store.cv') }}" :class="openFormTambah ? 'flex flex-col gap-3 border-2 border-textDark rounded-xl p-3' : 'hidden' ">
            @csrf
            <h1 class="text-lg font-bold">upload CV</h1>
            <p class="text-sm italic">max size file 2mb</p>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="file" name="name_file">
            <button type="submit" class="rounded-xl hover:bg-textDark hover:text-white text-textDark border-2 border-textDark px-2.5 py-1.5 transition duration-200">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="flex flex-col items-center p-5 my-5 border-2 border-textDark rounded-xl">
    <h1 class="my-3 text-2xl">Daftar lowongan pekerjaan yang telah kamu apply</h1>
    @php $getApply = App\Models\Apply::where('user_id', Auth::user()->id )->get() @endphp
    {{-- @dd($getApply) --}}
    
    @if($getApply == null)
      <h1 class="my-5 text-lg text-center text-gray-500">saat ini anda tidak melamar pekerjaan satu pun</h1>
    @else 
      <div class="grid items-center grid-cols-4 gap-4">
        @foreach($getApply as $key => $data)
        <div :wire:key="{{ 'card-' . $key }}">
          <div class="border-2 border-gray-500 w-[300px] p-3 rounded-xl">
            <div class="flex flex-col ">
                <div class="flex flex-col">
                    <a class='text-xl hover:underline' href="{{ route('jobs.show', $data->loker->id) }}" >{{ $data->loker->name }}</a>
                    <a href="/" class="text-blue-600 hover:underline text-md">{{ $data->loker->company->name }}</a>
                </div>
                <ul class="flex flex-col gap-2 py-5">
                    <li class="flex items-center gap-3">
                      <span class="">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>                  
                      </span> {{ number_format($data->loker->sallary,2, ',', '.') }}</li>
                    <li class="flex items-center gap-3">
                      <span class="">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>                      
                      </span> {{ Str::replace('-' ,' ',$data->loker->type->name) }}</li>
                    <li class="flex items-center gap-3"><span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                      </svg>
                      </span>{{ $data->loker->kota->name }}</li>
                    <li class="flex items-center gap-3"><span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                      </svg>
                      </span>{{ $data->loker->min_pengalaman }}</li>
                  </ul>
                  <span class="text-right text-green-600">{{ $data->status_apply }}</span>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
  </div>
</div>