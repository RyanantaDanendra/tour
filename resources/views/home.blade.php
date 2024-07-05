@extends('layouts.header')

@section('title', 'Home')
    
@section('content')
@if (session()->has('success'))
<script>
    alert("{{ session()->get('success') }}");
</script>
@endif
    <div class="container w-full h-screen bg-cover bg-fixed" style="background-image: url('assets/bali-bg2.jpg')">
        <div class="flex justify-center items-center flex-col h-screen">
            <div class="box w-2/3 h-3/4 text-center py-32 text-white z-50" style="">
                <h1 class="font-bold text-8xl">Tour</h1>
                <h2 class="text-2xl">Experience Bali Greatest Wonder</h2>
                <div class="button pt-5">
                    <button class="px-5 py-2 mx-5 text-black bg-white shadow-md shadow-black rounded-xl">Our Packages</button>
                    <button class="px-5 py-2 mx-5 text-black bg-white shadow-md shadow-black rounded-xl">Contact Us</button>
                </div>
            </div>
        </div>
        <div class="absolute w-full h-full bg-black top-0 bottom-0 opacity-40"></div>
    </div>

    <div id="latest" class="w-full min-h-screen py-10">
        <h1 class="text-center text-3xl font-bold">Our Latest Packages</h1>
        <div class="packages flex flex-wrap justify-center py-6 gap-10">
            @if ($packages->count() > 0)                
                @foreach ($packages as $package)
                    <div class="package w-80 h-96 bg-white shadow-md shadow-black border-b-8 border-b-sky-500 overflow-hidden">
                        <div class="image w-full h-40 bg-cover bg-center bg-no-repeat hover:scale-105 duration-300 ease-out overflow-hidden" style="background-image: url(/storage/{{ $package->images[0]->image }})"></div>
                        <div class="text px-5 py-3">
                            <h1 class="text-xl font-semibold">{{ $package['name'] }}</h1>
                            <h3 class="pt-5">{{ $package['destination'] }}</h3>
                            <h3>{{ $package['duration'] }}</h3>
                            <a href="{{ route('detail', $package->slug) }}" class="text-sky-400 hover:underline flex items-center gap-5 mt-10 justify-end">View Details <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
                        </div>
                    </div>
                @endforeach
            @else
                    <p class="mt-12">No Package Yet!</p>
            @endif
        </div>
    </div>

    <div class="why w-full min-h-screen pb-20">
        <h1 class="text-center text-3xl font-bold">Why Choose Us?</h1>
        <div class="flex py-10">
            <div class="boxes w-2/4 flex flex-col items-center gap-8">
                <div class="box w-96 h-56 bg-white shadow-md shadow-black border-b-8 border-b-orange-500">
                    <div class="flex items-center gap-2 px-24 py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-2xl" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                        <p class="text-2xl">100% Trusted</p>
                    </div>
                    <p class="text-justify px-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dicta excepturi voluptates labore in sunt quaerat maxime, eaque porro quia.</p>
                </div>
                <div class="box w-96 h-56 bg-white shadow-md shadow-black border-b-8 border-b-orange-500">
                    <div class="flex px-24 py-5 gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-2xl" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M493.7 .9L299.4 75.6l2.3-29.3c1-12.8-12.8-21.5-24-15.1L101.3 133.4C38.6 169.7 0 236.6 0 309C0 421.1 90.9 512 203 512c72.4 0 139.4-38.6 175.7-101.3L480.8 234.3c6.5-11.1-2.2-25-15.1-24l-29.3 2.3L511.1 18.3c.6-1.5 .9-3.2 .9-4.8C512 6 506 0 498.5 0c-1.7 0-3.3 .3-4.8 .9zM192 192a128 128 0 1 1 0 256 128 128 0 1 1 0-256zm0 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm16 96a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"/></svg>
                        <p class="text-2xl">Fast Proccess</p>
                    </div>
                    <p class="text-justify tet-2xl px-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur incidunt necessitatibus odio distinctio molestiae minus sunt magnam consequuntur eius autem!</p>
                </div>
            </div>
            <div class="image">
                <img src="assets/why.png" alt="" class="w-96 h-96">
            </div>
        </div>
    </div>
@endsection

@section('footer')