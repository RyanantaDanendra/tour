<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <script>
                alert('{{ $error }}');
            </script>
            @endforeach
        </div>
    @endif
    @if (session()->has('success'))
        <script>
            alert( '{{ session()->get('success') }}' );
        </script>
    @endif
    <div class="container w-full h-screen flex justify-center items-center">
        <div class="box flex shadow-black shadow-lg">
            <div class="half w-80 h-96 bg-orange-400">
                <div class="image h-full flex items-center">
                    <img src="assets/peopleandbus.png" alt="">
                </div>
            </div>
            <div class="half w-80 pt-10">
                <h1 class="text-center text-xl font-bold">Login</h1>
                <form action="{{ route('authenticateUser') }}" method="POST">
                    @csrf
                    
                    <ul class="flex flex-col items-center pt-12">
                        <li>
                            <input type="text" name="username" id="username" placeholder="Username" class="border-b-black border-b-2">
                        </li>
                        <li class="pt-5">
                            <input type="password" name="password" id="password" placeholder="Password" class="border-b-black border-b-2">
                        </li>
                        <li class="pt-5">
                            <button type="submit">Login</button>
                        </li>
                    </ul>
                </form>
                <p class="text-xs text-center pt-24">Dont have any account? <a href="{{ route('register') }}" class="text-sky-500 hover:underline">Register Now!</a></p>
            </div>
        </div>
    </div>
</body>
</html>