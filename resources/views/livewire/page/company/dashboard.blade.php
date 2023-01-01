<x-slot:title>{{ __('jobseek dashboard') }}</x-slot>
<div x-data='{
  openForm : false 
}' class="container mx-auto">
  <div class="flex w-full gap-4 p-5 rounded-xl">
    <img class="w-[100px] h-full" src="{{ asset('img/' . Auth::user()->foto) }}" alt="">
    <div class="flex flex-col max-w-[1000px]">
      @if(session()->has('message'))
        @php $message = session()->get('message') @endphp
        <livewire:components.messages :message='$message'/>
      @endif
      <h1 class="text-2xl font-bold text-textDark">{{ Auth::user()->company->name }}</h1>
      <div class="flex items-center">
        <ul class="flex flex-col w-1/2 gap-3 p-3 my-2">
          <li class="flex items-center gap-3"><span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>                   
            </span> website : <a href="{{ Auth::user()->company->url }}" class="text-blue-500 hover:underline">{{ Auth::user()->company->url }}</a></li>
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
            <button type="button" x-on:click='openForm = !openForm' class="text-white bg-textDark px-2.5 py-1.5 rounded-xl">Tambah Loker</button>
          </li>
        </ul>
        <div class="flex flex-col gap-5">
          
        </div>
      </div>
      <div class="flex flex-col gap-4 w-[800px] py-2">
        <h1 class="text-lg">Biodata</h1>
        <p class="font-[300] text-md">{{ Auth::user()->company->deskripsi }}</p>
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