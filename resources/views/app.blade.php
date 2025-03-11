<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    @vite('resources/css/app.css')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-white" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Company name">
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Marketing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Analytics</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Commerce</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Insights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                </li>
                                <li>
                                    <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">API
                                        Status</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @stack('scripts')
</body>

</html>
