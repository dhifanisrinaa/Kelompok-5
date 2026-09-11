<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // Menampilkan semua data siswa
    public function index()
    {
        $users = User::where('role', 'siswa')->get();

        return view('users.index', compact('users'));
    }

    // Menampilkan form tambah siswa
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|digits:6|unique:users,nis',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // Menampilkan form edit siswa
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Mengupdate data siswa
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|digits:6|unique:users,nis,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->name = $request->name;
        $user->nis = $request->nis;

        // Password hanya diubah kalau diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    // Menghapus siswa
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}