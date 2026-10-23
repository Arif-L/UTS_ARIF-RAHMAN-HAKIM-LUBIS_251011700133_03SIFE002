<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\digital_art;

class DigitalArtController extends Controller
{
    //
    public function show()
    {
        $data = digital_art::paginate(2);
        return view('pages.gallery', compact('data'));
    }

     public function detail($id)
    {
        $data = digital_art::findOrFail($id);
        return view('pages.detail', compact('data'));
    }

    public function test()
    {
        $data = digital_art::first();
        return view('pages.detail', compact('data'));
    }
}
