<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUsers = User::paginate(4);
        return view('admin.pages.kelolaUser',[
            'active' => 'kelolaUsers',
            'dataUsers' => $dataUsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.users.create',[
            'active' => 'kelolaUsers'
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

        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $foto_profil = $request->foto_profil;
        $validatedFile = $request->validate([
            'foto_profil' => 'mimes:png,jpg,jpeg',
            'name' => 'min:1|required',
            'username' => 'required|unique:users,username',
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);

        $newPath = 'adminAssets/img_profil/img_profil.png';
        if ($foto_profil) {
            $path = $request->file('foto_profil')->store('public/adminAssets/img_profil');
            $newPath = str_replace('public/','',$path);
        }

        User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'foto_profil' => $newPath

        ]);

        return redirect('kelolaUser')->with('success','Data Berhasil Ditambahkan!');
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
    public function edit(User $kelolaUser)
    {
        return view('admin.pages.users.update',[
            'user' => $kelolaUser,
            'active' => 'kelolaUsers'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $kelolaUser)
    {
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $foto_profil = $request->foto_profil;

        $this->validate($request, [
            'foto_profil' => 'mimes:png,jpg,jpeg',
            'name' => 'min:1|required',
            'username' => 'required|unique:users,username,'.$kelolaUser->id,
            'email' => 'email|required',
        ]);

        $new_photo = $kelolaUser->foto_profil;

        if($foto_profil){
            $path = $request->file('foto_profil')->store('public/adminAssets/img_profil');
            $newPath = str_replace('public/','',$path);
            $new_photo = $newPath;
        }
        $kelolaUser->update([
            'name' => $name,
            'foto_profil' => $new_photo,
            'username'=>$username,
            'email' => $email,
        ]);

        return redirect('kelolaUser')->with('success', 'Data sudah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $kelolaUser)
    {
        $photo = $kelolaUser->foto_profil;
        $photo = explode('/', $photo)[2];

        if($photo != 'img_profil.png') {
            $path = public_path('storage/adminAssets/img_profil');

            if(file_exists($path.'/'.$photo)) {
                unlink($path.'/'.$photo);
            }
        }
        $kelolaUser->delete();
           return redirect('kelolaUser')->with('success','Data berhasil dihapus!');
    }
    public function editPass(User $kelolaUser)
    {
        return view('admin.pages.users.update-pass',[
            'active' => 'kelolaUsers',
            'user' => $kelolaUser
        ]);
    }
    public function updatePass(Request $request, User $kelolaUser)
    {
        $password = $request->password;

        $this->validate($request, [
            'password' => 'required|min:6',
        ]);

        $kelolaUser->update([
            'password' => bcrypt($password)
        ]);

        return redirect('kelolaUser')->with('success', 'Password sudah diupdate!');
    }
}
