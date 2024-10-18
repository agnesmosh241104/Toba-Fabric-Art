<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Impor Hash untuk mengenkripsi password
use Illuminate\Validation\Rule; // Impor Rule untuk validasi

class NewAuthorManager extends Controller
{
    // Menampilkan halaman login
    function login(){
        return view('login'); 
    }

    // Menampilkan halaman registrasi
    function registrasi(){
        return view('registrasi');
    } 
    // Menangani login (POST request)
    function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

           // Menangani logout
 // Menangani logout
function logout(){
    session()->flush();    // Menghapus session
    auth()->logout();      // Logout dari session auth
    return redirect(route('login'));   // Redirect ke halaman login
}


        // Ambil hanya email dan password dari request
        $credentials = $request->only('email', 'password');
        
        // Cek kredensial
        if(auth()->attempt($credentials)){
            return redirect()->intended(route('home')); // Arahkan ke halaman home jika berhasil
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    // Menangani logout
function logout(){
    auth()->logout(); // Logout dari sesi autentikasi
    session()->flush(); // Menghapus semua session data
    return redirect()->route('login'); // Redirect ke halaman login
}


    // Menangani registrasi (POST request)
    function registrasiPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password); // Hashing password

        $user = User::create($data);
        if(!$user){
            return redirect(route('registrasi'))->with('error', 'Registrasi failed, try again');
        }

        return redirect(route('login'))->with('success', 'Registrasi success');
    } 

 


    // Menampilkan form pembuatan proyek
    function create(){
        return view('create-proyek'); // Ganti dengan nama view yang sesuai
    }
}

 // Menampilkan form kompetisi
 function kompetisi()
 {
     return view('kompetisi'); // Pastikan nama ini sesuai dengan file blade
 }


    function store(Request $request)
{
    // Validasi data form
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
    ]);

    // Simpan proyek ke database
    // Proyek::create($validated);

    // Redirect dengan pesan sukses
    return redirect()->route('create-proyek')->with('success', 'Proyek berhasil dibuat!');
}
