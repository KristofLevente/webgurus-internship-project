<x-guest-layout>


    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Programul de lucru al clinicii</h2>
        <h3 class="mt-2 text-center text-l font-bold leading-9 tracking-tight text-gray-500">selecteaza disponibilitatea pentru programari</h3>
    </div>

    <form action="{{ route('clinic-program.store') }}" method="POST">
        @csrf

        <div class="mt-6 grid grid-cols-2 gap-2" >
            <div>
                <label for="opening_hour" class="block text-sm font-medium leading-6 text-gray-900">Ore disponibile</label>
                <select id="opening_hour" name="opening_hour" type="date" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>09:00</option>
                    <option>10:00</option>
                    <option>11:00</option>
                    <option>12:00</option>
                    <option>13:00</option><option>10:00</option>
                    <option>14:00</option>
                    <option>15:00</option>
                </select>
                <x-input-error :messages="$errors->get('opening_hour')" class="mt-2" />
            </div>


            <div>
                <label for="closing_hour" class="block text-sm font-medium leading-6 text-gray-900">Ore disponibile</label>
                <select id="closing_hour" name="closing_hour" type="date" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>10:00</option>
                    <option>11:00</option>
                    <option>12:00</option>
                    <option>13:00</option>
                    <option>14:00</option>
                    <option>15:00</option>
                    <option>16:00</option>
                </select>
                <x-input-error :messages="$errors->get('closing_hour')" class="mt-2" />
            </div>
        </div>

        <fieldset>
            <legend class="mt-4 text-base font-semibold leading-6 text-gray-900">Zile disponibile:</legend>
            <div class="mt-2 " >
                <div class="mt-4 flex divide-y">

                    <ul class="flex flex-col sm:flex-row">

                        <li class=" items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[monday]" type="checkbox" value="1" {{ is_array(old('days')) && in_array('1', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class=" pt-2 select-none font-medium text-gray-900"> Luni </label>
                        </li>

                        <li class="items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[tuesday]" type="checkbox" value="2" {{ is_array(old('days')) && in_array('2', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class="select-none font-medium text-gray-900"> Marti </label>
                        </li>

                        <li class=" items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[wednesday]" type="checkbox" value="3" {{ is_array(old('days')) && in_array('3', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class="select-none font-medium text-gray-900"> Miercuri </label>
                        </li>

                        <li class=" items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[thursday]" type="checkbox" value="4" {{ is_array(old('days')) && in_array('4', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class="select-none font-medium text-gray-900"> Joi </label>
                        </li>

                        <li class=" items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[friday]" type="checkbox" value="5" {{ is_array(old('days')) && in_array('5', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class="select-none font-medium text-gray-900"> Vineri </label>
                        </li>

                        <li class="items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                            <div class="flex items-center h-5">
                                <input id="hs-horizontal-list-group-item-checkbox-1" name="days[saturday]" type="checkbox" value="6" {{ is_array(old('days')) && in_array('6', old('days')) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <label for="hs-horizontal-list-group-item-checkbox-1" class="select-none font-medium text-gray-900"> Sambata </label>
                        </li>

                    </ul>
                </div>
                <x-input-error :messages="$errors->get('days')" class="mt-2" />
            </div>
        </fieldset>

        <div class="mt-6 grid grid-cols-2 gap-2">
{{--            <div>--}}
{{--                <button type="submit" href="{{ route('dashboard') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Sari peste</button>--}}
{{--            </div>--}}

            <div>
                <button type="submit" class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> continua </button>
            </div>
        </div>

    </form>

</x-guest-layout>