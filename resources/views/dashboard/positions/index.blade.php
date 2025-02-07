<x-layouts.dashboard>
    <div class="text-xl">
        Manajemen Jabatan
    </div>
    <div class="p-6 bg-white col-span-4">
        <div class="w-full flex justify-between items-center">
            <div class="text-base">
                List Jabatan
            </div>
            <div class="">
                <a href="{{route('dashboard.positions.create')}}" class="w-full px-4 py-2.5 bg-blue-600 text-white rounded-lg text-sm">Tambah Jabatan Baru</a>
            </div>
        </div>
        <div class="">
            <livewire:unit.position-list/>
        </div>
    </div>
</x-layouts.dashboard>