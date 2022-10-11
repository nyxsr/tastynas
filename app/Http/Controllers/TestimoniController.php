<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTesti = DB::table('testimoni')->paginate(3);
        return view('admin.pages.kelolaTestimoni',[
            'active' => 'kelolaTestimoni',
            'dataTesti' => $dataTesti
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.testimoni.create',[
            'active' => 'kelolaTestimoni'
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
        $nama = $request->nama_reviewer;
        $isi = $request->isi_review;
        $photo = $request->foto_reviewer;
        $this->validate($request, [
            'foto_reviewer' => 'mimes:png,jpg,jpeg',
            'nama_reviewer' => 'min:3|required',
            'isi_review' => 'required',
        ]);

        $newPath = 'assets/testimoni/default.png';

        if($photo){
            $path = $request->file('foto_reviewer')->store('public/assets/testimoni');
            $newPath = str_replace('public/','',$path);
        }


        Testimoni::create([
            'nama_reviewer' => $nama,
            'foto_reviewer' => $newPath,
            'isi_review' => '"'.$isi.'"'
        ]);

        return redirect('kelolaTestimoni')->with('success','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $kelolaTestimoni)
    {
        return view('admin.pages.testimoni.update',[
            'active'=>'kelolaTestimoni',
            'testi' => $kelolaTestimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $kelolaTestimoni)
    {
        $name = $request->nama_reviewer;
        $isi = $request->isi_review;
        $foto = $request->foto_reviewer;

        $this->validate($request, [
            'foto_reviewer' => 'mimes:png,jpg,jpeg',
            'nama_reviewer' => 'min:3|required',
            'isi_review' => 'required|min:5'
        ]);

        $new_photo = $kelolaTestimoni->foto_reviewer;

        if($foto){
            $path = $request->file('foto_reviewer')->store('public/assets/testimoni');
            $newPath = str_replace('public/','',$path);
            $new_photo = $newPath;
        }
        $kelolaTestimoni->update([
            'nama_reviewer' => $name,
            'isi_review' => $isi,
            'foto_reviewer' => $new_photo,
        ]);

        return redirect('kelolaTestimoni')->with('success', 'Data sudah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $kelolaTestimoni)
    {
        $photo = $kelolaTestimoni->foto_reviewer;
        $photo = explode('/', $photo)[2];
        if($photo != 'default.png') {
            $path = public_path('storage/assets/testimoni');

            if(file_exists($path.'/'.$photo)) {
                unlink($path.'/'.$photo);
            }
        }
        $kelolaTestimoni->delete();
           return redirect('kelolaTestimoni')->with('success','Data berhasil dihapus!');
    }
}
