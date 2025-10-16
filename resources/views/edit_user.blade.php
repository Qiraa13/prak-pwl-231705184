@extends('layouts.app')

@section('content')
<div>
    <h1>Edit Data Pengguna</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $user->nama }}" required><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="{{ $user->nim }}" required><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('user.index') }}">Batal</a>
    </form>
</div>
@endsection
