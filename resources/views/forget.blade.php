<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email id</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen bg-fuchsia-300 bg-gradient-to-r from-violet-300 to-red-200">
        <div class="grid grid-cols-2 w-full  bg-gradient-to-r from-violet-500 to-red-400 h-[9vh] sticky top-0 z-20 shadow-lg shrink-0">
            <div class="flex px-2 py-2 text-3xl"> Fast and Yummy! </div>
            <div class="grid grid-cols-3 pt-4">
                <div class="flex justify-center">
                    <input type="text" placeholder="Username" class="rounded-md w-auto h-8 px-2">
                </div>
                <div> <input type="password" placeholder="Password" class="rounded-md w-auto h-8 px-2">
                </div>
                <div> <input type="button" value="Log In" class="appearance-none rounded-lg w-20 text-white text-bold bg-green-700 h-9 focus:ring-1 focus:ring-white active:bg-blue-400">
                 <a href="" class="px-4 text-blue-700 font-medium justify-center text-center hover:underline ">Forgot account? </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center w-auto h-auto mt-[10%]">
            <form class="rounded-lg shadow-lg shrink-0 px-2 pt-1  pb-5 bg-gray-250 bg-inherit" action="" method="">
                <h1 class="text-2xl font-extrabold mt-5 pb-2 text-center"> Reset Password </h1>
                <hr>
                <p class="pt-5">
                    Please enter your email  to send password reset link to your account.
                </p>
                <input type="email" name="email" class="shadow appearance-none border rounded focus:ring-1 focus:ring-sky-500 w-full py-2 px-3 mt-5  text-gray-700 focus:outline-none focus:shadow-inner" placeholder="Email">

                <div class="flex  justify-end"> <input type="button" value="Cancel" class="appearance-none rounded-lg w-20 mt-5 flex justify-center  text-white font-bold bg-green-700 h-9 focus:ring-1 focus:ring-white active:bg-green-500">
                    <input type="button" value="Send Password Reset link" class="appearance-none rounded-lg w-[28vh] mt-5 mx-5 text-white text-bold bg-blue-700 font-bold h-9 focus:ring-1 focus:ring-white active:bg-blue-400">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
