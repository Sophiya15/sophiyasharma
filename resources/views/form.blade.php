<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-2 bg-slate-100 w-full h-screen">
            <div class="flex text-center justify-center pt-[10%]">
                <div class="font-sans">
                 <i class="fas fa-om fa-3x pt-[20%] text-red-700"></i>
                <h1 class="text-5xl text-teal-700 hover:text-red-400 font-bold pt-3  pb-2"> Join Us </h1>
                <h1 class="text-3xl text-black font-bold  pb-2"><i class="fas fa-ice-cream fa-lg text-emerald-300"></i> Fast and Yummy! </h1>
                <p class="text-2xl text-transparent bg-clip-text bg-gradient-to-r from-red-800 to-violet-800 font-semibold px-[2%] "> Connect with hotels and the world around you on Fast and Yummy. </p>
            </div>
            </div>
            <div class="mx-[20%] rounded-lg pt-3 w-full h-screen max-w-md bg-gray-200">

                <form class="rounded-lg shadow-lg shrink-0 px-2 pt-1 pb-5 bg-inherit " action="{{route('form.store')}}"   enctype="multipart/form-data" method="POST">

                    @csrf

                    <h1 class=" block text-center text-extrabold font-serif text-2xl pt-1 pb-2"> Create a new account </h1>
                    <div class="mb-2">
                    <x-input type="text" name="name" label="Username" />
                    <x-input type="email" name="email" label="Email"/>
                    <x-input type="text" name="address" label=" Address"/>
                    <x-input type="number" name="phone" label="Phone no"/>
                    <div class="mx-2 mb-2">
                        <label for = "gender" class="block text-sm text-gray-700 font-bold mb-2  "> Gender </label>
                        <input type="radio" id="female" name="gender" value="Female" checked>
                        <label for="female" class="my-2">Female</label>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male">Male</label><br>
                    </div>
                    <x-input type="password" name="password" label="Password"/>
                    <x-input type="password" name="password_confirmation" label="Confirm Password"/>
                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <button type="submit" class="shadow w-60 active:bottom-1 rounded-lg bg-green-800 py-2 font-mono font-bold text-white mx-[20%]">Sign Up </button>

                    </div>

                    <a href="" class="flex text-blue-700 font-medium  mt-3 justify-center text-center hover:underline ">Already Have An Account? </a>
                    <hr>
                    </form>

            </div>
    </div>
</body>
</html>
