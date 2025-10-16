<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas; // ✅ tambahkan ini

class UserController extends Controller
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        // ✅ Ambil semua kelas dari tabel kelas
        $kelas = Kelas::all();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas, // kirim ke view
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm'  => 'required',
            'kelas_id' => 'required',
        ]);

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim'  => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);
        $kelas = Kelas::all();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = $this->userModel->find($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data berhasil diperbarui!');
    }
}
