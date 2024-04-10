<x-guest-layout>
    <div class="mb-4 text-center text-2xl text-gray-900">
        {{ __('Ati uitat parola?') }}
    </div>
    <div class="mb-4 text-center text-m text-gray-600">
        {{ __('Introduceti adresa de email pe care ati utilizat la creareacontului dvs., iar noi va vom trimite un link pentru resetarea parolei') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center block justify-center mt-4">
{{--            <x-primary-button>--}}
{{--                {{ __('Trimite') }}--}}
{{--            </x-primary-button>--}}
            <x-primary-button  type="submit" class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Trimite</x-primary-button>
        </div>
    </form>
    <div class="text-sm mt-10 text-center leading-6">
        <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500"> <- Inapoi la autentificare</a>
    </div>
</x-guest-layout>
