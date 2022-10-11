<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = Carbon::now()->format('H');
        if ($time >= 06 && $time < 12) {
            $greeting = "Selamat Pagi ! Semangat Bekerja dan Jaga Kesehatannya ya 🔥🔥";
        }elseif($time >= 12 && $time < 15){
            $greeting = "Selamat Siang ! Tetap Semangat ya 😊🫶";
        }elseif($time >= 15 && $time < 19){
            $greeting = "Selamat Sore ! Masih produktif ya kan ? 😆";
        }elseif($time >= 19 && $time < 24){
            $greeting = "Selamat Malam ! Selamat Beristirahat ✨";
        }elseif($time >= 00 && $time < 06 ){
            $greeting = "Jangan Begadang ya , jaga kesehatan ❤️";
        }
        return view('admin.pages.main',[
            'greeting' => $greeting,
            'active' => 'dashboard',
            'showed_event' => DB::table('events')->where('is_show',true)->get(),
            'count_produk' => DB::table('products')->count(),
            'count_kategori' => DB::table('categories')->count(),
            'count_berita' => DB::table('news')->count(),
            'count_testimoni' => DB::table('testimoni')->count()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
