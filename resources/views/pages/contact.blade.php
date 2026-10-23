@extends('layouts.app')
@section('title','Contact Us')

@section('background')
background-image: url({{ asset('bekron.jpeg') }});
background-size: cover;
@endsection

@section('content')
    <div class="flex flex-1 p-50 items-center justify-center text-black" >
        <div class=" font-medium font-3 items-center flex flex-col">
            <p class="text-6xl">Contact US</p>
            <p class="text-3xl">Arif Rahman Hakim Lubis</p>
            <p class="text-3xl">Prodi Sistem Informasi</p>
            <p class="text-3xl">ariphakim48@gmail.com</p>
            <p class="text-3xl">251011700133</p>
        </div>
    </div>
@endsection