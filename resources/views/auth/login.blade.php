<x-guest-layout>
{{-- LEFT SIDE: BRANDING --}}

<section class="hidden lg:flex flex-col items-center justify-center
    bg-[#F8EBDD] px-12 py-10 relative overflow-hidden">

    {{-- Decorative circles --}}
    <div class="absolute -top-24 -left-24 w-72 h-72
        rounded-full bg-[#EFC9B5] opacity-30"></div>

    <div class="absolute -bottom-24 -right-24 w-80 h-80
        rounded-full bg-[#E9A69A] opacity-20"></div>

    <div class="relative z-10 max-w-lg text-center">

        {{-- Logo --}}
        <img
            src="{{ asset('images/valerie-pawcraft-logo.png') }}"
            alt="Valerie PawCraft"
            class="w-full max-w-[390px] mx-auto object-contain"
        >

        <div class="mt-5">
            <h1 class="text-3xl font-serif text-[#67432F]">
                Handmade with Love ♡
            </h1>

            <p class="mt-3 text-sm leading-relaxed
                text-[#98745C] max-w-sm mx-auto">
                Every little creation has a story.
                Let's make every order special!
            </p>
        </div>

        <div class="mt-8 flex justify-center gap-3
            text-[#D88B7E] text-xl">
            <span>♡</span>
            <span>✿</span>
            <span>♡</span>
            <span>✿</span>
            <span>♡</span>
        </div>

    </div>

    <p class="absolute bottom-6 text-xs tracking-widest
        text-[#A98B72]">
        VALERIE PAWCRAFT · EST. WITH LOVE
    </p>

</section>


{{-- RIGHT SIDE: LOGIN FORM --}}

<section class="flex items-center justify-center
    min-h-screen px-6 py-12 sm:px-10">

    <div class="w-full max-w-md">

        {{-- Mobile Logo --}}
        <div class="lg:hidden text-center mb-8">

            <img
                src="{{ asset('images/valerie-pawcraft-logo.png') }}"
                alt="Valerie PawCraft"
                class="w-48 mx-auto"
            >

        </div>


        {{-- Heading --}}
        <div class="mb-8">

            <div class="inline-flex items-center gap-2
                rounded-full bg-[#F8EBDD] px-4 py-2 mb-5">

                <span class="text-[#D98276]">♡</span>

                <span class="text-xs font-medium tracking-wide
                    text-[#946C53]">
                    PAWCRAFT MANAGEMENT
                </span>

            </div>

            <h2 class="text-4xl font-serif font-semibold
                text-[#67432F]">
                Welcome Back!
            </h2>

            <p class="mt-3 text-sm leading-relaxed
                text-[#987D69]">
                Welcome back, lovely creator!
                Sign in to manage your orders and creations.
            </p>

        </div>


        {{-- Session Status --}}
        <x-auth-session-status
            class="mb-4"
            :status="session('status')"
        />


        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}"
            class="space-y-5">

            @csrf

            {{-- Email --}}
            <div>

                <label for="email"
                    class="block text-sm font-semibold
                    text-[#67432F] mb-2">

                    Email Address

                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Enter your email"

                    class="w-full rounded-xl border border-[#EAD8C7]
                    bg-white px-4 py-3.5 text-sm text-[#67432F]
                    placeholder-[#BCA997]
                    focus:border-[#E98B80]
                    focus:ring-2 focus:ring-[#E98B80]/20
                    outline-none transition"
                >

                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />

            </div>


            {{-- Password --}}
            <div>

                <label for="password"
                    class="block text-sm font-semibold
                    text-[#67432F] mb-2">

                    Password

                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Enter your password"

                    class="w-full rounded-xl border border-[#EAD8C7]
                    bg-white px-4 py-3.5 text-sm text-[#67432F]
                    placeholder-[#BCA997]
                    focus:border-[#E98B80]
                    focus:ring-2 focus:ring-[#E98B80]/20
                    outline-none transition"
                >

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />

            </div>


            {{-- Remember Me --}}
            <div class="flex items-center justify-between">

                <label for="remember_me"
                    class="inline-flex items-center gap-2
                    text-sm text-[#987D69]">

                    <input
                        id="remember_me"
                        type="checkbox"
                        name="remember"
                        class="rounded border-[#D9C5B2]
                        text-[#E98B80]
                        focus:ring-[#E98B80]"
                    >

                    Remember me

                </label>

                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}"
                        class="text-sm font-medium
                        text-[#D98276] hover:text-[#B96C62]
                        transition">

                        Forgot password?

                    </a>

                @endif

            </div>


            {{-- Login Button --}}
            <button
                type="submit"
                class="w-full rounded-xl bg-[#E98B80]
                px-5 py-3.5 text-sm font-semibold
                text-white shadow-md shadow-[#E98B80]/20
                hover:bg-[#D77C72]
                hover:-translate-y-0.5
                active:translate-y-0
                transition duration-200">

                Sign In to PawCraft
                <span class="ml-1">♡</span>

            </button>

        </form>


        {{-- Footer --}}
        <div class="mt-10 text-center">

            <div class="flex items-center justify-center gap-3
                text-[#D9B6A0]">

                <span>────────</span>
                <span>♡</span>
                <span>────────</span>

            </div>

            <p class="mt-4 text-xs text-[#A98B72]">
                Handmade with love, managed with care.
            </p>

            <p class="mt-2 text-xs text-[#BCA997]">
                © {{ date('Y') }} Valerie PawCraft
            </p>

        </div>

    </div>

</section>

</x-guest-layout>