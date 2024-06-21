<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="container w-full h-screen flex justify-center items-center">
        <div class="box flex shadow-black shadow-lg">
            <div class="half w-80 max-h-96 bg-orange-400">
                <div class="image h-full flex items-center">
                    <img src="assets/peopleandbus.png" alt="">
                </div>
            </div>
            <div class="half w-80 pt-10 max-h-96 overflow-y-scroll overflow-x-hidden">
                <h1 class="text-center text-xl font-bold">Register</h1>
                <form action="{{ route('addUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul class="flex flex-col items-center pt-12">
                        <li>
                            <div class="image w-32 h-32 rounded-full border-2 border-black mx-auto"></div>
                            <input type="file" name="image" id="image">
                            @error('image')
                                <div class="error text-center text-red-400">{{ $message }}</div>
                            @enderror
                        </li>  
                        <li class="pt-5">
                            <input type="text" name="name" id="name" placeholder="Name" class="border-b-black border-b-2">
                            @error('name')
                                <div class="error text-center text-red-400">{{ $message }}</div>
                            @enderror
                        </li>
                        <li class="pt-5">
                            <input type="text" name="username" id="username" placeholder="Username" class="border-b-black border-b-2">
                            @error('username')
                                <div class="error text-center text-red-400">{{ $message }}</div>
                            @enderror
                        </li>
                        <li class="pt-5">
                            <input type="password" name="password" id="password" placeholder="Password" class="border-b-black border-b-2">
                            @error('password')
                                <div class="error text-center text-xs text-red-400">{{ $message }}</div>
                            @enderror
                        </li>
                        <li class="pt-5">
                            <input type="email" name="email" id="email" placeholder="Email" class="border-b-black border-b-2 block">
                            @error('email')
                                <div class="error text-center text-red-400">{{ $message }}</div>
                            @enderror
                        </li>
                        <li class="pt-5">
                            <button type="submit" class="px-3 py-1 bg-orange-500 rounded-full text-white">Register</button>
                        </li>
                    </ul>
                </form>
                <p class="text-xs text-center pt-12 pb-8">Allready have an account? <a href="{{ route('login') }}" class="text-sky-500 hover:underline">Log-in!</a></p>
            </div>
        </div>
    </div>
</body>
</html>