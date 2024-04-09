<x-guest-layout>



    <div class="flex min-h-full flex-col justify-center py-2 sm:px-6 lg:px-8">

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Invita membrii echipei</h2>
            <h3 class="mt-2 text-center text-l font-bold leading-9 tracking-tight text-gray-500">Introduceti adresa de email a membrilor mai jos pentru a continua</h3>
        </div>


        <form class="space-y-6" action="{{ route('invite.store') }}" method="POST">
            @csrf

            <div class="mt-6 grid grid-cols-2 gap-2">
                <div>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <x-input-label for="invite[invite1][email]" class="block text-sm font-medium leading-6 text-gray-900"/>
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                        </div>
                        <x-text-input type="email" name="invite[invite1][email]" id="email" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com"/>
                        <x-input-error :messages="$errors->get('invite')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <select id="role" name="invite[invite1][role]" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Asistent</option>
                        <option>Doctor</option>
                        <option>Receptionist</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-2">
                <div>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                        </div>
                        <x-text-input type="email" name="invite[invite2][email]" id="emails" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com"/>
                        <x-input-error :messages="$errors->get('invite')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <select id="role" name="invite[invite2][role]" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Doctor</option>
                        <option>Asistent</option>
                        <option>Receptionist</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-2">
                <div>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                            </svg>
                        </div>
                        <x-text-input type="email" name="invite[invite3][email]" id="emails" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com"/>
                        <x-input-error :messages="$errors->get('invite')" class="mt-2" />
                    </div>

                </div>

                <div>
                    <select id="role" name="invite[invite3][role]" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Receptionist</option>
                        <option>Doctor</option>
                        <option>Asistent</option>
                    </select>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-2">
                <div>
                    <button type="submit" name="action" value="doNothing" href="{{ route('clinic-program') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Sari peste</button>
                </div>

                <div>
                    <button type="submit" name="action" value="save" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                        </svg>
                        Trimite invitatii
                    </button>
                </div>
            </div>

        </form>

    </div>

</x-guest-layout>
