<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.kelolaEvent', [
            'active' => 'kelolaEvent',
            'event' => DB::table('events')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.event.create', [
            'active' => 'kelolaEvent',
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
        $nama = $request->nama_event;
        $link = $request->link_event;

        $this->validate($request, [
            'nama_event' => 'required|min:2',
            'link_event' => 'url',
            'poster' => 'required',
        ]);

        $path = $request->file('poster')->store('public/assets/event');
        $newPath = str_replace('public/', '', $path);

        Event::create([
            'poster' => $newPath,
            'nama_event' => $nama,
            'link_event' => $link,
        ]);

        return redirect('kelolaEvent')->with('success', 'Event berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $kelolaEvent)
    {
        $nama = $kelolaEvent->nama_event;
        if ($kelolaEvent->is_show === 1) {
            $kelolaEvent->update(['is_show'=>false]);
            $message = 'Tidak akan ditampilkan di halaman depan';
        }else{
           Event::where('is_show',true)->update([
            'is_show'=>false
           ]);
           $message= 'Akan ditampilkan di halaman depan';
           $kelolaEvent->update(['is_show'=>true]);
        }

       return redirect('kelolaEvent')->with('success',$nama.' '.$message);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $kelolaEvent)
    {
        return view('admin.pages.event.update', [
            'active' => $kelolaEvent,
            'event' => $kelolaEvent,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $kelolaEvent)
    {
        $nama = $request->nama_event;
        $link = $request->link_event;
        $foto = $request->poster;

        $this->validate($request, [
            'nama_event' => 'required|min:2',
            'link_event' => 'url',
        ]);

        $newPhoto = $kelolaEvent->poster;
        if ($foto) {
            $newPhoto = explode('/', $newPhoto)[2];
            $path = public_path('storage/assets/event');
            if (file_exists($path . '/' . $newPhoto)) {
                unlink($path . '/' . $newPhoto);
            }
            $path = $request->file('poster')->store('public/assets/event');
            $newPath = str_replace('public/', '', $path);
            $newPhoto = $newPath;
        }

        $kelolaEvent->update([
            'poster' => $newPhoto,
            'nama_event' => $nama,
            'link_event' => $link,
        ]);

        return redirect('kelolaEvent')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $kelolaEvent)
    {
        $photo = $kelolaEvent->poster;
        $photo = explode('/', $photo)[2];

        $path = public_path('storage/assets/product');

        if (file_exists($path . '/' . $photo)) {
            unlink($path . '/' . $photo);
        }
        $kelolaEvent->delete();
        return redirect('kelolaEvent')->with('success', 'Data berhasil dihapus!');
    }
}
