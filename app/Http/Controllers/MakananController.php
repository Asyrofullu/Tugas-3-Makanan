<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanans = Makanan::all();

        //cek database makanan
        // dd($makanans);  

        return view('makanan', ['makanans' => $makanans]);
    }
}
