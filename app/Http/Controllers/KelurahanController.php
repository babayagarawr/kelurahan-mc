<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\Action;
use App\Models\Penduduk;
use App\Models\Surat;
use Illuminate\View\View;

class KelurahanController extends Controller {
    public function index () {
        return view('layout.app');
    }

    public function penduduk() {
        $warga = Penduduk::all();
        return view('penduduk', compact('warga'));
    }

    public function daftarSurat() {
// Eager Loading relasi penduduk untuk menghemat query
$semuaSurat = Surat::with('penduduk')->get();
return view('surat_index', compact('semuaSurat'));
}

    
}


 

