@extends('layouts.app')

@section('title', 'Tambah Pahlawan Baru')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Tambah Pahlawan Baru</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pahlawans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="nama_pahlawan" class="form-label">Nama Pahlawan</label>
                <input type="text" class="form-control @error('nama_pahlawan') is-invalid @enderror" 
                       id="nama_pahlawan" name="nama_pahlawan" value="{{ old('nama_pahlawan') }}" required>
                @error('nama_pahlawan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="daerah" class="form-label">Daerah Asal</label>
                <input type="text" class="form-control @error('daerah') is-invalid @enderror" 
                       id="daerah" name="daerah" value="{{ old('daerah') }}" required>
                @error('daerah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jasa" class="form-label">Jasa/Penghargaan</label>
                <textarea class="form-control @error('jasa') is-invalid @enderror" 
                          id="jasa" name="jasa" rows="4" required>{{ old('jasa') }}</textarea>
                @error('jasa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Foto Pahlawan</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                       id="gambar" name="gambar" accept="image/*">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Format: jpg, png, jpeg, gif. Maksimal 2MB.</div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pahlawans.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection