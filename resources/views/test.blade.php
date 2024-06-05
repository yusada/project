<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST PAGE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body>
    <section class="bg-[#40E6F9]"> {{-- bg-gradient-to-b from-blue-500 to-[#40E6F9] --}}
        <nav class="border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-8">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/media/tooth.svg') }}" class="h-8" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Caries
                        Detection</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-900 dark:text-gray-400 dark:hover:bg-gray-700"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#top"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                        </li>
                        <li>
                            <a href="#model"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Model</a>
                        </li>
                        <li>
                            <a href="#detection"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Detection</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="w-5/6 flex justify-between items-center mx-auto">
            <div>
                <div class="text-white text-5xl font-bold mb-8">Welcome <br />to Caries Detection</div>
                <p class="text-white text-xl mb-4">by using <span class="font-bold">Deep Learning</span>, dental
                    caries
                    <br />
                    can be identified the type of caries you have
                </p>
                <button type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Get Started
                </button>
            </div>
            <img src="{{ asset('images/media/dentist2.svg') }}" class="shadow-sm" alt="Dentist">
        </div>
    </section>

    {{-- Wave Code --}}
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 420" version="1.1"
        xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(65, 253, 253, 1)" offset="0%"></stop>
                <stop stop-color="rgba(47, 53, 214, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
            d="M0,168L48,161C96,154,192,140,288,175C384,210,480,294,576,294C672,294,768,210,864,147C960,84,1056,42,1152,77C1248,112,1344,224,1440,287C1536,350,1632,364,1728,329C1824,294,1920,210,2016,189C2112,168,2208,210,2304,252C2400,294,2496,336,2592,308C2688,280,2784,182,2880,161C2976,140,3072,196,3168,189C3264,182,3360,112,3456,105C3552,98,3648,154,3744,161C3840,168,3936,126,4032,112C4128,98,4224,112,4320,105C4416,98,4512,70,4608,112C4704,154,4800,266,4896,294C4992,322,5088,266,5184,203C5280,140,5376,70,5472,35C5568,0,5664,0,5760,14C5856,28,5952,56,6048,77C6144,98,6240,112,6336,119C6432,126,6528,126,6624,147C6720,168,6816,210,6864,231L6912,252L6912,420L6864,420C6816,420,6720,420,6624,420C6528,420,6432,420,6336,420C6240,420,6144,420,6048,420C5952,420,5856,420,5760,420C5664,420,5568,420,5472,420C5376,420,5280,420,5184,420C5088,420,4992,420,4896,420C4800,420,4704,420,4608,420C4512,420,4416,420,4320,420C4224,420,4128,420,4032,420C3936,420,3840,420,3744,420C3648,420,3552,420,3456,420C3360,420,3264,420,3168,420C3072,420,2976,420,2880,420C2784,420,2688,420,2592,420C2496,420,2400,420,2304,420C2208,420,2112,420,2016,420C1920,420,1824,420,1728,420C1632,420,1536,420,1440,420C1344,420,1248,420,1152,420C1056,420,960,420,864,420C768,420,672,420,576,420C480,420,384,420,288,420C192,420,96,420,48,420L0,420Z">
        </path>
        <defs>
            <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(65, 253, 253, 1)" offset="0%"></stop>
                <stop stop-color="rgba(47, 53, 214, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
            d="M0,126L48,126C96,126,192,126,288,168C384,210,480,294,576,315C672,336,768,294,864,245C960,196,1056,140,1152,119C1248,98,1344,112,1440,161C1536,210,1632,294,1728,315C1824,336,1920,294,2016,259C2112,224,2208,196,2304,154C2400,112,2496,56,2592,35C2688,14,2784,28,2880,70C2976,112,3072,182,3168,182C3264,182,3360,112,3456,98C3552,84,3648,126,3744,154C3840,182,3936,196,4032,210C4128,224,4224,238,4320,252C4416,266,4512,280,4608,259C4704,238,4800,182,4896,154C4992,126,5088,126,5184,154C5280,182,5376,238,5472,238C5568,238,5664,182,5760,154C5856,126,5952,126,6048,133C6144,140,6240,154,6336,196C6432,238,6528,308,6624,301C6720,294,6816,210,6864,168L6912,126L6912,420L6864,420C6816,420,6720,420,6624,420C6528,420,6432,420,6336,420C6240,420,6144,420,6048,420C5952,420,5856,420,5760,420C5664,420,5568,420,5472,420C5376,420,5280,420,5184,420C5088,420,4992,420,4896,420C4800,420,4704,420,4608,420C4512,420,4416,420,4320,420C4224,420,4128,420,4032,420C3936,420,3840,420,3744,420C3648,420,3552,420,3456,420C3360,420,3264,420,3168,420C3072,420,2976,420,2880,420C2784,420,2688,420,2592,420C2496,420,2400,420,2304,420C2208,420,2112,420,2016,420C1920,420,1824,420,1728,420C1632,420,1536,420,1440,420C1344,420,1248,420,1152,420C1056,420,960,420,864,420C768,420,672,420,576,420C480,420,384,420,288,420C192,420,96,420,48,420L0,420Z">
        </path>
    </svg>
    {{-- End Wave Code --}}

    <section class="mb-6">
        <div class="w-5/6 mx-auto">
            <div class="text-gray-900 text-2xl font-semibold text-center mb-4" id="model">Model</div>
            <p class="text-blue-700 text-center mb-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                veniam dolorem minus. Non totam, veritatis excepturi quos earum aut minima, error soluta veniam
                perspiciatis enim! Dolor culpa molestias ex atque?
            </p>
            <div class="text-center p-4 outline outline-black">
                Model here..
            </div>
        </div>
    </section>

    <section class="mb-6">
        <div class="w-5/6 mx-auto">
            <div class="text-gray-900 text-2xl font-semibold text-center mb-4" id="detection">Detection</div>
            <p class="text-blue-700 text-center mb-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                veniam dolorem minus. Non totam, veritatis excepturi quos earum aut minima, error soluta veniam
                perspiciatis enim! Dolor culpa molestias ex atque?
            </p>
            <div class="flex flex-row justify-center items-start">
                <div class="bg-blue-300 p-20 rounded-lg">
                    Picture
                </div>
                <div class="ms-12">
                    <div class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                        Upload Image Here!
                    </div>
                    <form class="max-w-lg mx-auto">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="file_upload">Upload file</label>
                        <input
                            class="block w-full text-sm text-blue-900 border border-blue-300 rounded-lg cursor-pointer bg-blue-50 dark:text-blue-400 focus:outline-none dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400"
                            aria-describedby="img_upload" id="file_upload" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="img_upload">
                            Upload gambar
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-6">
        <div class="w-5/6 mx-auto">
            <div class="text-gray-900 text-2xl font-semibold text-center mb-4" id="about">About</div>
            <p class="text-blue-700 text-center mb-8"><span class="font-bold">Dental Caries</span>.
                tooth decay, also known as dental caries, is a dental and oral health condition that can allect
                anyone. The symptoms include increased tooth sensiticity and pain when consuming sweat, cold, or hot
                foods
            </p>
            <div class="flex flex-row justify-between p-6">
                <div
                    class="w-auto bg-white flex flex-row items-center gap-12 px-6 py-2.5 rounded-lg shadow-lg outline outline-slate-50">
                    <img class="w-14 h-14 rounded-full shadow-lg" src="{{ asset('images/media/sample.jpg') }}"
                        alt="">
                    <div class="text-blue-700 text-sm font-semibold text-center me-14">
                        Enamel Decay
                    </div>
                </div>
                <div
                    class="w-auto bg-white flex flex-row items-center gap-12 px-6 py-2.5 rounded-lg shadow-lg outline outline-slate-50">
                    <img class="w-14 h-14 rounded-full shadow-lg" src="{{ asset('images/media/sample.jpg') }}"
                        alt="">
                    <div class="text-blue-700 text-sm font-semibold text-center me-14">
                        Dentin Decay
                    </div>
                </div>
                <div
                    class="w-auto bg-white flex flex-row items-center gap-12 px-6 py-2.5 rounded-lg shadow-lg outline outline-slate-50">
                    <img class="w-14 h-14 rounded-full shadow-lg" src="{{ asset('images/media/sample.jpg') }}"
                        alt="">
                    <div class="text-blue-700 text-sm font-semibold text-center me-14">
                        Pulp Decay
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-blue-500 rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#top" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/media/tooth.svg') }}" class="h-8" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Caries
                        Detection</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-900 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#top" class="hover:underline me-4 md:me-6">Home</a>
                    </li>
                    <li>
                        <a href="#model" class="hover:underline me-4 md:me-6">Model</a>
                    </li>
                    <li>
                        <a href="#detection" class="hover:underline me-4 md:me-6">Detection</a>
                    </li>
                    <li>
                        <a href="#about" class="hover:underline">About</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-900 sm:text-center dark:text-gray-400">© 2023 <a href="#top"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
