  <x-slot:title>{{ __('register') }}</x-slot>
  <div class="">
    <div class="flex items-center gap-3 my-10 ">
      <div class="flex flex-col gap-5">
        <h1>Filter Pencarianmu</h1>
        <div x-data="{ open:false }" class="flex flex-col items-center">
          <button x-on:click="open = !open">type pekerjaan</button>
          <div x-show="open" class="flex-col">
            @foreach ($collection as $item)
              <a href=""></a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="">
        
      </div>
    </div>
  </div>