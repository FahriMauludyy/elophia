<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-main {
            background-image: url('{{ asset('assets/images/image2.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="register-page w-screen h-screen bg-main flex justify-center items-center">
            <div class="w-[80%] flex justify-center items-center">
                <div class="card w-[40%] bg-white flex flex-col text-center py-10">
                    <h1 class="text-2xl">Elophia</h1>
                    <h1 class="text-4xl my-8">Create<br>Account</h1>

                    <div class="input-area flex justify-center space-y-4 items-center flex-col">
                        <!-- Name -->
                        <div class="w-[70%] text-left">
                            <input id="name" class="w-full h-10 border p-2" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus autocomplete="name">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="w-[70%] text-left">
                            <input id="email" class="w-full h-10 border p-2" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="username">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="w-[70%] text-left">
                            <input id="password" class="w-full h-10 border p-2" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="w-[70%] text-left">
                            <input id="password_confirmation" class="w-full h-10 border p-2" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            @error('password_confirmation')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center items-center mt-5">
                        <button type="submit" class="w-[70%] h-10 bg-black text-white">Register</button>
                    </div>

                    <!-- Already Registered -->
                    <div class="flex flex-col items-center justify-center mt-6 text-sm text-gray-600">
                        <p class="mb-2">
                            Already have an account? You don't need to register again.
                        </p>
                        <a href="{{ route('login') }}" class="underline text-blue-600 hover:text-blue-800 font-medium">
                            Click here to log in to your account
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="alert alert-success fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded">
            {{ session('success') }}
        </div>
        @endif
    </form>

    <script>
        // Auto hide alert setelah 3 detik
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.querySelector('.alert');
            if (alert) {
                setTimeout(() => {
                    alert.remove();
                }, 3000);
            }
        });
    </script>
</body>

</html>
