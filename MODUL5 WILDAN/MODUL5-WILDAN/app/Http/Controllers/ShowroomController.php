<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ShowroomController extends BaseController
{
    public function index(){
        $users = Showroom::all();
        return view('users/index', compact('users'));
    }

    public function create(){
        return view('showroom.create');
    }

    public function store(Request $request){
        $data = $request->all();
        Showroom::create([
            'nama_mobil'->$data['nama_mobil'],
            'brand_mobil'->$data['brand_mobil'],
            'warna_mobil'->$data['warna_mobil'],
            'tipe_mobil'->$data['tipe_mobil'],
            'harga_mobil'->$data['harga_mobil']
        ]);

        return redirect(route('showroom.index'));
    }

}
