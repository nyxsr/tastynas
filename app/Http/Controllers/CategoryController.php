<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.kelolaKategori',[
            'active' => 'kelolaKategori',
            'categories' => DB::table('categories')->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create',[
            'active' => 'kelolaKategori'
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
        $name = $request->nama_kategori;

        $this->validate($request, [
            'nama_kategori' => 'required|min:3|unique:categories,nama_kategori',
        ]);

        Category::create(['nama_kategori' => $name]);

        return redirect('kelolaKategori')->with('success','Data Kategori '.$name.' berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kelolaKategori)
    {
        return view('admin.pages.category.update',[
            'active'=>'kelolaKategori',
            'cat'=>$kelolaKategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $kelolaKategori)
    {
        $oldName = $kelolaKategori->nama_kategori;
        $name = $request->nama_kategori;
        $this->validate($request, [
            'nama_kategori' => 'required|min:3|unique:categories,nama_kategori',
        ]);
        $kelolaKategori->update(['nama_kategori'=>$name]);
        return redirect('kelolaKategori')->with('success','Data Kategori '.$oldName.' berhasil dirubah menjadi '.$name.' !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kelolaKategori)
    {
        $nama = $kelolaKategori->nama_kategori;
        $kelolaKategori->delete();
           return redirect('kelolaKategori')->with('success','Data '.$nama.' berhasil dihapus!');
    }
}
