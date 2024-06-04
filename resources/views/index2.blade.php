<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    html{
        scroll-behavior: smooth
    }
</style>

<body>
    <section class="w-full flex justify-center absolute w-full h-20 z-10">
        <nav class="flex justify-center items-center w-11/12 gap-8 relative">
            <div class="absolute">
                <img src="{{ asset('images/media/tooth.svg') }}" alt="tooth">
            </div>
            <div class="text-white text-[24px] font-bold">
                Caries Detection
            </div>
            <div class="flex items-center grow gap-4">
                <a class="text-white text-[16px]" href="#model">Model</a>
                <a class="text-white text-[16px]" href="#about">About</a>
            </div>
            <div>
                <button class="text-white border rounded-full py-2 px-7">Detect</button>
            </div>
        </nav>
    </section>
    <section class="w-full flex justify-center relative overflow-visible min-h-screen">
        <img class="absolute w-full h-full object-cover" src="{{ asset('images/media/bg.svg') }}" alt="bg">
        <div class="w-11/12 flex justify-center relative items-center gap-20">
            <div class="lg:w-1/2 lg:pl-24 w-full">
                <h1 class="text-white text-[32px] font-bold">Welcome <br />to Caries Detection</h1>
                <p class="text-white text-[18px] mt-2">by using <span class="font-bold">Deep Learning</span>, dental
                    caries
                    <br />
                    can be identified the type of caries you have
                </p>
                <button class="text-white text-[14px] border rounded-full py-2 px-7 mt-5">Get Started</button>
            </div>
            <div class="w-1/2 lg:flex hidden justify-center">
                <img src="images/media/dentist.svg" alt="dentist">
            </div>
        </div>
    </section>
    <section class="w-full flex justify-center relative z-10 py-20 mt-32">
        <dyiv class="w-11/12 text-center">
            <h2 class="font-bold text-2xl" id="about">About</h2>
            <p class="text-blue-400 mt-4 lg:w-2/3 w-full mx-auto"><span class="font-bold">Dental Caries</span>. tooth
                decay, also
                known
                as
                dental
                caries, is a dental and oral health condition that can
                allect anyone. The symptoms include increased tooth sensiticity and pain when consuming sweat, cold, or
                hot foods </p>
            <div class="flex lg:flex-row flex-col lg:gap-8 gap-0 mt-10 justify-center">
                <div class="flex justify-between items-center">
                    <img src="{{ asset('images/media/Enamel.svg') }}" alt="Enamel">
                </div>
                <div class="flex justify-between items-center">
                    <img src="{{ asset('images/media/Dentin.svg') }}" alt="Dentin">
                </div>
                <div class="flex justify-between items-center">
                    <img src="{{ asset('images/media/Pulp.svg') }}" alt="Pulp">
                </div>

                {{-- <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/media/dentin.png') }}" alt="bg">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/media/dentin.png') }}" alt="bg">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/media/dentin.png') }}" alt="bg">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a> --}}

            </div>
        </dyiv>
    </section>
    <section id="model" class="w-full flex justify-center relative z-10 py-20">
        <div class="w-11/12 text-center">
            <h2 class="font-bold text-2xl">Model</h2>

        </div>
    </section>

    <section class="w-11/12 flex justify-center py-20 bg-[#ECF8FF] mx-20">
        <div class="w-10/12 flex lg:flex-row flex-col gap-5">
            <div class="lg:w-1/3 w-full">
                <h2 class="font-bold text-2xl">
                    Contact Us
                </h2>

                <div class="flex items-center mt-8 gap-4">
                    <img src="images/media/mail.svg" alt="icon-email" />
                    <div>
                        <h3 class="font-bold">Mail</h3>
                        <p>example@email.com</p>
                    </div>
                </div>
                <div class="flex items-center mt-4 gap-4">
                    <img src="images/media/phone.svg" alt="icon-phone" />
                    <div>
                        <h3 class="font-bold">Phone</h3>
                        <p>089547638123</p>
                    </div>
                </div>

                <h2 class="font-bold text-2xl mt-12">
                    Navigation
                </h2>

                <div class="flex flex-col mt-4 gap-3">
                    <a class="text-blue-400" href="#model">Model</a>
                    <a class="text-blue-400" href="#about">About</a>
                </div>
            </div>

            <div class="lg:w-2/3 w-full">
                <form>
                    <div class="flex w-full gap-4">
                        <div class="w-full">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="w-full border rounded-full py-2 px-4 mt-2">
                        </div>
                        <div class="w-full">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full border rounded-full py-2 px-4 mt-2">
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject"
                            class="w-full border rounded-full py-2 px-4 mt-2">
                    </div>
                    <div class="mt-4">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"
                            class="w-full border rounded-lg py-2 px-4 mt-2"></textarea>
                    </div>
                    <div class="mt-4 w-full flex justify-end">
                        <button class="text-white bg-slate-900 border rounded-full py-2 px-7">Send</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</body>

</html>