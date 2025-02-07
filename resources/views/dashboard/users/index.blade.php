<x-layouts.dashboard>
    <div class="text-xl">
        Manajemen Karyawan
    </div>
    <div class="p-6 bg-white col-span-4">
        <div class="w-full flex justify-between items-center">
            <div class="text-base">
                List Karyawan
            </div>
            <div class="">
                <a href="{{route('dashboard.users.create')}}" class="w-full px-4 py-2.5 bg-blue-600 text-white rounded-lg text-sm">Tambah Karyawan Baru</a>
            </div>
        </div>
        <div class="">
            <livewire:user-list/>
        </div>
    </div>
</x-layouts.dashboard>