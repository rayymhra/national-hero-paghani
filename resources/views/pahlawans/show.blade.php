@extends('layouts.app')

@section('title', 'Detail Pahlawan')

@section('content')
<div class="card">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Detail Pahlawan: {{ $pahlawan->nama_pahlawan }}</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                @if($pahlawan->gambar)
                    <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                         class="img-fluid rounded mb-3" style="max-height: 300px;">
                @else
                    <div class="bg-light rounded d-flex align-items-center justify-content-center mb-3" 
                         style="height: 300px;">
                        <span class="text-muted">Tidak ada gambar</span>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%;">Nama Pahlawan</th>
                        <td>{{ $pahlawan->nama_pahlawan }}</td>
                    </tr>
                    <tr>
                        <th>Daerah Asal</th>
                        <td>{{ $pahlawan->daerah }}</td>
                    </tr>
                    <tr>
                        <th>Jasa/Penghargaan</th>
                        <td>{{ $pahlawan->jasa }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Dibuat</th>
                        <td>{{ $pahlawan->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Terakhir Diupdate</th>
                        <td>{{ $pahlawan->updated_at->format('d-m-Y H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('pahlawans.edit', $pahlawan) }}" class="btn btn-warning">
                Edit Data
            </a>
            <a href="{{ route('pahlawans.index') }}" class="btn btn-secondary">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection