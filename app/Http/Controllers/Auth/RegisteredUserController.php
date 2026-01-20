<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Menampilkan halaman registrasi.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Menangani permintaan registrasi masuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // 1. Validasi Input sesuai spesifikasi tugas
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'nim' => ['required', 'string', 'unique:users'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'foto' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], // Validasi Foto (Bonus)
        ]);

        // 2. Logika Upload Foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            // Menyimpan foto ke folder storage/app/public/uploads/foto
            $fotoPath = $request->file('foto')->store('uploads/foto', 'public');
        }

        // 3. Simpan Data ke Database
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'nim' => $request->nim,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'foto' => $fotoPath, // Menyimpan path file
            'password' => Hash::make($request->password),
        ]);

        // 4. Trigger Event & Login Otomatis
        event(new Registered($user));

        Auth::login($user);

        // 5. Redirect ke Dashboard setelah berhasil
        return redirect(RouteServiceProvider::HOME);
    }
}