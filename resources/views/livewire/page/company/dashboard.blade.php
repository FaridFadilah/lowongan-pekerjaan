<x-slot:title>{{ __('Company dashboard') }}</x-slot>
<div x-data='{
  openForm : false,
  openTable : false
}' class="container mx-auto">
  <div class="flex w-full gap-4 p-5 rounded-xl">
    <img class="w-[100px] h-full" src="{{ asset('img/' . Auth::user()->foto) }}" alt="">
    <div class="flex flex-col max-w-[1000px]">
      @if(session()->has('message'))
        @php $message = session()->get('message') @endphp
        <livewire:components.messages :message='$message'/>
      @endif
      <h1 class="text-2xl font-bold text-textDark">{{ Auth::user()->company->name }}</h1>
      <div class="flex items-center gap-5">
        <ul class="flex flex-col w-[600px] gap-3 p-3 my-2">
          <li class="flex items-center gap-3"><span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>                   
            </span>  website : <a href="{{ Auth::user()->company->url }}" class="text-blue-500 hover:underline">{{ Auth::user()->company->url }}</a></li>
          <li class="flex items-center gap-3"><span class="inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
            </svg>          
          </span> {{ 'industri : ' . Auth::user()->company->jenis_usaha }}</li>
          <li class="flex items-center gap-3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
              </svg>         
            </span> {{ 'size karyawan : ' . Auth::user()->company->size_karyawan }}</li>
          <li class="flex items-center gap-3">
            <span>
              @if(Auth::user()->gender == 'laki laki')
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 9c0-4.97-4.03-9-9-9s-9 4.03-9 9c0 4.632 3.501 8.443 8 8.941v2.059h-3v2h3v2h2v-2h3v-2h-3v-2.059c4.499-.498 8-4.309 8-8.941zm-16 0c0-3.86 3.14-7 7-7s7 3.14 7 7-3.14 7-7 7-7-3.14-7-7z"/></svg>
              @else
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 2v2h3.586l-3.972 3.972c-1.54-1.231-3.489-1.972-5.614-1.972-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9c0-2.125-.741-4.074-1.972-5.614l3.972-3.972v3.586h2v-7h-7zm-6 20c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7z"/></svg>
              @endif
            </span> {{ 'kantor pusat : ' . Auth::user()->company->kota->name }}
          </li>
          <li class="flex items-center gap-3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>            
            </span> {{ 'no telp : ' . Auth::user()->no_telp }}
          </li>
          <li class="flex items-center gap-3">
            <button type="button" x-on:click='
            openForm = !openForm' class="text-white bg-textDark px-2.5 py-1.5 rounded-xl">Tambah Loker</button>
            <button type="button" x-on:click='
            openTable = !openTable
            openForm = !!openForm
            ' class="text-white bg-textDark px-2.5 py-1.5 rounded-xl">pelamar</button>
          </li>
      <li class="flex flex-col gap-4">
        <h1 class="text-lg">Biodata</h1>
        <p class="font-[300] text-md">{{ Auth::user()->company->deskripsi }}</p>
      </li>
        </ul>
        <form action="{{ route('company.action.store.loker') }}" method="POST" :class="openForm ? ' flex rounded-xl h-full flex-col gap-5 border-2 border-textDark p-3 w-[100%]' : 'hidden'"> @csrf
          <h1 class="text-2xl font-bold">Tambah Loker</h1>
          <input type="hidden" name="company_id" value="{{ Auth::user()->company->id }}">
          <div class="flex items-center gap-5">
            <div class="flex flex-col gap-3">
            <label>Kota</label>
            @error('kota_id')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
              <select class="py-1.5 px-2.5 rounded-xl" name="kota_id">
                @foreach($kota as $data)
                  <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="flex flex-col gap-3">
              <label>kategori</label>
              @error('category_id')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
                <select class="py-1.5 px-2.5 rounded-xl" name="category_id">
                  @foreach($category as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                  @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-3">
              <label for="">Type</label>
              @error('type_id')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
              <select class="py-1.5 px-2.5 rounded-xl" name="type_id">
                @foreach($type as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <div class="flex flex-col gap-3">
              <label for="">Name</label>
              @error('name')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
              <input type="text" value="{{ old('name') }}" name="name" class="p-3 border-2 border-textDark rounded-xl">
            </div>
            <div class="flex flex-col gap-3">
              <label for="">Kuota</label>
              @error('kuota')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
              <input type="number" name="kuota" value="{{ old('kuota') }}" class="p-3 border-2 border-textDark rounded-xl">
            </div>
          </div>
          <div class="flex flex-col gap-3">
            <label for="">deskripsi</label>
            @error('deskripsi')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea type="text" name="deskripsi" class="p-3 border-2 border-textDark rounded-xl">{{ old('deskripsi') }}</textarea>
          </div>
          <div class="flex items-center gap-3">
            <div class="flex flex-col gap-3">
              <label for="">min pengalaman</label>
              @error('min_pengalaman')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
              <input type="text" value="{{ old('min_pengalaman') }}" class="p-3 border-2 border-textDark rounded-xl" name="min_pengalaman">
            </div>
            <div class="flex flex-col gap-3">
              <label for="">Sallary</label>
              @error('sallary')
                <p class="text-red-500">{{ $message }}</p>
              @enderror
              <input type="number" value="{{ old('sallary') }}" class="p-3 border-2 border-textDark rounded-xl" name="sallary">
            </div>
          </div>
          <button type="submit" class="p-3 text-white bg-textDark rounded-xl">Submit</button>
        </form>
        <div :class="openTable ? 'flex rounded-xl h-full flex-col gap-5 border-2 border-textDark p-3' : 'hidden'">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th class="px-6 py-3 w-[100px]">user name</th>
                  <th class="px-6 py-3 w-[100px]">cv</th>
                  <th class="px-6 py-3 w-[100px]">loker</th>
                  <th class="px-6 py-3 w-[400px]">deskripsi</th>
                  <th class="px-6 py-3 w-[100px]">status</th>
                </tr>
            </thead>
            <tbody>
              @php $getLoker = Auth::user()->company->loker @endphp
                @foreach($getLoker as $loker)
                  @foreach ($loker->apply as $data)
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $data->user->name }}
                    </th>
                    <td class="px-6 py-4">
                      {{ $data->user->cv->name_file }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->loker->name }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->deskripsi }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $data->status_apply }}
                    </td>
                  </tr>
                @endforeach
              @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col items-center p-5 my-5 border-2 border-textDark rounded-xl">
    <h1 class="my-3 text-2xl">Daftar lowongan pekerjaan yang telah kamu apply</h1>
    @php 
      $getLoker = App\Models\Loker::where('company_id', Auth::user()->company->id )->get()
    @endphp

    {{-- @dd($getLoker) --}}
    @if($getLoker == null)
      <h1 class="my-5 text-lg text-center text-gray-500">saat ini anda tidak melamar pekerjaan satu pun</h1>
      @else
      <div class="grid items-center grid-cols-4 gap-4">
        @foreach($getLoker as $key => $data)
        <div :wire:key="{{ 'card-' . $key }}">
          <livewire:components.cards :loker='$data'/>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</div>