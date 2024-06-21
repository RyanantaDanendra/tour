<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
{{-- <script>
    alert("Hi {{ Auth::user()->name }}, Welcome to your profile page")
</script> --}}
<body class=" w-full h-screen flex justify-center items-center">
    <a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" class="text-xl" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com --><path d="M32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l208 0 0-64L32 96zM192 288c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0zm-64-64c0 17.7 14.3 32 32 32l48 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-48 0c-17.7 0-32 14.3-32 32zm96 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0zm88-96l-.6 0c5.4 9.4 8.6 20.3 8.6 32c0 13.2-4 25.4-10.8 35.6c24.9 8.7 42.8 32.5 42.8 60.4c0 11.7-3.1 22.6-8.6 32l8.6 0c88.4 0 160-71.6 160-160l0-61.7c0-42.4-16.9-83.1-46.9-113.1l-11.6-11.6C429.5 77.5 396.9 64 363 64l-27 0c-35.3 0-64 28.7-64 64l0 88c0 22.1 17.9 40 40 40s40-17.9 40-40l0-56c0-8.8 7.2-16 16-16s16 7.2 16 16l0 56c0 39.8-32.2 72-72 72z"/></svg></a>
        <div class="box w-1/4 h-3/4 flex flex-col justify-center items-center px-5">
                <div class="image w-32 h-32 bg-contain bg-center bg-no-repeat rounded-full" style="background-image: url('/storage/{{ Auth::user()->image }}')"></div>
                <h1>Username : {{ Auth::user()->username }}</h1>
                <h2>Email : {{Auth::user()->email}}</h2>
                <h3 class="text-center">Account was created at : {{ Auth::user()->created_at}}</h3>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure to Logout?')" class="text-sky-500 hover:underline pt-10">Logout</button>
                </form>
        </div>
        <div class="box w-1/4 h-3/4 bg-orange-500 flex justify-center items-center">
            <div class="inner w-48 h-40 bg-white shadow-md shadow-black rounded-md flex justify-center flex-col items-center">
                <h1 class="text-center">Total trip</h1>
                <p>{{ $user }}</p>
            </div>
        </div>
</body>
</html>