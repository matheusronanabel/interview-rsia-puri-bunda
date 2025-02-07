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
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Terakhir Kali Login
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td class="px-6 py-3">
                        {{$log->user->name ?? ''}}
                    </td>
                    <td class="px-6 py-3">
                        {{$log->user->username ?? ''}}
                    </td>
                    <td class="px-6 py-3">
                        {{$log->login_time ?? ''}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-8">
        {{$logs->links()}}
    </div>
</div>
