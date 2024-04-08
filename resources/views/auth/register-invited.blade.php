<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            {{--        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">--}}
            <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Creaza un cont</h2>
            <h3 class="mt-2 text-center text-xl font-bold leading-9 tracking-tight text-gray-500">Introduceti adresa de email mai jos pentru a continua</h3>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="bg-white px-6 py-2 shadow sm:rounded-lg sm:px-4">
                <form class="space-y-6" action="{{ route('register-invited.store') }}" method="POST">
                    @csrf

                    <div>
                        <x-input-label for="name" class="block text-sm font-medium leading-6 text-gray-900" :value="__('Nume')"/>
                        <div class="mt-2">
                            <x-text-input id="name" name="name" type="text" :value="old('name')" required autocomplete="nume" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-input-label  for="email" class="block text-sm font-medium leading-6 text-gray-900" :value="__('Email')"/>
                        <div class="mt-2">
                            <x-text-input  id="email" name="email" type="email" value="{{$invitation->email}}"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-input-label for="password" class="block text-sm font-medium leading-6 text-gray-900" :value="__('Parola')"/>
                        <div class="mt-2">
                            <x-text-input  id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <x-text-input  id="role" name="role" type="hidden" value="{{$invitation->role}}" />

                    <div class="space-y-5">
                        <div class="relative flex items-start">


                        </div>
                    </div>

                    <div>
                        <x-primary-button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continua</x-primary-button>
                    </div>

                </form>

                <div>
                    <div class="relative mt-5">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</x-guest-layout>
