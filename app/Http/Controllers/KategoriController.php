<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

use function Termwind\render;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

    public function update($kategori_id){
        return view('kategori.edit',['data'=>KategoriModel::find($kategori_id)]);
    }

    public function delete($kategori_id){
        KategoriModel::find($kategori_id)->delete();

        return redirect('/kategori');
    }

    public function store(Request $request){
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function store_update(Request $req, $kategori_id){
        $goto = KategoriModel::find($kategori_id);
        $goto->kategori_kode = $req->kategori_kode;
        $goto->kategori_nama = $req->kategori_nama;
        
        $goto->save();
        return redirect('/kategori');
    }
}
