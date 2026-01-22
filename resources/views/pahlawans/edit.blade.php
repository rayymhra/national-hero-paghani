@extends('layouts.app')

@section('title', 'Edit Data Pahlawan')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Data Pahlawan</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pahlawans.update', $pahlawan) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nama_pahlawan" class="form-label">Nama Pahlawan</label>
                <input type="text" class="form-control @error('nama_pahlawan') is-invalid @enderror" 
                       id="nama_pahlawan" name="nama_pahlawan" 
                       value="{{ old('nama_pahlawan', $pahlawan->nama_pahlawan) }}" required>
                @error('nama_pahlawan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="daerah" class="form-label">Daerah Asal</label>
                <input type="text" class="form-control @error('daerah') is-invalid @enderror" 
                       id="daerah" name="daerah" 
                       value="{{ old('daerah', $pahlawan->daerah) }}" required>
                @error('daerah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jasa" class="form-label">Jasa/Penghargaan</label>
                <textarea class="form-control @error('jasa') is-invalid @enderror" 
                          id="jasa" name="jasa" rows="4" required>{{ old('jasa', $pahlawan->jasa) }}</textarea>
                @error('jasa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Foto Pahlawan</label>
                @if($pahlawan->gambar)
                    <div class="mb-2">
                        <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                             class="img-thumbnail" style="width: 150px;">
                        {{-- <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="hapus_gambar" name="hapus_gambar">
                            <label class="form-check-label" for="hapus_gambar">
                                Hapus gambar saat ini
                            </label>
                        </div> --}}
                    </div>
                @endif
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                       id="gambar" name="gambar" accept="image/*">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Biarkan kosong jika tidak ingin mengganti gambar.</div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('pahlawans.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection