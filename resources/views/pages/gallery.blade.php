@extends('layouts.app')
@section('title','Gallery')

@section('background')
background-image: url({{ asset('galleryBg.jpg') }});
background-size: cover;
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center">
        
        <div class="font-cormorant text-7xl mt-5 flex justify-center font-bold">
            <p>Gallery</p>
        </div>

        <div class="flex justify-center items-center my-5">
            @foreach ($data as $cengcorang)
            <a href="/detail/{{ $cengcorang->id }}">
                <div class=" m-5 w-110 shadow-lg shadow-black
                        hover:-translate-0.5 transition ease-out duration-500
                        hover:shadow-xl hover:shadow-black
                    ">
                    <img src="{{ $cengcorang->image }}" alt="" class="h-70 w-full object-cover rounded">
                    <div class="bg-white p-1 flex flex-col justify-center">
                        <p class="font-3 font-bold text-2xl mt-1">{{ $cengcorang->title }}</p>
                        <p class="font-3 font-semibold text-base">resolution: {{ $cengcorang->resolution }}</p>
                    </div>
                    
                </div>
            </a>
            @endforeach
        </div>      
        <div class="mb-auto">
            {{ $data->links() }}
        </div>
    </div>
@endsection