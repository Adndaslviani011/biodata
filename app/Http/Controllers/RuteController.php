<?php

namespace App\Http\Controllers;
use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    public function MenampilkanData()
    {
        return view('rutecontroller');
    }

    public function MenampilkanDatamodel()
    {
        $sekolah = Rute::$sekolah;
        $kelas = Rute::$kelas;
        return view('rutemodel');
    }
}
