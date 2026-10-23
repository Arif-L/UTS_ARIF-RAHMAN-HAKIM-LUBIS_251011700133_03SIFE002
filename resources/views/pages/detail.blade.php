@extends('layouts.app')
@section('title','About')

@section('background')
background-image: url({{ asset('Soft White Marble Plaster Texture.png') }});
background-size: cover;
@endsection

@section('content')
    <div class="flex flex-col text-black px-50 py-10 mt-auto font-3">
        <div>
            <a href="{{ url('/gallery') }}" class="text-[26px] font-medium inline-block
                        hover:-translate-y-1 hover:underline transition ease-out duration-500
            ">Back</a>
        </div>
        
        <div class="flex">
            <div class="mt-3 mr-15">
                <img src="{{ asset($data->image) }}" alt="" class="rounded-xl w-auto h-auto max-w-150 max-h-150 object-cover">
             </div>

             <div class="flex flex-col text-left">
                <p class="text-6xl font-bold">{{ $data->title }}</p>
                <div class="mt-3">
                    <p class="text-3xl font-semibold">Details</p>
                    <div class="mt-2 text-lg font-medium">
                        <p>Resolution: {{ $data->resolution }}</p>
                        <p>Software: {{ $data->software_used }}</p>
                        <p>Price: {{ $data->price }}</p>
                        <p>Artist: {{ $data->artist }}</p>
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection