<x-slot:title>{{ __('company ' . $company->name) }}</x-slot>
<div class="container mx-auto">
    <div class="flex gap-6 p-5 rounded-xl">
        <div >
            <img class="w-full" src="{{ asset('img/' . $company->logo) }}" alt="">
        </div>
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold text-textDark">{{ $company->name }}</h1>
            <p class="text-lg text-textDark">{{ $company->deskripsi }}</p>
            <div class="grid justify-between grid-cols-2 gap-3 py-5">
                <div class="w-[350px] flex justify-between items-center">
                    <h4>kantor pusat</h4>
                    <h3 class='text-gray-500'>{{ $company->kota->name }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>industri</h4>
                    <h3 class='text-gray-500'>{{ $company->jenis_usaha }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>kapasitas karyawan</h4>
                    <h3 class='text-gray-500'>{{ $company->size_karyawan }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>Situs </h4>
                    <h3><a href="{{ $company->url }}" class="text-blue-500 underline">{{ $company->url }}</a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center p-5 my-5 border-2 border-gray-500 rounded-xl">
        <h1 class="my-3 text-2xl">Lowongan yang tersedia di {{ $company->name }}</h1>
        @if($loker->first() == null)
            <p class="flex items-center justify-center text-center text-gray-500">Perusahaan ini sedang tidak membuka lowongan pekerjaan</p>
        @endif
        <div class="grid items-center grid-cols-4 gap-4">
            @foreach($loker as $key => $data)
                <div :wire:key="{{ 'card-' . $key }}">
                    <livewire:components.cards :loker='$data'/> 
                </div>
            @endforeach
        </div>
    </div>
</div>
