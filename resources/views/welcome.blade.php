<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHat</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
        <div class="shrink-0">
            <i class="fas fa-comment-dots fa-3x" style="color: #2d62be;"></i>
        </div>
        <div>
          <div class="text-xl font-medium text-black">ChitChat</div>
          <p class="text-slate-500">You have a new message!</p>
        </div>
    </div>
    <div class="py-8 px-8 mt-10 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
        <img class="block mx-auto w-24 h-24 rounded-full sm:mx-0 sm:shrink-0" src="{{ asset('images/building.jpg') }}" alt="Woman's Face" />
        <div class="text-center space-y-2 sm:text-left">
          <div class="space-y-0.5">
            <p class="text-lg text-black font-semibold">
              Erin Lindford
            </p>
            <p class="text-slate-500 font-medium">
              Product Engineer
            </p>
          </div>
          <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-1 focus:ring-purple-600 focus:ring-offset-2">Message</button>
        </div>
      </div>
</body>
</html>