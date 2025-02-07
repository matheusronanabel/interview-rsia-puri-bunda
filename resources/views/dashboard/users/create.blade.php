<x-layouts.dashboard>
    <div class="col-span-4" x-data="{togglePositionForm: false}">
        <div class="text-xl">
            Buat Karyawan Baru
        </div>
        @if ($errors->any())
                <div class="p-4 bg-red-100 text-red-800 text-xs rounded-lg space-y-2 shadow-xl shadow-red-800/20">
                    <div class="font-semibold">
                        Coba lagi yuk!
                    </div>
                    @foreach ($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
        <div class="col-span-4 p-6 bg-white drop-shadow-sm rounded-lg mt-8">
            <form action="{{route('dashboard.users.store')}}" method="POST" class="gap-4 grid grid-cols-2" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                    for="unit_id">Unit <span class="text-red-600">*</span></label>
                    <select name="unit_id" id="" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                        @foreach ($units as $unit)                        
                        <option @if(old('unit_id') == $unit->id) selected @endif value="{{$unit->id}}">{{$unit->name}}</option>                    
                        @endforeach
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                    for="name">Nama <span class="text-red-600">*</span></label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nama Karyawan" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                </div>
                <div class="space-y-2">
                    <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                    for="username">Username <span class="text-red-600">*</span></label>
                    <input autocomplete="false" type="text" name="username" id="username" value="{{old('username')}}" placeholder="Username Karyawan" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                </div>
                <div class="space-y-2">
                    <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                    for="password">Password <span class="text-red-600">*</span></label>
                    <input autocomplete="new-password" type="password" name="password" id="password" value="{{old('password')}}" placeholder="Password Karyawan" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                </div>
                <div class="space-y-2">
                    <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                    for="join_date">tanggal bergabung <span class="text-red-600">*</span></label>
                    <input autocomplete="false" type="date" name="join_date" id="join_date" value="{{old('join_date')}}" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                </div>
                <div class="space-y-2">
                    <div class="flex w-full justify-between items-center">
                        <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                        for="positions">Jabatan <span class="text-red-600">*</span></label>
                        <div class="text-[10px] px-2 py-2 bg-white text-blue-600 border border-blue-600 rounded-lg uppercase cursor-pointer" @click="togglePositionForm = !togglePositionForm">
                            tambah jabatan baru
                        </div>
                    </div>
                    <livewire:multi-select/>
                </div>
                <div class="col-span-2">
                    <button class="text-white bg-blue-600 w-full py-2.5 rounded-lg" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <div class="h-screen bg-black/10 backdrop-blur-sm fixed w-full top-0 right-0 flex items-center justify-center" x-cloak x-show="togglePositionForm">
            <div class="w-full max-w-xl bg-white p-4 rounded-lg space-y-8">
                <div class="">
                    Tambah Jabatan Baru
                </div>
                <form action="{{route('dashboard.users.new-position')}}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                        for="name">Nama <span class="text-red-600">*</span></label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nama Jabatan" class="focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
                    </div>
                    <div class="space-y-2">
                        <button class="text-white bg-blue-600 w-full py-2.5 rounded-lg" type="submit">
                            Simpan
                        </button>
                        <button class="bg-white text-blue-600 w-full py-2.5 rounded-lg" type="button" @click="togglePositionForm = false">
                            Tutup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.dashboard>