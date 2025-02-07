<x-layouts.dashboard>

    <div class="p-4 bg-white border-l-4 rounded-lg overflow-hidden border-l-purple-800 space-y-0">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium leading-none">
                Jumlah Unit
            </div>
            <div class="p-2 rounded-full bg-purple-200 text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
            </div>
        </div>
        <div class="text-2xl font-semibold">
            {{ $unitCount }}
        </div>
    </div>
    <div class="p-4 bg-white border-l-4 rounded-lg overflow-hidden border-l-blue-800 space-y-0">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium leading-none">
                Jumlah Jabatan
            </div>
            <div class="p-2 rounded-full bg-blue-200 text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
            </div>
        </div>
        <div class="text-2xl font-semibold">
            {{ $positionCount }}
        </div>
    </div>
    <div class="p-4 bg-white border-l-4 rounded-lg overflow-hidden border-l-blue-800 space-y-0">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium leading-none">
                Jumlah Login
            </div>
            <div class="p-2 rounded-full bg-blue-200 text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
            </div>
        </div>
        <div class="text-2xl font-semibold">
            {{ $userLoginCount }}
        </div>
    </div>
    <div class="p-4 bg-white border-l-4 rounded-lg overflow-hidden border-l-purple-800 space-y-0">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium leading-none">
                Jumlah Karyawan
            </div>
            <div class="p-2 rounded-full bg-purple-200 text-purple-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path
                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path
                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
            </div>
        </div>
        <div class="text-2xl font-semibold">
            {{ $userCount }}
        </div>
    </div>
    <div class="p-4 bg-white border-l-4 col-span-4 rounded-lg overflow-hidden  border-l-green-800 space-y-4">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium leading-none">
                User dengan Login Terbanyak
            </div>
            <div class="p-2 rounded-full bg-green-200 text-green-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                  </svg>
                  
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mostLoggedInUsers as $user)
                        <tr class="bg-white border-b  border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{$user->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$user->username}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->unit->name}}
                            </td>
                            <td class="px-6 flex gap-2 flex-wrap py-4">
                                @foreach ($user->positions as $position)
                                    <span class="py-1 px-2 bg-blue-100 text-blue-800 text-xs rounded-full">
                                        {{$position->name}}
                                    </span>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.dashboard>
