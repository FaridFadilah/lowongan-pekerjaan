<x-slot:title>{{ __('jobseek dashboard') }}</x-slot>
<div class="container mx-auto">
  <div class="flex p-5 w-full gap-2 rounded-xl">
    <div>
        <img class="w-full" src="{{ asset('img/' . Auth::user()->foto) }}" alt="">
    </div>
    <div class="flex flex-col">
        <h1 class="text-2xl font-bold text-textDark">{{ Auth::user()->name }}</h1>
        <div class="flex items-center  py-5  text-textDark ">
            <div class="flex flex-col gap-3 ">
              <h2 class="text-xl text-textDark">Phone</h2>
              <h3 class="text-lg text-gray-500">{{ Auth::user()->no_telp }}</h3t>
            </div>
            <div class="flex flex-col gap-3 ">
              <h2 class="text-xl text-textDark">Phone</h2>
              <h3 class="text-lg text-gray-500">{{ Auth::user()->no_telp }}</h3t>
            </div>
            <div class="flex flex-col gap-3 ">
                <h2 class="text-xl text-textDark">email</h2>
                <h3 class="text-lg text-gray-500">{{ Auth::user()->email }}</h3>
            </div>
          <div class="flex  justify-between gap-4 py-5  text-textDark ">  
            <div class="flex flex-col gap-3 items-end">
              <h4 class="text-xl text-textDark">Umur</h4>
              <h3 class="text-lg text-gray-500">{{ Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->age }}</h3>
            </div>
          </div>
          <div class="flex flex-col gap-3 ">
            <h4 class="text-xl text-textDark">Situs</h4>
            <h3 class="text-lg text-gray-500">test</h3>
          </div>
        </div>
      </div>
    </div>
  <div class="flex flex-col items-center border-2 my-5 rounded-xl p-5 border-gray-500">
    {{-- <h1 class="text-2xl my-3">Lowongan yang tersedia di {{ $company->name }}</h1> --}}
    <div class="grid grid-cols-4 gap-4 items-center">
      {{-- @foreach($loker as $key => $data) --}}
              {{-- <div :wire:key="{{ 'card-' . $key }}">
                  <livewire:components.cards :loker='$data'/> 
              </div> --}}
          {{-- @endforeach --}}
      </div>
  </div>
</div>