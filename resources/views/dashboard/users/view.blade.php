<x-layouts.dashboard>
    <div class="text-xl">
        Tampilan Karyawan
    </div>
    <div class="p-6 bg-white col-span-4 grid grid-cols-2 gap-6">
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Nama Karyawan
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->name}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Username
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->username}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Unit
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->unit->name}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Jabatan
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm space-x-1">
                @foreach ($user->positions as $position)
                <span class="p-2 bg-white rounded-full">
                    {{$position->name}}
                </span>
                    @endforeach

            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Password
            </div>
            <input type="password" class="p-4 rounded-lg bg-neutral-100 text-sm w-full" value="{{$user->password}}" readonly/ >
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Tanggal Bergabung
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->join_date}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Dibuat pada tanggal
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->created_at}}
            </div>
        </div>
        <div class="space-y-2">
            <div class="text-xs uppercase font-medium tracking-[1px] text-neutral-600">
                Terakhir Diperbaharui
            </div>
            <div class="p-4 rounded-lg bg-neutral-100 text-sm">
                {{$user->updated_at}}
            </div>
        </div>
    </div>
</x-layouts.dashboard>