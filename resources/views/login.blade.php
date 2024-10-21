<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fast and Yummy!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    @vite('resources/css/app.css')
</head>
<body>


    <div class="grid grid-cols-2 bg-slate-100 w-full h-screen">

        <div class="flex text-center justify-center pt-[10%]">
            <div class="font-sans">
            <h1 class="text-5xl text-blue-700 font-bold pt-[20%] pb-2"> Fast and Yummy! </h1>
            <p class="text-2xl text-black font-semibold px-12"> Connect with hotels and the world around you on Fast and Yummy. </p>
            </div>
        </div>

      <div class="mx-[20%] mt-[20%] w-full max-w-sm ">

        <form class="rounded-lg shadow-lg shrink-0 px-2 pt-1 pb-5 bg-inherit bg-white" action="" method="">
            {{-- <h1 class=" text-center text-bold text-2xl pb-2"> Login form </h1> --}}
            <div class="mx-2 mb-2 mt-10">
                <label for = "name" class="block text-sm text-gray-700 font-bold mb-2"> Username </label>
                <input type="text" name="text" class="shadow appearance-none border rounded focus:ring-1 focus:ring-sky-500 w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-inner" placeholder="Username">
            </div>
            <div class="mx-2 mb-2">
                <label for = "password" class="block text-sm text-gray-700 font-bold mb-2 "> Password </label>
                <input type="password" name="text" class="shadow appearance-none border focus:ring-1 focus:ring-sky-500  rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-inner" placeholder="**************************">
            </div>

              <div class="flex items-center justify-between mt-3">
                <button type="button" class="shadow mx-2 text-center w-full bg-blue-500 py-2 font-mono font-bold text-white "> Log In </button>

              </div>
              <a href="" class="flex text-blue-700 font-medium mb-2 mt-3 justify-center text-center hover:underline "> Forgot Account? </a>
              <hr>
              <div class="flex items-center justify-between mt-3">
                <button type="button" class="shadow mx-2 text-center w-full bg-green-600 py-2 font-mono font-bold text-white "> Create new account </button>

              </div>
            </form>
                <p class="text-center text-gray-600 text-xs pt-3">
                    &copy;2023 <em> Sophiya. </em> All rights reserved.
                  </p>
      </div>

    </div>

    </body>
</html>
