<aside class="col-span-2 drop-shadow-md h-full bg-white p-8 space-y-8 sticky ">
    <div class="">
        RSIA Puri Bunda
    </div>
    <div class="space-y-2">
        <x-partials.sidebar-link href="{{route('dashboard.index')}}">
            Dashboard
        </x-partials.sidebar-link>
        <x-partials.sidebar-link href="{{route('dashboard.users.index')}}">
            Karyawan
        </x-partials.sidebar-link>
        <x-partials.sidebar-link href="{{route('dashboard.units.index')}}">
            Unit
        </x-partials.sidebar-link>
        <x-partials.sidebar-link href="{{route('dashboard.positions.index')}}">
            Jabatan
        </x-partials.sidebar-link>
        <x-partials.sidebar-link href="{{route('dashboard.logs.index')}}">
            Logs
        </x-partials.sidebar-link>
    </div>
</aside>