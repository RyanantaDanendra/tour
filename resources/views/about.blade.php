@extends('layouts.header')

@section('title', 'about')
    
@section('content')
    <div class="container w-full h-screen -z-50 m-0">
        <div class="bg w-full h-full bg-center bg-cover bg-fixed bg-no-repeat top-0" style="background-image: url('assets/bali-bg2.jpg')">
            <div class="absolute w-full h-screen bg-black top-0 bottom-0 opacity-40"></div>
            <div class="text h-screen flex flex-col justify-center items-center">
                <h1 class="text-white text-4xl z-50 font-bold">ABOUT</h1>
                <h2 class="text-white text-l z-50">Discover the story behind our mission, values, and team on our About Page.</h2>
            </div>
        </div>
    </div>
    <div class="story w-full h-full">
        <h1 class="text-center text-2xl font-bold mt-10">About Us</h1>
        <div class="column flex justify-center items-center mt-8 gap-8">
            <div class="photos w-1/4 h-96">
                <img src="assets/adventure.jpg" alt="adventure">
            </div>
            <div class="text w-1/4 h-96">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero doloremque vel et deleniti voluptatem quod sequi quis non eius. Ex voluptatum fugit sapiente nulla. Doloremque optio aperiam illo suscipit fugit.</p>
            </div>
        </div>
    </div>
    <div class="mission w-full h-full">
        <h1 class="text-center text-2xl font-bold">Vission and Mission</h1>
        <div class="boxes h-screen w-full flex justify-center items-center gap-8 flex-wrap">
            <div class="box w-1/4 h-96 shadow-md shadow-black bg-amber-200 rounded-lg">
                <h2 class="text-center font-bold text-lg pt-3">Vission</h2>
                <p class="text-justify p-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consectetur, eius quaerat debitis labore amet nisi in odio, iusto qui deserunt inventore incidunt minus? Error explicabo voluptates sequi modi illum unde iure culpa sapiente? Eius ipsam obcaecati debitis tenetur perferendis.</p>
            </div>
            <div class="box w-1/4 h-96 shadow-md shadow-black bg-amber-200 text-justif rounded-lg">
                <h2 class="text-center font-bold text-lg pt-3">Mission</h2>
                <p class="p-8">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, enim? <br>
                2. Lorem ipsum dolor sit amet. <br>
                3. Lorem ipsum dolor, sit amet consectetur adipisicing.
                </p>
            </div>
        </div>
    </div>
    <div class="team w-full h-full py-10">
        <h1 class="text-center font-bold text-2xl">Our Team</h1>
        <div class="members flex justify-center gap-8 py-8">
            <div class="member w-80 h-80 bg-amber-200 shadow-inner shadow-black" style="border-radius: 0 25% 0 25%"></div>
            <div class="member w-80 h-80 bg-amber-200 shadow-inner shadow-black" style="border-radius: 0 25% 0 25%"></div>
            <div class="member w-80 h-80 bg-amber-200 shadow-inner shadow-black" style="border-radius: 0 25% 0 25%"></div>
        </div>
    </div>
    <div class="gallery w-full h-full py-5">
        <h1 class="text-center font-bold text-2xl pb-3">Gallery</h1>
        <div class="photos w-full h-full flex flex-wrap justify-center">
            @foreach ($galleries as $gallery)
                <div class="cover overflow-hidden">
                    <div class="image w-64 h-64 bg-cover bg-center m-1 hover:scale-110 overflow-hidden duration-300 ease-out" style="background-image: url('/storage/{{ $gallery['image'] }}')"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection