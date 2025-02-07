<x-layouts.dashboard>
    <div class="col-span-4 text-xl">
        Perbaharui Unit
    </div>
    <div class="col-span-4 p-6 bg-white drop-shadow-sm rounded-lg">
        <form action="{{route('dashboard.units.update',$unit->id)}}" method="POST" class="space-y-4">
            @csrf
            @method('put')
            <div class="space-y-2">
                <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                for="name">Nama Unit <span class="text-red-600">*</span></label>
                <input type="text" name="name" id="name" value="{{$unit->name}}" placeholder="Nama Unit" class=" focus:outline-none px-4 py-4 text-sm w-full border border-neutral-100 rounded-lg">
            </div>
            <div>
                <button class="text-white bg-blue-600 w-full py-2.5 rounded-lg" type="submit">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layouts.dashboard>