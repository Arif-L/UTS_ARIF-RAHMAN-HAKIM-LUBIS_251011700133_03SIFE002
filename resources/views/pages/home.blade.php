@extends('layouts.app')
@section('title','Home')

@section('background')
background-image: url({{ asset('FrontGal2.jpg') }});
background-size: cover;
@endsection


@section('content')
    <div class="flex items-center justify-center min-h-full mt-40"> 
        <div class="flex flex-col items-center justify-center text-white">
            <p class="font-cormorant font-semibold text-6xl">Welcome To</p>  
            <span class="font-cormorant font-semibold text-8xl">Digital 
                <a href="{{ url('/gallery') }}" class="hover:-translate-y-1 transition ease-out duration-500 inline-block">Art Gallery</a>
            </span>
        </div>

    </div>
    
@endsection