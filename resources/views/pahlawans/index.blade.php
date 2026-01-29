@extends('layouts.app')

@section('title', 'Data Pahlawan Indonesia')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fas fa-users"></i>
        <span>Daftar Pahlawan Indonesia</span>
        <span class="badge rounded-pill bg-light text-primary ms-2">{{ $pahlawans->total() }} Pahlawan</span>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="mb-1">Kisah Perjuangan dan Pengorbanan</h5>
                <p class="text-muted small mb-0">Telusuri dan kelola data pahlawan nasional Indonesia</p>
            </div>
            <a href="{{ route('pahlawans.create') }}" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Tambah Pahlawan Baru
            </a>
        </div>

        @if($pahlawans->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Nama Pahlawan</th>
                        <th>Daerah Asal</th>
                        <th>Jasa & Perjuangan</th>
                        <th style="width: 120px;">Gambar</th>
                        <th style="width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pahlawans as $pahlawan)
                    <tr>
                        <td>
                            <div class="number-circle">
                                {{ $loop->iteration + ($pahlawans->currentPage() - 1) * $pahlawans->perPage() }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">
                                    @if($pahlawan->gambar)
                                        <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}">
                                    @else
                                        <i class="fas fa-user"></i>
                                    @endif
                                </div>
                                <div>
                                    <h6 class="mb-0">{{ $pahlawan->nama_pahlawan }}</h6>
                                    <small class="text-muted">Pahlawan Nasional</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span>{{ $pahlawan->daerah }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="jasa-text">
                                {{ Str::limit($pahlawan->jasa, 70) }}
                                @if(strlen($pahlawan->jasa) > 70)
                                    <a href="#" class="text-primary small" data-bs-toggle="tooltip" title="{{ $pahlawan->jasa }}">selengkapnya</a>
                                @endif
                            </div>
                        </td>
                        <td>
                            @if($pahlawan->gambar)
                                <div class="image-container">
                                    <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                                         class="img-thumbnail">
                                    <div class="image-overlay">
                                        <a href="{{ asset($pahlawan->gambar) }}" target="_blank" class="view-btn">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="no-image">
                                    <i class="fas fa-image"></i>
                                    <small>Tidak ada gambar</small>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('pahlawans.show', $pahlawan) }}" class="btn btn-info btn-sm" 
                                   data-bs-toggle="tooltip" title="Lihat detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('pahlawans.edit', $pahlawan) }}" class="btn btn-warning btn-sm"
                                   data-bs-toggle="tooltip" title="Edit data">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('pahlawans.destroy', $pahlawan) }}" method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pahlawan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            data-bs-toggle="tooltip" title="Hapus data">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted small">
                Menampilkan {{ $pahlawans->firstItem() }} - {{ $pahlawans->lastItem() }} dari {{ $pahlawans->total() }} pahlawan
            </div>
            <div>
                {{ $pahlawans->links() }}
            </div>
        </div>
        @else
        <div class="empty-state">
            <div class="empty-state-icon">
                <i class="fas fa-users-slash"></i>
            </div>
            <h4 class="mb-3">Belum Ada Data Pahlawan</h4>
            <p class="text-muted mb-4">Mulailah dengan menambahkan data pahlawan pertama Anda</p>
            <a href="{{ route('pahlawans.create') }}" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Tambah Pahlawan Pertama
            </a>
        </div>
        @endif
    </div>
</div>

<style>
    /* Additional styles for dashboard */
    .number-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-secondary));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(138, 127, 255, 0.3);
    }
    
    .avatar-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-secondary));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        overflow: hidden;
    }
    
    .avatar-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .jasa-text {
        line-height: 1.5;
        max-width: 300px;
    }
    
    .image-container {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 0 auto;
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .image-container:hover .image-overlay {
        opacity: 1;
    }
    
    .view-btn {
        color: white;
        font-size: 1.2rem;
        background: rgba(255, 255, 255, 0.2);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .view-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
    }
    
    .no-image {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--color-text-light);
        height: 100px;
    }
    
    .no-image i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }
    
    .badge {
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
</style>

<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endsection