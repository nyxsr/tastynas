<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.kelolaProduk',[
            'active' => 'kelolaProduk',
            'products' => Product::paginate(6)
        ]);
    }
    public function bestSeller(Product $kelolaProduk)
    {
        return view('admin.pages.kelolaBestSeller',[
            'active'=>'kelolaBestSeller',
            'products' => Product::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.create',[
            'active'=>'kelolaProduk',
            'kategori' => DB::table('categories')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama_produk;
        $kategori= $request->categories_id;
        $harga = $request->harga;
        $deskripsi = $request->deskripsi;
        $foto1 = $request->foto_produk1;
        $foto2 = $request->foto_produk2;

        $this->validate($request, [
            'nama_produk' => 'required|min:2|unique:products,nama_produk',
            'categories_id' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|min:5',
            'foto_produk1'=> 'mimes:png,jpg,jpeg|required',
            'foto_produk2'=> 'mimes:png,jpg,jpeg|required'
        ]);

            $path1 = $request->file('foto_produk1')->store('public/assets/product');
            $newPath1 = str_replace('public/','',$path1);
            $path2 = $request->file('foto_produk2')->store('public/assets/product');
            $newPath2 = str_replace('public/','',$path2);

            Product::create([
                'nama_produk'=> $nama,
                'categories_id'=> $kategori,
                'harga' => $harga,
                'deskripsi'=> $deskripsi,
                'foto_produk1' => $newPath1,
                'foto_produk2' => $newPath2,
            ]);

            return redirect('kelolaProduk')->with('success','Data Berhasil Ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $kelolaProduk)
    {
        return view('admin.pages.product.show',[
            'active'=>'kelolaProduk',
            'prod'=>$kelolaProduk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $kelolaProduk)
    {
        return view('admin.pages.product.update',[
            'active'=>'kelolaProduk',
            'prod'=>$kelolaProduk,
            'kategori'=>DB::table('categories')->get()
        ]);
    }

    public function editDetail(Product $kelolaProduk)
    {
        return view('admin.pages.product.update-detail',[
            'active'=>'kelolaProduk',
            'prod'=>$kelolaProduk,
            'kategori'=>DB::table('categories')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $kelolaProduk)
    {
        $oldName = $kelolaProduk->nama_produk;
        $nama = $request->nama_produk;
        $kategori= $request->categories_id;
        $harga = $request->harga;
        $deskripsi = $request->deskripsi;
        $foto1 = $request->foto_produk1;
        $foto2 = $request->foto_produk2;

        $this->validate($request, [
            'nama_produk' => 'required|min:2',
            'categories_id' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|min:5',
            'foto_produk1'=> 'mimes:png,jpg,jpeg',
            'foto_produk2'=> 'mimes:png,jpg,jpeg'
        ]);

        $new_photo1 = $kelolaProduk->foto_produk1;
        $new_photo2 = $kelolaProduk->foto_produk2;
        $first_path = public_path('storage/assets/product');
        if($foto1){
            $photo1 = $kelolaProduk->foto_produk1;
            $photo1 = explode('/', $photo1)[2];
            if(file_exists($first_path.'/'.$photo1)) {
                unlink($first_path.'/'.$photo1);
            }
            $path = $request->file('foto_produk1')->store('public/assets/product');
            $newPath1 = str_replace('public/','',$path);
            $new_photo1 = $newPath1;
        }
        if($foto2){
            $photo2 = $kelolaProduk->foto_produk2;
            $photo2 = explode('/', $photo2)[2];
            if(file_exists($first_path.'/'.$photo2)) {
                unlink($first_path.'/'.$photo2);
            }
            $path = $request->file('foto_produk2')->store('public/assets/product');
            $newPath2 = str_replace('public/','',$path);
            $new_photo2 = $newPath2;
        }

        $kelolaProduk->update([
            'nama_produk'=> $nama,
            'categories_id'=> $kategori,
            'harga' => $harga,
            'deskripsi'=> $deskripsi,
            'foto_produk1' => $new_photo1,
            'foto_produk2' => $new_photo2,
        ]);

        return redirect('kelolaProduk')->with('success','Data '.$oldName.' Berhasil Diperbaharui menjadi '.$nama.'!');
    }
    public function updateProduk(Request $request, Product $kelolaProduk)
    {
        $name = $kelolaProduk->nama_produk;
        $panjang_prod = $request->panjang_produk;
        $lebar_prod = $request->lebar_produk;
        $tinggi_prod = $request->tinggi_produk;
        $panjang_pack = $request->panjang_package;
        $lebar_pack = $request->lebar_package;
        $tinggi_pack = $request->tinggi_package;
        $netto = $request->netto;
        $berat_total = $request->berat_total;

        $this->validate($request, [
            'panjang_produk' => 'required',
            'lebar_produk' => 'required',
            'tinggi_produk' => 'required',
            'panjang_package' => 'required',
            'lebar_package' => 'required',
            'tinggi_package' => 'required',
            'netto' => 'required',
            'berat_total' => 'required',

        ]);


        $kelolaProduk->update([
            'panjang_produk' => $panjang_prod,
            'lebar_produk' => $lebar_prod,
            'tinggi_produk' => $tinggi_prod,
            'panjang_package' => $panjang_pack,
            'lebar_package' => $lebar_pack,
            'tinggi_package' => $tinggi_pack,
            'netto' => $netto,
            'berat_total' => $berat_total,
        ]);

        return redirect('kelolaProduk')->with('success','Data detail produk '.$name.' Berhasil Diperbaharui !');
    }
    public function updateBestSeller(Request $request, Product $kelolaProduk)
    {

        $name = $kelolaProduk->nama_produk;
        if ($kelolaProduk->best_seller === 1) {
            $status = 0;
        }else{
            $status = 1;
        }

        $kelolaProduk->update(['best_seller'=> $status]);

        return redirect('kelolaBestSeller')->with('success','Status best seller produk '.$name.' Berhasil Diperbaharui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $kelolaProduk)
    {
        $photo1 = $kelolaProduk->foto_produk1;
        $photo2 = $kelolaProduk->foto_produk2;
        $photo1 = explode('/', $photo1)[2];
        $photo2 = explode('/', $photo2)[2];

        $path = public_path('storage/assets/product');

        if(file_exists($path.'/'.$photo1)) {
            unlink($path.'/'.$photo1);

            if(file_exists($path.'/'.$photo2)) {
                unlink($path.'/'.$photo2);
            }
        }
        $kelolaProduk->delete();
           return redirect('kelolaProduk')->with('success','Data berhasil dihapus!');
    }
}
