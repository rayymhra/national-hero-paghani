<?php

namespace App\Http\Controllers;

use App\Models\Pahlawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PahlawanController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $pahlawans = Pahlawan::latest()->paginate(10);
        return view('pahlawans.index', compact('pahlawans'));
    }

    // Menampilkan form untuk menambah data
    public function create()
    {
        return view('pahlawans.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pahlawan' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
            'jasa' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images/pahlawans'), $imageName);
            $data['gambar'] = 'images/pahlawans/'.$imageName;
        }

        Pahlawan::create($data);

        return redirect()->route('pahlawans.index')
            ->with('success', 'Data pahlawan berhasil ditambahkan.');
    }

    // Menampilkan detail data
    public function show(Pahlawan $pahlawan)
    {
        return view('pahlawans.show', compact('pahlawan'));
    }

    // Menampilkan form untuk mengedit data
    public function edit(Pahlawan $pahlawan)
    {
        return view('pahlawans.edit', compact('pahlawan'));
    }

    // Mengupdate data
    public function update(Request $request, Pahlawan $pahlawan)
    {
        $request->validate([
            'nama_pahlawan' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
            'jasa' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($pahlawan->gambar && file_exists(public_path($pahlawan->gambar))) {
                unlink(public_path($pahlawan->gambar));
            }

            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images/pahlawans'), $imageName);
            $data['gambar'] = 'images/pahlawans/'.$imageName;
        }

        $pahlawan->update($data);

        return redirect()->route('pahlawans.index')
            ->with('success', 'Data pahlawan berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Pahlawan $pahlawan)
    {
        // Hapus gambar jika ada
        if ($pahlawan->gambar && file_exists(public_path($pahlawan->gambar))) {
            unlink(public_path($pahlawan->gambar));
        }

        $pahlawan->delete();

        return redirect()->route('pahlawans.index')
            ->with('success', 'Data pahlawan berhasil dihapus.');
    }
}