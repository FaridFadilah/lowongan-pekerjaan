<x-slot:title>{{ __('company') }}</x-slot>
<div class="container mx-auto">
  <div class="flex items-center justify-center flex-col gap-5">
    <h1 class="text-2xl text-textDark mt-5 font-semibold my-4">Perusahaan yg telah terdaftar</h1>
    @if(session()->has('message'))
      @php $message = session()->get('message') @endphp
      <livewire:components.messages :message='$message'/>
    @endif
  </div>
  <div class="grid grid-cols-3 gap-8">
    @foreach($company as $key => $data)
    <div :wire:key="{{ 'card-' . $key }}">
        <livewire:components.cards-company :company='$data'/> 
    </div>
    @endforeach
  </div>
</div>