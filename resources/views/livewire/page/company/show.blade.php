<x-slot:title>{{ __('company ' . $company->name) }}</x-slot>
<div class="container mx-auto ">
    <div class="flex border-2 p-5 border-gray-500 rounded-xl">
        <div >
            <img class="w-full" src="{{ asset('img/' . $company->foto) }}" alt="">
        </div>
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold text-textDark">{{ $company->name }}</h1>
            <p class="text-lg text-textDark">{{ $company->deskripsi }}</p>
            <div class="grid grid-cols-2 py-5 gap-3 justify-between">
                <div class="w-[350px] flex justify-between items-center">
                    <h4>kantor pusat</h4>
                    <h3>{{ $company->kota->name }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>industri</h4>
                    <h3>{{ $company->jenis_usaha }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>kapasitas karyawan</h4>
                    <h3>{{ $company->size_karyawan }}</h3>
                </div>
                <div class="w-[350px] flex justify-between items-center">
                    <h4>Situs </h4>
                    <h3><a href="{{ $company->url }}" class="text-blue-500 underline">{{ $company->url }}</a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center border-2 my-5 rounded-xl p-5 border-gray-500">
        <h1 class="text-2xl my-3">Lowongan yang tersedia di {{ $company->name }}</h1>
        <div class="grid grid-cols-4 gap-4 items-center">
            @foreach($loker as $key => $data)
                <div :wire:key="{{ 'card-' . $key }}">
                    <livewire:components.cards :loker='$data'/> 
                </div>
            @endforeach
        </div>
    </div>
</div>
