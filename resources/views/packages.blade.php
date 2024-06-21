@extends('layouts.header')

@section('title', 'Packages')

@section('content')
    <div class="container min-h-screen py-24 px-12">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="search" id="search" value="{{ request('search') }}" placeholder="Search for a package" class="border-black border-2 py-1 pe-10">
            <button><svg xmlns="http://www.w3.org/2000/svg" class="text-4xl" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
        </form>
        <div class="cards flex justify-center pt-12 gap-10">
            @if ($packages->count() > 0)
                @foreach ($packages as $package)
                    <div class="card w-80 h-96 shadow-md shadow-black border-b-8 border-b-sky-500">
                        <div class="image w-full h-40 bg-cover bg-no-repeat" style="background-image: url(/storage/{{ $package->images[0]->image}} )"></div>
                        <div class="text px-5 py-3">
                            <h1>{{ $package['name'] }}</h1>
                            <h2 class="pt-5">{{ $package['destination'] }}</h2>
                            <h2>{{ $package['duration'] }}</h2>
                            <a href="{{ route('detail', $package->slug) }}" class="text-sky-400 hover:underline flex items-center gap-5 mt-10 justify-end">View Details <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Result found!</p>
            @endif
            {{-- @if ($results->count() > 0)
                @foreach ($results as $result)
                <div class="card w-80 h-96 shadow-md shadow-black border-b-8 border-b-sky-500">
                    <div class="image w-full h-40 bg-cover bg-no-repeat" style="background-image: url(/storage/{{ $result->images[0]->image}} )"></div>
                    <div class="text px-5 py-3">
                        <h1>{{ $result['name'] }}</h1>
                        <h2 class="pt-5">{{ $result['destination'] }}</h2>
                        <h2>{{ $package['duration'] }}</h2>
                        <a href="{{ route('detail', $package->slug) }}" class="text-sky-400 hover:underline flex items-center gap-5 mt-10 justify-end">View Details <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
                    </div>
                </div>
                @endforeach
            @else
            <p>No Result found!</p>
            @endif --}}
        </div>
    </div>
@endsection