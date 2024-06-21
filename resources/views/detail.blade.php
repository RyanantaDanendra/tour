@extends('layouts.header')

@section('title', 'detail')
    
@section('content')
    <div class="container w-full min-h-screen py-28 ">
        <div class="w-full flex gap-2 overflow-hidden justify-center h-80 sm:flex-row flex-col">
            @php
            $i = 0;
            @endphp
            @foreach ($package->images as $image)   
            @if ($i == 0)                
            <div class="overflow-hidden w-2/4 h-80">
                <div class="w-full h-full relative">
                    @if (Auth::check())
                        @if (Auth::user()->as == 'admin')
                            <form action="{{ route('deleteImage', $image->id) }}" method="POST" class="absolute top-2 left-2 z-10">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="text-2xl fill-white" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </form>
                        @endif
                    @endif
                    <div class="image w-full h-80 hover:scale-110 duration-300 ease-out bg-cover" style="background-image: url(/storage/{{ $image->image }})"></div>
                </div>
            </div>
            @endif
            @if ($i == 1)
                <div class="w-1/4 overflow-hidden flex flex-col gap-3">
                    <div class="w-full h-full relative">
                        @if (auth()->check()) 
                            @if (Auth::user()->as =='admin')
                            <form action="{{ route('deleteImage', $image->id) }}" method="POST" class="absolute top-2 left-2 z-10">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="text-2xl fill-white" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </form> 
                            @endif
                        @endif
                        <div class="image w-80 h-full bg-cover bg-no-repeat bg-center hover:scale-110 duration-300 ease-out relative z-0" style="background-image: url(/storage/{{ $image['image'] }})"></div>
                    </div>
            @endif
                    @if ($i == 2)
                        <div class="w-full h-full relative">
                            @if (Auth::check())
                                @if (Auth::user()->as == 'admin')
                                    <form action="{{ route('deleteImage', $image->id) }}" method="POST" class="absolute top-2 left-2 z-10">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="text-2xl fill-white" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                                    </form>
                                @endif
                            @endif
                            <div class="image w-80 h-40 bg-cover bg-no-repeat bg-center hover:scale-110 duration-300 ease-out" style="background-image: url(/storage/{{ $image['image'] }})"></div>
                        </div>
                    @endif
            @if ($i == 2)
                </div>
            @endif
            @if ($i > 2)
                <div class="w-2/4 h-80 overflow-hidden">
                    <div class="w-full h-full relative">
                    @if (Auth::check())
                        @if (Auth::user()->as == 'admin')
                            <form action="(( route('deleteImage', $image->id) ))" method="POST" class="absolute top-2 left-2 z-10">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="text-2xl fill-white" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </form>
                        @endif
                    @endif
                    <div class="bg-cover w-full h-full hover:scale-110 duration-300 ease-out" style="background-image: url(/storage/{{ $image['image'] }}); width:500px;"></div>
                    </div>
                </div>
            @endif
            @php
                $i++
            @endphp
            @endforeach
        </div>
        <div class="text px-20">
            <h1 class="text-4xl font-bold pb-5">{{ $package['name'] }}</h1>
            <h3 class="text-xl">{{ $package['destination'] }}</h3>
            <h3 class="text-xl">{{ $package['duration'] }}</h3>
            <h3 class="ttext-xl">{{ $package['description'] }}</h3>
            <h3 class="pb-20 text-xl">RP. {{ $package['price'] }}</h3>
            @if (Auth::user())
            @if (Auth::user()->as == 'admin')
                
            @else
                <a href="{{ route('booking', $package->slug) }}" class="text-sky-500 pt-20 hover:underline">Book Now!</a>
            @endif
            @else
                <a href="{{ route('login') }}" class="text-sky-500 hover:underline">Login to book package!</a>
            @endif
        </div>
    </div>
@endsection