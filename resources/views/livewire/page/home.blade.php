  <x-slot:title>{{ __('home') }}</x-slot>
  <div class="container mx-auto">
    <div class="flex items-center justify-center flex-col gap-5">
      <h1 class="text-2xl text-textDark mt-5 font-semibold">Lowongan pekerjaan yang saat ini tersedia</h1>
      @if(session()->has('message'))
        @php $message = session()->get('message') @endphp
        <livewire:components.messages :message='$message'/>
      @endif
    </div>
    <div class="flex gap-3 my-10 ">
      <div class="flex flex-col items-center w-1/5 gap-5 h-full py-3 border border-gray-500 rounded-xl">
        <h1>Filter Pencarianmu</h1>
        <hr class="w-4/5 border border-gray-500">
        <div x-data="{ type:false }" class="flex flex-col w-4/5">
          <button class=" p-1.5 w-full flex items-center gap-1.5 justify-center text-white bg-textDark rounded-xl" x-on:click="type = !type">type pekerjaan
            <span>
              <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </span>
          </button>
          <div x-show="type" class="flex flex-col items-center justify-center pt-2 gap-1.5">
            @foreach ($type as $data)
              <a class="text-sm font-bold" href="{{ route('jobs.type',$data->name) }}">{{ Str::replace('-' ,' ',$data->name) }}</a>
            @endforeach
          </div>
        </div>
        <div x-data="{ type:false }" class="flex flex-col w-4/5">
          <button class=" p-1.5 w-full flex items-center gap-1.5 justify-center text-white bg-textDark rounded-xl" x-on:click="type = !type">Kota
            <span class="inline-block">
              <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </span>
          </button>
          <div x-show="type" class="flex flex-col pt-3 items-center gap-1.5">
            @foreach ($kota as $data)
              <a class="text-sm font-bold" href="{{ route('jobs.kota',$data->name) }}">{{ Str::replace('-' ,' ',$data->name) }}</a>
            @endforeach
          </div>
        </div>
        <div x-data="{ type:false }" class="flex flex-col w-4/5">
          <button class=" p-1.5 w-full  flex items-center gap-1.5 justify-center text-white bg-textDark rounded-xl" x-on:click="type = !type">category
            <span class="inline-block">
              <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </span>
          </button>
          <div x-show="type" class="flex flex-col text-center pt-3 items-center gap-1.5">
            @foreach ($category as $data)
              <a class="text-sm font-bold" href="{{ route('jobs.category',$data->name) }}">{{ Str::replace('-' ,' ',$data->name) }}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="grid grid-cols-3 gap-8">
        @foreach($loker as $key => $data)
        <div :wire:key="{{ 'card-' . $key }}">
          <livewire:components.cards :loker='$data'/> 
        </div>
        @endforeach
      </div>
    </div>
  </div>