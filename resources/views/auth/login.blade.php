<x-layouts.auth>
    <main class="min-h-screen bg-neutral-50 flex items-center justify-center w-full px-4 md:px-0">
        <section class="p-8 w-full max-w-lg bg-white space-y-6">
            <div class="space-y-2">
                <div class="text-2xl font-semibold tracking-tight">
                    Selamat Datang!
                </div>
                <div class="text-neutral-400">
                    Silakan login ke akun anda.
                </div>
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
            <div>
                <form action="{{ route('auth.login') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                            for="username">Username</label>
                        <input type="text" name="username" id="username" value="{{ old('username') }}"
                            placeholder="Username"
                            class="w-full p-4 border border-neutral-100 rounded-lg focus:outline-none focus:shadow-lg focus:shadow-blue-600/20 transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm uppercase font-medium tracking-[1px] text-neutral-600"
                            for="Password">Password</label>
                        <input type="password" name="password" id="Password" placeholder="Password"
                            class="w-full p-4 border border-neutral-100 rounded-lg focus:outline-none focus:shadow-lg focus:shadow-blue-600/20 transition-all">
                    </div>
                    <button class="py-4 bg-blue-600 text-white w-full rounded-lg">
                        Login
                    </button>
                </form>
            </div>
        </section>
    </main>
</x-layouts.auth>
