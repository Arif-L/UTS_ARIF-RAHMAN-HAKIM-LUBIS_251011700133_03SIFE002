@extends('layouts.app')
@section('title','About')

@section('bg-color')
bg-[#F5F1E9]
@endsection

@section('content')
    <div class="flex flex-col text-black px-50 font-3">
        <div class="flex justify-between items-center">
            <div class="text-[25px] font-medium">
                <p class="text-7xl font-cormorant font-semibold">About</p>
                <p class="">Website ini dibuat sebagai project untuk
                Ujian Tengah Semester (UTS)
                </p>
                <p class="">
                    Website ini berfungsi untuk menyimpan 
                </p>
                <p class="">
                    Dan menampilkan karya seni. 
                </p>
            </div>

            <div class="flex items-center flex-col">
                <img src="{{ asset('fotoContoh.jpg') }}" alt="" class="w-50 h-50">
                <p class="font-medium">contoh karya </p>
            </div>
        </div>

        <div class="flex justify-between mt-25 items-center">
            <div class="flex items-center flex-col">
                <img src="{{ asset('contohArtis.jpg') }}" alt="" class="w-50 h-50">
                <p class="font-medium">contoh artis</p>
            </div>

            <div class="text-[25px] font-medium">
                <p class="">Website ini dibuat sebagai project untuk
                Ujian Tengah Semester (UTS)
                </p>
                <p class="">
                    Website ini berfungsi untuk menyimpan 
                </p>
                <p class="">
                    Dan menampilkan nama artist-nya.
                </p>
            </div>
        </div>
    </div>
@endsection