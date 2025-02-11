<div class="mt-8">
<div class="w-full flex justify-start">
    <div class="p-4 border border-neutral-100 rounded-lg space-y-2">
        <div class="text-xs text-center">
            Filter Berdasarkan Tanggal
        </div>
        <div class="flex gap-4">
            <input type="date" wire:model.live='startDate' class="py-2 px-4 focus:outline-none text-xs border border-neutral-50 bg-white drop-shadow-sm"  id="">
            <input type="date" wire:model.live='endDate' class="py-2 px-4 focus:outline-none text-xs border border-neutral-50 bg-white drop-shadow-sm"  id="">
        </div>
    </div>
</div>
<table class="mt-6 w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Dibuat pada tanggal
            </th>
            <th scope="col" class="px-6 py-3">
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($units as $unit)
            <tr>
                <td class="px-6 py-3">
                    {{$unit->name}}
                </td>
                <td class="px-6 py-3">
                    {{$unit->created_at}}
                </td>
                <td class="px-6 py-3 flex gap-4">
                    <a href="{{route('dashboard.units.show',$unit->id)}}" class="flex items-center space-x-2 text-neutral-400">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                </svg>                                  
                        </div>
                        <div>
                            Lihat
                        </div>
                    </a>
                    <a href="{{route('dashboard.units.edit',$unit->id)}}" class="flex items-center space-x-2 text-yellow-400">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>
                                                            
                        </div>
                        <div>
                            Perbaharui
                        </div>
                    </a>
                    <form action="{{route('dashboard.units.destroy',$unit->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="flex items-center space-x-2 text-red-400">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                                            
                            </div>
                            <div>
                                Hapus
                            </div>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-8">
    {{$units->links()}}
</div>
</div>
