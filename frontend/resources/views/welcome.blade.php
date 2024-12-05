<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/vendors/flatpickr.min.css') }}" rel="stylesheet" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <script>
            if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
                document.querySelector('html').classList.remove('dark');
                document.querySelector('html').style.colorScheme = 'light';
            } else {
                document.querySelector('html').classList.add('dark');
                document.querySelector('html').style.colorScheme = 'dark';
            }
        </script>
    </head>
    <body
    class="font-inter antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex h-[100dvh] overflow-hidden">



        <!-- Content area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            <header class="sticky top-0 before:absolute before:inset-0 before:backdrop-blur-md before:bg-white/90 dark:before:bg-gray-800/90 lg:before:bg-gray-100/90 dark:lg:before:bg-gray-900/90 before:-z-10 max-lg:shadow-sm z-30">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 lg:border-b border-gray-200 dark:border-gray-700/60">

                        <!-- Header: Left side -->
                        <div class="flex">
                            <img class="w-8 h-8 rounded-full" src="{{ asset('images/datahash_icon_144x144px.png') }}" width="32" height="32" alt="User" />


                        </div>

                        <!-- Header: Right side -->
                        <div class="flex items-center space-x-3">
                            <!-- Info button -->
                            <div class="relative inline-flex" x-data="{ open: false }">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 lg:hover:bg-gray-200 dark:hover:bg-gray-700/50 dark:lg:hover:bg-gray-800 rounded-full"
                                    :class="{ 'bg-gray-200 dark:bg-gray-800': open }"
                                    aria-haspopup="true"
                                    @click.prevent="open = !open"
                                    :aria-expanded="open"
                                >
                                    <span class="sr-only">Info</span>
                                    <svg class="fill-current text-gray-500/80 dark:text-gray-400/80" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 7.5a1 1 0 1 0-2 0v4a1 1 0 1 0 2 0v-4ZM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm6-8A6 6 0 1 1 2 8a6 6 0 0 1 12 0Z" />
                                    </svg>
                                </button>
                                <div
                                    class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1"
                                    @click.outside="open = false"
                                    @keydown.escape.window="open = false"
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 -translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-out duration-200"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    x-cloak
                                >
                                    <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase pt-1.5 pb-2 px-3">Need help?</div>
                                    <ul>
                                        <li>
                                            <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                                                    <rect y="3" width="12" height="9" rx="1" />
                                                    <path d="M2 0h8v2H2z" />
                                                </svg>
                                                <span>Documentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z" />
                                                </svg>
                                                <span>Support Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 fill-current text-violet-500 shrink-0 mr-2" viewBox="0 0 12 12">
                                                    <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z" />
                                                </svg>
                                                <span>Contact us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Dark mode toggle -->
                            <div>
                                <input type="checkbox" name="light-switch" id="light-switch" class="light-switch sr-only" />
                                <label class="flex items-center justify-center cursor-pointer w-8 h-8 hover:bg-gray-100 lg:hover:bg-gray-200 dark:hover:bg-gray-700/50 dark:lg:hover:bg-gray-800 rounded-full" for="light-switch">
                                    <svg class="dark:hidden fill-current text-gray-500/80 dark:text-gray-400/80" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0a1 1 0 0 1 1 1v.5a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1Z"/>
                                        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-4 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                        <path d="M13.657 3.757a1 1 0 0 0-1.414-1.414l-.354.354a1 1 0 0 0 1.414 1.414l.354-.354ZM13.5 8a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2h-.5a1 1 0 0 1-1-1ZM13.303 11.889a1 1 0 0 0-1.414 1.414l.354.354a1 1 0 0 0 1.414-1.414l-.354-.354ZM8 13.5a1 1 0 0 1 1 1v.5a1 1 0 1 1-2 0v-.5a1 1 0 0 1 1-1ZM4.111 13.303a1 1 0 1 0-1.414-1.414l-.354.354a1 1 0 1 0 1.414 1.414l.354-.354ZM0 8a1 1 0 0 1 1-1h.5a1 1 0 0 1 0 2H1a1 1 0 0 1-1-1ZM3.757 2.343a1 1 0 1 0-1.414 1.414l.354.354A1 1 0 1 0 4.11 2.697l-.354-.354Z" />
                                    </svg>
                                    <svg class="hidden dark:block fill-current text-gray-500/80 dark:text-gray-400/80" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.875 4.375a.625.625 0 1 0 1.25 0c.001-.69.56-1.249 1.25-1.25a.625.625 0 1 0 0-1.25 1.252 1.252 0 0 1-1.25-1.25.625.625 0 1 0-1.25 0 1.252 1.252 0 0 1-1.25 1.25.625.625 0 1 0 0 1.25c.69.001 1.249.56 1.25 1.25Z" />
                                        <path d="M7.019 1.985a1.55 1.55 0 0 0-.483-1.36 1.44 1.44 0 0 0-1.53-.277C2.056 1.553 0 4.5 0 7.9 0 12.352 3.648 16 8.1 16c3.407 0 6.246-2.058 7.51-4.963a1.446 1.446 0 0 0-.25-1.55 1.554 1.554 0 0 0-1.372-.502c-4.01.552-7.539-2.987-6.97-7ZM2 7.9C2 5.64 3.193 3.664 4.961 2.6 4.82 7.245 8.72 11.158 13.36 11.04 12.265 12.822 10.341 14 8.1 14 4.752 14 2 11.248 2 7.9Z" />
                                    </svg>
                                    <span class="sr-only">Switch to light / dark version</span>
                                </label>
                            </div>

                            <!-- Divider -->
                            <hr class="w-px h-6 bg-gray-200 dark:bg-gray-700/60 border-none" />

                            <!-- User button -->
                            <div class="relative inline-flex" x-data="{ open: false }">
                                <button
                                    class="inline-flex justify-center items-center group"
                                    aria-haspopup="true"
                                    @click.prevent="open = !open"
                                    :aria-expanded="open"
                                >
                                    <div class="flex items-center truncate">
                                        <span class="truncate ml-2 text-sm font-medium text-gray-600 dark:text-gray-100 group-hover:text-gray-800 dark:group-hover:text-white">Menu</span>
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-600 dark:text-gray-500" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </button>
                                <div
                                    class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1"
                                    @click.outside="open = false"
                                    @keydown.escape.window="open = false"
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 -translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-out duration-200"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    x-cloak
                                >
                                    <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-gray-200 dark:border-gray-700/60">
                                        <div class="font-medium text-gray-800 dark:text-gray-100">Datahash Pty Ltd</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 italic">Data provider</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a class="font-medium text-sm text-blue-500 hover:text-blue-600 dark:hover:text-blue-400 flex items-center py-1 px-3" href="#S" @click="open = false" @focus="open = true" @focusout="open = false">About us</a>
                                        </li>
                                        <li>
                                            <a class="font-medium text-sm text-blue-500 hover:text-blue-600 dark:hover:text-blue-400 flex items-center py-1 px-3" href="#" @click="open = false" @focus="open = true" @focusout="open = false">Privacy policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </header>
            <main class="grow">

                <div class="px-6 sm:px-6 lg:px-8 pt-9 pb-2 w-full max-w-9xl mx-auto">
                    <div class="max-w-3xl m-auto">
                         <!-- Left: Title -->
                         <div class="sm:mb-0">
                            <h2 class="font-normal text-blue-800 dark:text-blue-100 underline mb-1 mt-4"><a href="https://www.fleurieumilkco.com.au/" target="_blank">Fleurieu Milk Company</a></h2>
                            <h1 class=" pb-8 text-4xl md:text-3xl text-blue-900 dark:text-gray-100 font-bold">Jersey Premium Homogenised Milk</h1>
                            <div class="flex flex-col col-span-full xl:col-span-4  bg-white dark:bg-gray-800 shadow-sm rounded-2xl">
                                <div class="h-full flex flex-col px-1 py-1">
                                    <div class="grow flex flex-col justify-center">
                                        <div class="grow flex flex-col ">
                                            <div class="flex flex-wrap justify-between items-center">
                                                <!-- Price -->
                                                <div>
                                                    <div class="inline-flex text-lg font-bold bg-white text-blue-900 dark:text-gray-700 rounded-lg text-center px-3 py-2">$5.50</div>
                                                </div>
                                                <!-- Rating -->
                                                <div class="flex items-center space-x-2 mr-2">
                                                    <div class="inline-flex text-sm font-normal text-gray-600 dark:text-gray-100 ">Available in 2L</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <img class="w-full rounded-xl my-4" src="./images/jersey_milk.jpg" width="301" height="226" alt="Application 21" /> -->
                        </div>

                        <!-- Basic Accordion -->
                        <div>
                            <!-- Start -->
                            <div class="mb-0 px-4 py-4 rounded-2xl  bg-white dark:bg-gray-800 shadow-sm" x-data="{ open: false }">
                                <button
                                    class="flex items-center justify-between w-full group mb-1"
                                    @click.prevent="open = !open"
                                    :aria-expanded="open"
                                >
                                    <div class="text-xs uppercase text-gray-800 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">Product details</div>
                                    <svg class="w-8 h-8 shrink-0 fill-current text-gray-400 dark:text-gray-500 group-hover:text-gray-500 dark:group-hover:text-gray-400 ml-3" :class="{ 'rotate-180': open }" viewBox="0 0 32 32">
                                        <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z" />
                                    </svg>
                                </button>
                                <div class="text-md py-4 text-blue-900 dark:text-blue-100" x-show="open" x-cloak>
                                    Our Jersey Premium Homogenised Milk is pasteurised and homogenised consisting of that old fashioned creamy flavour and texture. Our Jersey Premium range of milk is believed to be more suitable for people who have a tendency to be lactose intolerant. Our Jersey stock produce real, unadulterated milk products containing no permeates.
                                </div>
                            </div>
                            <!-- End -->
                        </div>


                    </div>
                </div>


                <div class="px-6 sm:px-6 lg:px-8 py-2 w-full max-w-9xl mx-auto mb-20">
                    <div class="max-w-3xl m-auto">
                        <!-- Card (Income/Expenses) -->
                        <div class="col-span-full xl:col-span-6 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">

                            <div class="p-4">

                                <!-- Card content -->
                                <!-- "Today" group -->
                                <div>
                                    <header class="text-xs uppercase text-gray-800 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 dark:bg-opacity-50 rounded-sm font-semibold p-2">Product history</header>

                                    <article class="pt-6">
                                        <div class="xl:flex">

                                            <div class="grow pb-6">

                                                <!-- List -->
                                                <ul class="-my-2">
                                                    <!-- List item -->
                                                    <li class="relative py-2">
                                                        <div class="flex items-center mb-1">
                                                            <div class="absolute left-0 h-full w-0.5 bg-blue-500 dark:bg-gray-700 self-start ml-2.5 -translate-x-1/2 translate-y-3" aria-hidden="true"></div>
                                                            <div class="absolute left-0 rounded-full bg-blue-500" aria-hidden="true">
                                                                <svg class="fill-current text-white" width="20" height="20" viewBox="0 0 20 20">
                                                                    <path d="M14.4 8.4L13 7l-4 4-2-2-1.4 1.4L9 13.8z" />
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-lg font-bold text-blue-800 dark:text-gray-100 pl-9">Milked at </h3>
                                                        </div>
                                                            <!-- What’s New -->
                                                            <div class="pl-9 mb-4">
                                                                <!-- Start -->
                                                                <div x-data="{ modalOpen: false }">
                                                                    <button class="btn btn-sm bg-blue-100 text-blue-800 font-semibold text-lmd hover:bg-blue-200 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white" @click.prevent="modalOpen = true" aria-controls="news-modal">Roslyn Vale Farm</button>
                                                                    <!-- Modal backdrop -->
                                                                    <div class="fixed inset-0 bg-blue-900 bg-opacity-30 z-50 transition-opacity" x-show="modalOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" style="display: none;"></div>
                                                                    <!-- Modal dialog -->
                                                                    <div id="news-modal" class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="transition ease-in-out duration-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                                                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                                                            <div class="relative">
                                                                                <img class="w-full" src="{{ asset('images/Bazz-and-Merridie.jpg') }}" width="460" height="200" alt="New on Mosaic">
                                                                                <!-- Close button -->
                                                                                <button class="absolute top-0 right-0 mt-5 mr-5 text-gray-900 hover:text-gray-700" @click="modalOpen = false">
                                                                                    <div class="sr-only">Close</div>
                                                                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 16 16">
                                                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <div class="p-8">
                                                                                <!-- Modal header -->
                                                                                <div class="mb-2">
                                                                                    <div class="mb-5">
                                                                                        <div class="btn-xs text-md border-gray-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600 text-blue-800 dark:text-gray-300 pr-2.5 py-1 rounded-full shadow-none">BARRY &amp; MERRIDIE</div>
                                                                                    </div>
                                                                                    <div class="mb-4 text-xl font-semibold text-blue-800 dark:text-gray-100">Roslyn Vale Farm 🐄</div>
                                                                                </div>
                                                                                <!-- Modal content -->
                                                                                <div class="text-md mb-5">
                                                                                    <div class="space-y-2">
                                                                                        <p>Barry &amp; Merridie Clarke are co-directors of Fleurieu Milk and owners of Roslyn Vale dairy farm. Rosyln Vale is a family owned farm, first purchased by Merridie’s grandparents back in 1926.
                                                                                        </p>
                                                                                        <p>Baz has always been a full-time dairy farmer, who first started milking cows back in 1976 with his brother who now resides in Lucindale as a beef and sheep farmer. Baz and Merridie purchased Rosyln Vale in 1993 from Merridie’s parents.</p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal footer -->
                                                                                <div class="flex flex-wrap justify-end space-x-2">
                                                                                    <button class="btn-sm bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white" @click="modalOpen = false">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End -->
                                                            </div>

                                                        <div class="pl-9 pb-12">
                                                            <ul>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Date:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">07/09/2024</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Time:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">12:28pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center font-bold text-blue-900 dark:text-blue-100">Verified by Datahash</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <!-- Start -->
                                                                                <a href="https://ledger-testnet.hashlog.io/tx/0.0.2947706@1727178132.497531783" target="_blank">
                                                                                    <button class="btn btn-sm bg-blue-200 dark:bg-blue-800 border-blue-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">
                                                                                        <span class="text-blue-900 dark:text-cyan-100">View</span>
                                                                                    </button>
                                                                                </a>
                                                                                <!-- End -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- List item -->
                                                    <li class="relative py-2">
                                                        <div class="flex items-center mb-1">
                                                            <div class="absolute left-0 h-full w-0.5 bg-blue-500 dark:bg-gray-700 self-start ml-2.5 -translate-x-1/2 translate-y-3" aria-hidden="true"></div>
                                                            <div class="absolute left-0 rounded-full bg-blue-500" aria-hidden="true">
                                                                <svg class="fill-current text-white" width="20" height="20" viewBox="0 0 20 20">
                                                                    <path d="M14.4 8.4L13 7l-4 4-2-2-1.4 1.4L9 13.8z" />
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-lg font-bold text-blue-800 dark:text-gray-100 pl-9">Collected by</h3>
                                                            <!-- What’s New --></div>
                                                            <div class="pl-9 mb-4">
                                                                <!-- Start -->
                                                                <a href="https://www.fleurieumilkco.com.au/" target="_blank">
                                                                    <button
                                                                        class="btn btn-sm bg-blue-100 text-blue-800 font-semibold text-md hover:bg-blue-200 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                                                    >Fleurieu Milk Company <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 icon icon-tabler icon-tabler-external-link" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="#1e40af" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                                                        <path d="M11 13l9 -9" />
                                                                        <path d="M15 4h5v5" />
                                                                      </svg></button>
                                                                </a>
                                                            </div>
                                                                <!-- End -->


                                                        <div class="pl-9 pb-12">
                                                            <ul>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-blue-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Date:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">07/09/2024</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Collection time:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">09:45am</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2"></li>
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Driver: (TBC)</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">John Smith</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2"></li>
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Volume</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">758 litres</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Temperature at pick up:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">4ºC</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Tested for antibiotics:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100"><div class="text-sm font-medium text-green-900 dark:text-green-100 px-1.5 bg-green-500/20 rounded-full">Passed</div>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center font-bold text-blue-900 dark:text-blue-100">Verified by Datahash</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <!-- Start -->
                                                                                <a href="https://ledger-testnet.hashlog.io/tx/0.0.2947706@1727178132.497531783" target="_blank">
                                                                                    <button class="btn btn-sm bg-blue-200 dark:bg-blue-800 border-blue-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">
                                                                                        <span class="text-blue-900 dark:text-cyan-100">View</span>
                                                                                    </button>
                                                                                </a>
                                                                                <!-- End -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <!-- List item -->
                                                    <li class="relative py-2">
                                                        <div class="flex items-center mb-1">
                                                            <div class="absolute left-0 h-full w-0.5 bg-blue-500 dark:bg-gray-700 self-start ml-2.5 -translate-x-1/2 translate-y-3" aria-hidden="true"></div>
                                                            <div class="absolute left-0 rounded-full bg-blue-500" aria-hidden="true">
                                                                <svg class="fill-current text-white" width="20" height="20" viewBox="0 0 20 20">
                                                                    <path d="M14.4 8.4L13 7l-4 4-2-2-1.4 1.4L9 13.8z" />
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-lg font-bold text-blue-800 dark:text-gray-100 pl-9">Pesteurised by</h3>
                                                            <!-- What’s New --></div>
                                                            <div class="pl-9 mb-4">
                                                                <!-- Start -->
                                                                <a href="https://www.fleurieumilkco.com.au/" target="_blank">
                                                                    <button
                                                                        class="btn btn-sm bg-blue-100 text-blue-800 font-semibold text-md hover:bg-blue-200 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                                                    >Fleurieu Milk Company <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 icon icon-tabler icon-tabler-external-link" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="#1e40af" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                                                        <path d="M11 13l9 -9" />
                                                                        <path d="M15 4h5v5" />
                                                                      </svg></button>
                                                                </a>
                                                            </div>
                                                                <!-- End -->

                                                        <div class="pl-9 pb-12">
                                                            <ul>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Date:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">07/09/2024</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Time at start:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">12:13pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Pasteurised temperature:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">73ºC</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Storage temperature:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">3.5ºC</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center font-bold text-blue-900 dark:text-blue-100">Verified by Datahash</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <!-- Start -->
                                                                                <a href="https://ledger-testnet.hashlog.io/tx/0.0.2947706@1727178132.497531783" target="_blank">
                                                                                    <button class="btn btn-sm bg-blue-200 dark:bg-blue-800 border-blue-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">
                                                                                        <span class="text-blue-900 dark:text-cyan-100">View</span>
                                                                                    </button>
                                                                                </a>
                                                                                <!-- End -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>


                                                    </li>
                                                    <!-- List item -->
                                                    <li class="relative py-2">
                                                        <div class="flex items-center mb-1">
                                                            <div class="absolute left-0 h-full w-0.5 bg-blue-500 dark:bg-gray-700 self-start ml-2.5 -translate-x-1/2 translate-y-3" aria-hidden="true"></div>
                                                            <div class="absolute left-0 rounded-full bg-blue-500" aria-hidden="true">
                                                                <svg class="fill-current text-white" width="20" height="20" viewBox="0 0 20 20">
                                                                    <path d="M14.4 8.4L13 7l-4 4-2-2-1.4 1.4L9 13.8z" />
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-lg font-bold text-blue-800 dark:text-gray-100 pl-9">Tested by</h3>
                                                            <!-- What’s New --></div>
                                                            <div class="pl-9 mb-4">
                                                                <!-- Start -->
                                                                <a href="https://www.fleurieumilkco.com.au/" target="_blank">
                                                                    <button
                                                                        class="btn btn-sm bg-blue-100 text-blue-800 font-semibold text-md hover:bg-blue-200 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white"
                                                                    >Fleurieu Milk Company <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 icon icon-tabler icon-tabler-external-link" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="#1e40af" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                                                        <path d="M11 13l9 -9" />
                                                                        <path d="M15 4h5v5" />
                                                                      </svg></button>
                                                                </a>
                                                            </div>
                                                                    <!-- End -->
                                                        <div class="pl-9">
                                                            <ul>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Date:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">07/09/2024</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Time:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-gray-600 dark:text-gray-100">12:55pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center">Test outcome:</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                                <span class="font-medium text-blue-600 dark:text-gray-100"><div class="text-sm font-medium text-green-900 dark:text-green-100 px-1.5 bg-green-500/20 rounded-full">Passed</div>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="flex pr-2">
                                                                    <div class="grow flex items-center border-b border-gray-100 dark:border-gray-700/60 text-sm py-1">
                                                                        <div class="grow flex justify-between">
                                                                            <div class="self-center font-bold text-blue-900 dark:text-blue-100">Verified by Datahash</div>
                                                                            <div class="shrink-0 self-start ml-2">
                                                                               <!-- Start -->
                                                                               <a href="https://ledger-testnet.hashlog.io/tx/0.0.2947706@1727178132.497531783" target="_blank">
                                                                                <button class="btn btn-sm bg-blue-200 dark:bg-blue-800 border-blue-200 dark:border-gray-700/60 hover:border-gray-300 dark:hover:border-gray-600">
                                                                                    <span class="text-blue-900 dark:text-cyan-100">View</span>
                                                                                </button>
                                                                                </a>
                                                                                <!-- End -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/vendors/alpinejs.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/vendors/chart.js') }}"></script>
    <script src="{{ asset('js/vendors/moment.js') }}"></script>
    <script src="{{ asset('js/vendors/chartjs-adapter-moment.js') }}"></script>
    <script src="{{ asset('js/vendors/flatpickr.js') }}"></script>
    <script src="{{ asset('js/dashboard-charts.js') }}"></script>
    <script src="{{ asset('js/flatpickr-init.js') }}"></script>

</body>
</html>
