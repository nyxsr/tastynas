<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use UniSharp\LaravelFilemanager\Controllers\Controller;

class NewsController extends Controller
{
    public function showNews($category)
    {
        return view('pages.news',[
            'active' => 'news',
            'news_category' => $category
        ]);
    }
    public function index()
    {
        return view('admin.pages.kelolaBerita',[
            'active' => 'kelolaBerita',
            'news'=>News::paginate(6)
        ]);
    }
    public function spotlightNews()
    {
        return view('admin.pages.kelolaSpotlight',[
            'active' => 'kelolaSpotlight',
            'news'=>DB::table('news')->paginate(6)
        ]);
    }
    public function updateSpotlight(News $kelolaBeritum)
    {
        $judul = $kelolaBeritum->judul;
        $status = $kelolaBeritum->is_spotlight;
        if ($status === 1) {
            $status = 0;
        }else{
            $status = 1;
        }
        $kelolaBeritum->update(['is_spotlight'=>$status]);

        return redirect('kelolaSpotlight')->with('success','Status berita dengan judul '.$judul.' berhasil diupdate!');
    }
    public function create()
    {
        return view('admin.pages.news.create',[
           'active'=>'kelolaBerita'
        ]);
    }
    public function store(Request $request)
    {
        $penulis = auth()->user()->id;
        $judul = $request->judul;
        $slug = Str::slug($request->judul);
        $kategori = $request->kategori;
        $isi = $request->isi;

        $this->validate($request,[
            'judul' => 'required|min:5',
            'kategori' => 'required',
            'isi' => 'required',
            'thumbnail' => 'mime: jpg,jpeg,png'
        ]);

        $path = $request->file('gambar')->store('public/assets/news_thumbnails');
        $newPath = str_replace('public/','',$path);

        News::create([
            'judul'=> $judul,
            'slug' => $slug,
            'kategori'=> $kategori,
            'isi' => $isi,
            'gambar' => $newPath,
            'user_id' => $penulis
        ]);

        return redirect('kelolaBerita')->with('success','Data berhasil ditambahkan!');
    }
    public function edit(News $kelolaBeritum)
    {
        return view('admin.pages.news.update',[
            'active'=>'kelolaBerita',
            'news'=>$kelolaBeritum,
            'users'=>DB::table('users')->get()
        ]);
    }
    public function update(Request $request, News $kelolaBeritum)
    {
        $penulis = $request->penulis;
        $judul = $request->judul;
        $slug = Str::slug($request->judul);
        $kategori = $request->kategori;
        $isi = $request->isi;
        $foto = $request->gambar;

        $this->validate($request,[
            'penulis'=>'required',
            'judul' => 'required|min:5',
            'kategori' => 'required',
            'isi' => 'required',
            'thumbnail' => 'mime: jpg,jpeg,png'
        ]);

        $newPath = $kelolaBeritum->gambar;

        if($foto){
            $path = $request->file('gambar')->store('public/assets/news_thumbnails');
            $newPath1 = str_replace('public/','',$path);
            $newPath = $newPath1;
        }

        $kelolaBeritum->update([
            'judul'=> $judul,
            'slug' => $slug,
            'kategori'=> $kategori,
            'isi' => $isi,
            'gambar' => $newPath,
            'user_id' => $penulis
        ]);

        return redirect('kelolaBerita')->with('success','Data Berhasil Diperbaharui !');
    }
    public function destroy(News $kelolaBeritum)
    {
        $photo1 = $kelolaBeritum->gambar;
        $photo1 = explode('/', $photo1)[2];

        $path = public_path('storage/assets/news_thumbnails');

        if(file_exists($path.'/'.$photo1)) {
            unlink($path.'/'.$photo1);
        }
        $kelolaBeritum->delete();
           return redirect('kelolaBerita')->with('success','Data berhasil dihapus!');
    }
}
