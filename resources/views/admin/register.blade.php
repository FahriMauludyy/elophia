<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
          
        @endif
    <style>
        .bg-main {
            background-image: url('assets/images/image2.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="login-page w-screen h-screen bg-main flex justify-center items-center">
        <div class="w-[80%] flex justify-center items-center">
            <div class="card w-[35%] h-[550px] bg-white flex flex-col text-center justify-start py-10">
                <h1 class="text-2xl">Elophia</h1>
                <h1 class="text-4xl my-8">Create<br>Account</h1>

                <div class="input-area flex justify-center space-y-3 items-center flex-col">
                    <input class=" w-[70%] h-10  border p-2" type="text" placeholder="Email Address">
                    <input class="w-[70%] h-10  border p-2 " type="text" placeholder="Password">
                    <input class="w-[70%] h-10  border p-2 " type="text" placeholder="Confirm Password">
                </div>
                <div class="flex justify-center items-center mt-5">
                    <button class="w-[70%] h-10 bg-black text-white">Register</button>
                </div>
                <div class="flex justify-center items-center mt-5">
                    <p class=" text-xs w-[70%]">By creating an account you agree to Elophia<span class="text-blue-500 font-bold"> Terms & Conditions</span> and<span class="text-blue-500 font-bold"> Privacy Policy</p>
                </div>
               
            </div>
        </div>
    </div>
</body>
</html>