<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\kategori;
use App\keranjang;


class FrontProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $category = kategori::all();
        $data = produk::paginate(8);

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $count = keranjang::count();
        
     return view('frondend.produk',['data'=>$data,'category'=>$category,'cart'=>$cart,'purchases'=>$purchases,
                'count'=>$count]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = kategori::all();
        $data = DB::table('produks')
            ->select('*')
            ->where('nama_produk', 'like' , "%{$request->search}%")
            ->paginate(8);

        return view('frondend.produk',['data'=>$data,'category'=>$category]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('produks')
            ->select('*')
            ->where('kode_produk',$id)
            ->get();
        
        $category = DB::table('kategoris')
        ->join('produks', 'produks.kode_kategori','=','kategoris.kode_kategori')
        ->select('kategoris.*')
        ->where('kode_produk',$id)
        ->get();    
        
        $related = produk::orderBy('created_at', 'desc')->get();
         

        return view('frondend.detailproduk',['data'=>$data,'category'=>$category,'related'=>$related]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
