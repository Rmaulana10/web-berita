<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function wilayah(){
        $data['wilayah'] = Wilayah::all();
        $data['title'] = "Wilayah";
        return view('wilayah.wilayah')->with($data);
    }
    public function wilayahtambah(Request $req)
    {
        Wilayah::create([
            'nama' => $req->nama,
            'kode' => $req->kode,
        ]);
        return Redirect('wilayah',200,);
    }
}
