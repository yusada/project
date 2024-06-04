<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="w-full flex justify-center absolute w-full h-20 z-10 text-blue-500">
        <nav class="flex justify-center items-center w-11/12 gap-8 relative">
            <div class="absolute">
                <img src="{{ asset('images/media/b-tooth.svg') }}" alt="tooth">
            </div>
            <div class="text-[24px] font-bold">
                Caries Detection
            </div>
            <div class="flex justify-end items-center grow gap-4">
                <a class="text-[16px]" id="model">Model</a>
                <a class="text-[16px]">About</a>
            </div>
            <div>
                <button class="border rounded-full py-2 px-7">Detect</button>
            </div>
        </nav>
    </section>
    <section class="w-full flex justify-center relative z-10 pt-36">
        <div class="w-11/12 flex lg:flex-row flex-col">
            <div class="lg:w-1/2 w-full">
                <h1 class="text-[24px] text-blue-500 font-bold text-center">Input Gambar</h1>
                <form class="mt-10 flex justify-center items-center">
                    <input type="file" name="file" id="file">
                    <button class="text-white bg-blue-500 border rounded-full py-2 px-7">Upload</button>
                </form>
            </div>
            <div class="lg:w-1/2 w-full flex flex-col items-center">
                <h1 class="text-[24px] text-blue-500 font-bold text-center">Classification Result</h1>
                <img src="{{ asset('images/media/Enamel.svg') }}" alt="Enamel" class="mt-10">

                <div class="flex gap-2">
                    <p class="text-blue-500">Enamel</p>
                    <p class="text-blue-500">Dentin</p>
                    <p class="text-blue-500">Pulp</p>
                    <p class="text-blue-500">Normal</p>
                </div>
            </div>

        </div>
    </section>

    <section class="w-ful flex justify-center py-20">
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
                    <a class="text-blue-400">Model</a>
                    <a class="text-blue-400">About</a>
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