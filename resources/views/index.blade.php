<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section class="w-full flex justify-center absolute w-full h-20 z-10">
    <nav class="flex justify-center items-center w-11/12 gap-4 relative">
        <div class="absolute">
            <img src="{{ asset('images/media/tooth.svg') }}" alt="tooth">
        </div>
        <div class="text-white text-[24px]">
            Caries Detection
        </div>
        <div class="flex items-center grow gap-4">
            <a class="text-white text-[18px]">Model</a>
            <a class="text-white text-[18px]">About</a>
        </div>
        <div>
            <button class="text-white border rounded-full p-2">Detect</button>
        </div>
    </nav>
  </section>
  <section class="w-full flex justify-center relative min-h-screen">
    <img class="absolute w-full" src="{{ asset('images/media/bg.svg') }}" alt="bg">
    <div class="w-11/12 flex justify-between relative items-center">
    <div>
        <h1 class="text-white text-[32px]">Welcome 
            to Caries Detection</h1>
        <p class="text-white text-[18px]">by using Deep Learning, dental caries  can be identified the type of caries you have</p>
        <button class="text-white text-[14px] border rounded-full p-2">Get Started</button>
    </div>
    <div>
        <img src="{{ asset('images/media/dentist.svg') }}" alt="dentist">
    </div>
   </div>
  </section>
  <section class="w-full flex justify-center">
    <div class="w-11/12">
        <h2>About</h2>
        <p>Dental Caries. tooth decay, also known as dental caries, is a dental and oral health condition that can allect anyone. The symptoms include increased tooth sensiticity and pain when consuming sweat, cold, or hot foods </p>
        <div class="flex gap-8">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/media/Enamel.svg') }}" alt="Enamel">
            </div>
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/media/Dentin.svg') }}" alt="Dentin">
            </div>
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/media/Pulp.svg') }}" alt="Pulp">
            </div>
        </div>
    </div>
  </section>
  <section>
    
  </section>
</body>
</html>