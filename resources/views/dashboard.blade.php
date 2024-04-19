<x-app-layout>
    <!--
      This example requires updating your template:

      ```
      <html class="h-full bg-gray-50">
      <body class="h-full">
      ```
    -->
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu backdrop, show/hide based on off-canvas menu state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-gray-900/80"></div>

            <div class="fixed inset-0 flex">
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <!--
                      Close button, show/hide based on off-canvas menu state.

                      Entering: "ease-in-out duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "ease-in-out duration-300"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-sm sm:px-6 lg:hidden">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <div class="flex-1 text-sm font-semibold leading-6 text-gray-900">Dashboard</div>
            <a href="#">
                <span class="sr-only">Your profile</span>
                <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </a>
        </div>

        <main class="py-10 lg:pl-72">
            <div class="px-4 sm:px-6 lg:px-8">
                <div>
                    <div>
                        <div>
                            <h1 class="text-gray-900 text-3xl">Bună ziua, Dr. {{Auth::user()->name}}</h1>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-500">Datele generale despre progresul clinicii</h3>
                        </div>
                    </div>

                    <dl class="mt-5 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                        <div class=" relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">

                            <div class="flex">
                                <svg width="56" height="56" viewBox="0 0  56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF"/>
                                    <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8"/>
                                    <path d="M38 23L30.1314 30.8686C29.7354 31.2646 29.5373 31.4627 29.309 31.5368C29.1082 31.6021 28.8918 31.6021 28.691 31.5368C28.4627 31.4627 28.2646 31.2646 27.8686 30.8686L25.1314 28.1314C24.7354 27.7354 24.5373 27.5373 24.309 27.4632C24.1082 27.3979 23.8918 27.3979 23.691 27.4632C23.4627 27.5373 23.2646 27.7354 22.8686 28.1314L18 33M38 23H31M38 23V30" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="#" class="ml-auto text-gray-700 ">
                                    <svg class= width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.99996 10.8333C10.4602 10.8333 10.8333 10.4602 10.8333 9.99998C10.8333 9.53974 10.4602 9.16665 9.99996 9.16665C9.53972 9.16665 9.16663 9.53974 9.16663 9.99998C9.16663 10.4602 9.53972 10.8333 9.99996 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 4.99998C10.4602 4.99998 10.8333 4.62688 10.8333 4.16665C10.8333 3.70641 10.4602 3.33331 9.99996 3.33331C9.53972 3.33331 9.16663 3.70641 9.16663 4.16665C9.16663 4.62688 9.53972 4.99998 9.99996 4.99998Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 16.6666C10.4602 16.6666 10.8333 16.2935 10.8333 15.8333C10.8333 15.3731 10.4602 15 9.99996 15C9.53972 15 9.16663 15.3731 9.16663 15.8333C9.16663 16.2935 9.53972 16.6666 9.99996 16.6666Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>


                            <div class="mt-4 mb-5">
                                <div>
                                    <p class="mt text-sm font-medium text-gray-500">Pacienți</p>
                                </div>

                                <div class="flex">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900">{{$patientWidget}}</p>
                                    </div>

                                    <div class="inline-flex items-baseline rounded-full ml-auto px-2.5 py-1.5 text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                                        <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only text-green-700"> Increased by </span>
                                        100%
                                    </div>
                                </div>

                            </div>

                            <div class="border-t-2 border-gray-200 absolute inset-x-0 bottom-0 px-4 py-4 sm:px-6 text-sm">
                                <a href="#" class="flex justify-end font-semibold text-indigo-600 hover:text-indigo-500">Vezi programările</a>
                            </div>
                        </div>

                        <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <div class="flex">
                                <svg width="56" height="56" viewBox="0 0  56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF"/>
                                    <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8"/>
                                    <path d="M38 23L30.1314 30.8686C29.7354 31.2646 29.5373 31.4627 29.309 31.5368C29.1082 31.6021 28.8918 31.6021 28.691 31.5368C28.4627 31.4627 28.2646 31.2646 27.8686 30.8686L25.1314 28.1314C24.7354 27.7354 24.5373 27.5373 24.309 27.4632C24.1082 27.3979 23.8918 27.3979 23.691 27.4632C23.4627 27.5373 23.2646 27.7354 22.8686 28.1314L18 33M38 23H31M38 23V30" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="#" class="ml-auto text-gray-700 ">
                                    <svg class= width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.99996 10.8333C10.4602 10.8333 10.8333 10.4602 10.8333 9.99998C10.8333 9.53974 10.4602 9.16665 9.99996 9.16665C9.53972 9.16665 9.16663 9.53974 9.16663 9.99998C9.16663 10.4602 9.53972 10.8333 9.99996 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 4.99998C10.4602 4.99998 10.8333 4.62688 10.8333 4.16665C10.8333 3.70641 10.4602 3.33331 9.99996 3.33331C9.53972 3.33331 9.16663 3.70641 9.16663 4.16665C9.16663 4.62688 9.53972 4.99998 9.99996 4.99998Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 16.6666C10.4602 16.6666 10.8333 16.2935 10.8333 15.8333C10.8333 15.3731 10.4602 15 9.99996 15C9.53972 15 9.16663 15.3731 9.16663 15.8333C9.16663 16.2935 9.53972 16.6666 9.99996 16.6666Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-4 mb-5">
                                <div>
                                    <p class="mt text-sm font-medium text-gray-500">Programări acceptate</p>
                                </div>

                                <div class="flex">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900">{{$acceptedAppointments}}</p>
                                    </div>

                                    <div class="inline-flex items-baseline rounded-full ml-auto px-2.5 py-1.5 text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                                        <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only text-green-700"> Increased by </span>
                                        12%
                                    </div>
                                </div>

                            </div>


                            <div class="border-t-2 border-gray-200 absolute inset-x-0 bottom-0 px-4 py-4 sm:px-6 text-sm">
                                <a href="#" class="flex justify-end font-semibold text-indigo-600 hover:text-indigo-500">Vezi pacienții</a>
                            </div>
                        </div>


                        <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <div class="flex">
                                <svg width="56" height="56" viewBox="0 0  56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1FADF"/>
                                    <rect x="4" y="4" width="48" height="48" rx="24" stroke="#ECFDF3" stroke-width="8"/>
                                    <path d="M38 23L30.1314 30.8686C29.7354 31.2646 29.5373 31.4627 29.309 31.5368C29.1082 31.6021 28.8918 31.6021 28.691 31.5368C28.4627 31.4627 28.2646 31.2646 27.8686 30.8686L25.1314 28.1314C24.7354 27.7354 24.5373 27.5373 24.309 27.4632C24.1082 27.3979 23.8918 27.3979 23.691 27.4632C23.4627 27.5373 23.2646 27.7354 22.8686 28.1314L18 33M38 23H31M38 23V30" stroke="#039855" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="#" class="ml-auto text-gray-700 ">
                                    <svg class= width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.99996 10.8333C10.4602 10.8333 10.8333 10.4602 10.8333 9.99998C10.8333 9.53974 10.4602 9.16665 9.99996 9.16665C9.53972 9.16665 9.16663 9.53974 9.16663 9.99998C9.16663 10.4602 9.53972 10.8333 9.99996 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 4.99998C10.4602 4.99998 10.8333 4.62688 10.8333 4.16665C10.8333 3.70641 10.4602 3.33331 9.99996 3.33331C9.53972 3.33331 9.16663 3.70641 9.16663 4.16665C9.16663 4.62688 9.53972 4.99998 9.99996 4.99998Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 16.6666C10.4602 16.6666 10.8333 16.2935 10.8333 15.8333C10.8333 15.3731 10.4602 15 9.99996 15C9.53972 15 9.16663 15.3731 9.16663 15.8333C9.16663 16.2935 9.53972 16.6666 9.99996 16.6666Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-4 mb-5">
                                <div>
                                    <p class="mt text-sm font-medium text-gray-500">Programări in așteptare</p>
                                </div>

                                <div class="flex">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900">{{$upcomingAppointments}}</p>
                                    </div>

                                    <div class="inline-flex items-baseline rounded-full ml-auto px-2.5 py-1.5 text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
                                        <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only text-green-700"> Increased by </span>
                                        13%
                                    </div>
                                </div>

                            </div>

                            <div class="border-t-2 border-gray-200 absolute inset-x-0 bottom-0 px-4 py-4 sm:px-6 text-sm">
                                <a href="#" class="flex justify-end font-semibold text-indigo-600 hover:text-indigo-500">Vezi programările</a>
                            </div>
                        </div>
                    </dl>
                </div>

                <div class="mt-5 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6 mt-10 col-span-2">
                        <div>
                            <label class="text-lg font-medium text-gray-900">Statistici programări</label>

                            <div class="grid grid-cols-10 mt-5 mb-5 " >
                                <form action="{{ route('index')}}" method="GET">
                                    @csrf
                                    <input type="hidden" name="filter[interval]" value="MONTH">
                                    <button type="submit" name="filter[value]" value = 12 class="flex justify-center text-sm text-grey-500 hover:text-indigo-500 hover:bg-gray-200 rounded-md">12 luni</button>
                                </form>

                                <form  action="{{ route('index')}}" method="GET">
                                    @csrf
                                        <input type="hidden" name="filter[interval]" value="WEEK">
                                        <button type="submit" name="filter[value]" value= 3 class="flex justify-center text-sm text-grey-500 hover:text-indigo-500 hover:bg-gray-200 rounded-md">3 luni</button>
                                </form>
                            </div>
                        </div>

                        <div style="width: 720px; margin: auto; " >
                            <canvas id="appointmentsChart"></canvas>
                        </div>
                    </div>

                    <div class=" relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6 mt-10 col-start-3 ">

                        <div>
                            <div class="flex">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="48" height="48" rx="24" fill="#D1E0FF"/>
                                    <rect x="4" y="4" width="48" height="48" rx="24" stroke="#EFF4FF" stroke-width="8"/>
                                    <path d="M37 26H19M32 18V22M24 18V22M23.8 38H32.2C33.8802 38 34.7202 38 35.362 37.673C35.9265 37.3854 36.3854 36.9265 36.673 36.362C37 35.7202 37 34.8802 37 33.2V24.8C37 23.1198 37 22.2798 36.673 21.638C36.3854 21.0735 35.9265 20.6146 35.362 20.327C34.7202 20 33.8802 20 32.2 20H23.8C22.1198 20 21.2798 20 20.638 20.327C20.0735 20.6146 19.6146 21.0735 19.327 21.638C19 22.2798 19 23.1198 19 24.8V33.2C19 34.8802 19 35.7202 19.327 36.362C19.6146 36.9265 20.0735 37.3854 20.638 37.673C21.2798 38 22.1198 38 23.8 38Z" stroke="#155EEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <a href="#" class="ml-auto text-gray-700 ">
                                    <svg class= width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.99996 10.8333C10.4602 10.8333 10.8333 10.4602 10.8333 9.99998C10.8333 9.53974 10.4602 9.16665 9.99996 9.16665C9.53972 9.16665 9.16663 9.53974 9.16663 9.99998C9.16663 10.4602 9.53972 10.8333 9.99996 10.8333Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 4.99998C10.4602 4.99998 10.8333 4.62688 10.8333 4.16665C10.8333 3.70641 10.4602 3.33331 9.99996 3.33331C9.53972 3.33331 9.16663 3.70641 9.16663 4.16665C9.16663 4.62688 9.53972 4.99998 9.99996 4.99998Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.99996 16.6666C10.4602 16.6666 10.8333 16.2935 10.8333 15.8333C10.8333 15.3731 10.4602 15 9.99996 15C9.53972 15 9.16663 15.3731 9.16663 15.8333C9.16663 16.2935 9.53972 16.6666 9.99996 16.6666Z" stroke="#98A2B3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <p class="mt-6 truncate text-sm font-medium text-gray-500">Următoarea programare:</p>
                                <p class="text-2xl font-semibold text-gray-900">{{ ucfirst(trans($nextAppointment['nextAppointmentDayName']))}},{{ucfirst(trans($nextAppointment['nextAppointment']))}}</p>
                            </div>

                            <div class="mt-8 grid gap-4">
                                <div class="flex">
                                    <svg width="20" height="20" viewBox="0 0 20 20" class="mr-2 shrink-0 text-white group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path d="M10.0001 4.99996V9.99996L13.3334 11.6666M18.3334 9.99996C18.3334 14.6023 14.6025 18.3333 10.0001 18.3333C5.39771 18.3333 1.66675 14.6023 1.66675 9.99996C1.66675 5.39759 5.39771 1.66663 10.0001 1.66663C14.6025 1.66663 18.3334 5.39759 18.3334 9.99996Z" stroke="#155EEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p class=" truncate text-sm font-medium text-gray-500">Între: {{$nextAppointment['nextAppointmentHourBegin']}} - {{$nextAppointment['nextAppointmentHourEnd']}}</p>
                                </div>

                                <div class="flex">
                                    <svg width="20" height="20" class="mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75 2C2.55109 2 2.36032 2.07902 2.21967 2.21967C2.07902 2.36032 2 2.55109 2 2.75V7.75C2 9.98 3.622 11.83 5.75 12.188V13.25C5.75 13.9394 5.8858 14.6221 6.14963 15.2591C6.41347 15.896 6.80018 16.4748 7.28769 16.9623C7.7752 17.4498 8.35395 17.8365 8.99091 18.1004C9.62787 18.3642 10.3106 18.5 11 18.5C11.6894 18.5 12.3721 18.3642 13.0091 18.1004C13.646 17.8365 14.2248 17.4498 14.7123 16.9623C15.1998 16.4748 15.5865 15.896 15.8504 15.2591C16.1142 14.6221 16.25 13.9394 16.25 13.25V12.146C16.8889 11.965 17.4407 11.559 17.8037 11.0029C18.1666 10.4469 18.3162 9.77831 18.2248 9.12061C18.1334 8.4629 17.8072 7.86045 17.3064 7.42442C16.8056 6.98838 16.164 6.74821 15.5 6.74821C14.836 6.74821 14.1944 6.98838 13.6936 7.42442C13.1928 7.86045 12.8666 8.4629 12.7752 9.12061C12.6838 9.77831 12.8334 10.4469 13.1963 11.0029C13.5593 11.559 14.1111 11.965 14.75 12.146V13.25C14.75 13.7425 14.653 14.2301 14.4645 14.6851C14.2761 15.14 13.9999 15.5534 13.6517 15.9016C13.3034 16.2499 12.89 16.5261 12.4351 16.7145C11.9801 16.903 11.4925 17 11 17C10.5075 17 10.0199 16.903 9.56494 16.7145C9.10997 16.5261 8.69657 16.2499 8.34835 15.9016C8.00013 15.5534 7.72391 15.14 7.53545 14.6851C7.347 14.2301 7.25 13.7425 7.25 13.25V12.188C8.29864 12.0105 9.25057 11.4675 9.937 10.6551C10.6234 9.84275 11 8.81355 11 7.75V2.75C11 2.55109 10.921 2.36032 10.7803 2.21967C10.6397 2.07902 10.4489 2 10.25 2H8.75C8.55109 2 8.36032 2.07902 8.21967 2.21967C8.07902 2.36032 8 2.55109 8 2.75C8 2.94891 8.07902 3.13968 8.21967 3.28033C8.36032 3.42098 8.55109 3.5 8.75 3.5H9.5V7.75C9.5 8.54565 9.18393 9.30871 8.62132 9.87132C8.05871 10.4339 7.29565 10.75 6.5 10.75C5.70435 10.75 4.94129 10.4339 4.37868 9.87132C3.81607 9.30871 3.5 8.54565 3.5 7.75V3.5H4.25C4.44891 3.5 4.63968 3.42098 4.78033 3.28033C4.92098 3.13968 5 2.94891 5 2.75C5 2.55109 4.92098 2.36032 4.78033 2.21967C4.63968 2.07902 4.44891 2 4.25 2H2.75ZM15.5 8.25C15.6642 8.25 15.8267 8.28233 15.9784 8.34515C16.13 8.40797 16.2678 8.50004 16.3839 8.61612C16.5 8.73219 16.592 8.86999 16.6549 9.02164C16.7177 9.1733 16.75 9.33585 16.75 9.5C16.75 9.66415 16.7177 9.8267 16.6549 9.97835C16.592 10.13 16.5 10.2678 16.3839 10.3839C16.2678 10.5 16.13 10.592 15.9784 10.6548C15.8267 10.7177 15.6642 10.75 15.5 10.75C15.1685 10.75 14.8505 10.6183 14.6161 10.3839C14.3817 10.1495 14.25 9.83152 14.25 9.5C14.25 9.16848 14.3817 8.85054 14.6161 8.61612C14.8505 8.3817 15.1685 8.25 15.5 8.25Z" fill="#155EEF"/>
                                    </svg>
                                    <p class=" truncate text-sm font-medium text-gray-500">{{$nextAppointment['nextAppointmentServiceType']}}</p>
                                </div>

                                <div class="flex">
                                    <svg width="20" height="20" class="mr-2" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6666 16.5C14.6666 15.337 14.6666 14.7555 14.5231 14.2824C14.1999 13.217 13.3662 12.3834 12.3009 12.0602C11.8277 11.9167 11.2462 11.9167 10.0832 11.9167H5.91659C4.75362 11.9167 4.17213 11.9167 3.69897 12.0602C2.63363 12.3834 1.79995 13.217 1.47678 14.2824C1.33325 14.7555 1.33325 15.337 1.33325 16.5M11.7499 5.25C11.7499 7.32107 10.071 9 7.99992 9C5.92885 9 4.24992 7.32107 4.24992 5.25C4.24992 3.17893 5.92885 1.5 7.99992 1.5C10.071 1.5 11.7499 3.17893 11.7499 5.25Z" stroke="#155EEF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p class=" truncate text-sm font-medium text-gray-500">{{$nextAppointment['patientNameOfAppointment']}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t-2 border-gray-200 absolute inset-x-0 bottom-0 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="#" class=" flex justify-end font-semibold text-indigo-600 hover:text-indigo-500">Vezi mai mult</a>
                            </div>
                        </div>
                    </div>

                </div>

                <script src="{{ mix('/js/app.js') }}"></script>

                <script>
                    {{--let label = @json($chartData['labels']);--}}
                    let currentData = @json($chartData['currentData']);
                    let previousData = @json($chartData['previousData'] );
                </script>


            </div>
        </main>
    </div>

    </main>
    </div>

</x-app-layout>
