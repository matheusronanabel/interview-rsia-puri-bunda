<x-layouts.dashboard>
    <div class="text-xl">
        Manajemen Unit
    </div>
    <div class="p-6 bg-white col-span-4">
        <div class="w-full flex justify-between items-center">
            <div class="text-base">
                List Unit
            </div>
            <div class="">
                <a href="{{route('dashboard.units.create')}}" class="w-full px-4 py-2.5 bg-blue-600 text-white rounded-lg text-sm">Tambah Unit Baru</a>
            </div>
        </div>
        <div class="">
            <livewire:unit.unit-list/>
        </div>
    </div>
</x-layouts.dashboard>