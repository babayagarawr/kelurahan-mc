<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\Action;

class KelurahanController extends Controller {
    public function index () {
        return view('layout.app');
    }
    public function penduduk()
    {
        $id = 1;
        $nama = 'John Malik';
        $alamat = 'Jl Merdeka No. 45';
        $action = 'button';
        return view('penduduk', compact('id', 'nama','alamat', 'action'));
    }
}

