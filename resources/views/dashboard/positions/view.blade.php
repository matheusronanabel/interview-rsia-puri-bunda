<x-layouts.dashboard>
    <div class="text-xl">
        Tampilan Jabatan
    </div>
    <div class="p-6 bg-white col-span-4 grid grid-cols-2 gap-6">
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Nama Jabatan
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$position->name}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Dibuat pada tanggal
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$position->created_at}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Terakhir Diperbaharui
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$position->updated_at}}
            </div>
        </div>
    </div>
</x-layouts.dashboard>