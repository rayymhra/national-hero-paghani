@extends('layouts.app')

@section('title', 'Data Pahlawan Indonesia')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fas fa-users"></i>
        <span>Daftar Pahlawan Indonesia</span>
        <span class="badge rounded-pill bg-warning text-dark ms-2">{{ $pahlawans->total() }} Pahlawan</span>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="mb-1 text-primary">Kisah Perjuangan dan Pengorbanan</h5>
                <p class="text-muted small mb-0">Telusuri dan kelola data pahlawan nasional Indonesia</p>
            </div>
            <a href="{{ route('pahlawans.create') }}" class="btn btn-warning">
                <i class="fas fa-plus-circle"></i> Tambah Pahlawan Baru
            </a>
        </div>

        @if($pahlawans->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th style="width: 70px;" class="text-center">No</th>
                        <th style="min-width: 250px;">Nama Pahlawan</th>
                        <th style="min-width: 150px;">Daerah Asal</th>
                        <th style="min-width: 300px;">Jasa & Perjuangan</th>
                        <th style="width: 150px;" class="text-center">Gambar</th>
                        <th style="width: 220px;" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pahlawans as $pahlawan)
                    <tr>
                        <td class="text-center">
                            <div class="number-circle mx-auto">
                                {{ $loop->iteration + ($pahlawans->currentPage() - 1) * $pahlawans->perPage() }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                {{-- <div class="avatar-circle me-3">
                                    @if($pahlawan->gambar)
                                        <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                                             class="avatar-img">
                                    @else
                                        <div class="avatar-fallback">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    @endif
                                </div> --}}
                                <div>
                                    <h6 class="mb-0 fw-bold">{{ $pahlawan->nama_pahlawan }}</h6>
                                    <small class="text-primary fw-medium">Pahlawan Nasional</small>
                                    {{-- <div class="small text-muted mt-1">
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        {{ $pahlawan->tahun_lahir ? $pahlawan->tahun_lahir . ' - ' . $pahlawan->tahun_wafat : 'Tidak diketahui' }}
                                    </div> --}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="region-badge">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <span>{{ $pahlawan->daerah }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="jasa-text">
                                {{ Str::limit($pahlawan->jasa, 80) }}
                                @if(strlen($pahlawan->jasa) > 80)
                                    <button class="btn-read-more btn-link text-primary p-0 border-0 bg-transparent small" 
                                            data-bs-toggle="tooltip" title="Lihat selengkapnya"
                                            onclick="showFullText(this, '{{ addslashes($pahlawan->jasa) }}')">
                                        ...selengkapnya
                                    </button>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            @if($pahlawan->gambar)
                                <div class="image-container mx-auto">
                                    <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                                         class="uniform-img">
                                    <div class="image-overlay">
                                        <a href="{{ asset($pahlawan->gambar) }}" target="_blank" class="view-btn" 
                                           data-bs-toggle="tooltip" title="Lihat gambar penuh">
                                            <i class="fas fa-expand-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="no-image mx-auto">
                                    <div class="no-image-icon">
                                        <i class="fas fa-portrait"></i>
                                    </div>
                                    <small class="d-block mt-1">Tidak ada gambar</small>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('pahlawans.show', $pahlawan) }}" 
                                   class="btn btn-primary btn-action" 
                                   data-bs-toggle="tooltip" title="Lihat detail">
                                    <i class="fas fa-eye"></i>
                                    <span class="d-none d-md-inline">Detail</span>
                                </a>
                                <a href="{{ route('pahlawans.edit', $pahlawan) }}" 
                                   class="btn btn-warning btn-action"
                                   data-bs-toggle="tooltip" title="Edit data">
                                    <i class="fas fa-edit"></i>
                                    <span class="d-none d-md-inline">Edit</span>
                                </a>
                                <form action="{{ route('pahlawans.destroy', $pahlawan) }}" method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pahlawan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-action"
                                            data-bs-toggle="tooltip" title="Hapus data">
                                        <i class="fas fa-trash-alt"></i>
                                        <span class="d-none d-md-inline">Hapus</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
            <div class="text-muted small">
                Menampilkan <span class="fw-bold">{{ $pahlawans->firstItem() }}</span> - 
                <span class="fw-bold">{{ $pahlawans->lastItem() }}</span> dari 
                <span class="fw-bold">{{ $pahlawans->total() }}</span> pahlawan
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
            <h4 class="mb-3 text-primary">Belum Ada Data Pahlawan</h4>
            <p class="text-muted mb-4">Mulailah dengan menambahkan data pahlawan pertama Anda</p>
            <a href="{{ route('pahlawans.create') }}" class="btn btn-warning">
                <i class="fas fa-plus-circle"></i> Tambah Pahlawan Pertama
            </a>
        </div>
        @endif
    </div>
</div>

<style>
.table {
    table-layout: fixed;
    width: 100%;
}

td:last-child {
    white-space: normal;   /* boleh turun baris */
    overflow: visible;
    text-overflow: unset;
}
td:last-child .d-flex {
    flex-wrap: wrap;
    gap: 6px;
}



    /* Additional styles for dashboard */
    .number-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        box-shadow: 0 4px 8px rgba(13, 71, 161, 0.3);
        font-size: 0.9rem;
    }
    
    .avatar-circle {
        width: 60px;
        height: 60px;
        min-width: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary-blue), var(--color-secondary-blue));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        overflow: hidden;
        border: 3px solid var(--color-primary-yellow);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    
    .avatar-circle .avatar-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .avatar-fallback {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .jasa-text {
        line-height: 1.5;
        font-size: 0.9rem;
        color: var(--color-text-dark);
    }
    
    .btn-read-more {
        text-decoration: none !important;
        font-weight: 500;
        cursor: pointer;
    }
    
    .btn-read-more:hover {
        text-decoration: underline !important;
    }
    
    /* UNIFORM IMAGE CONTAINER - SEMUA GAMBAR SAMA UKURAN */
    .image-container {
        position: relative;
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border: 2px solid var(--color-border);
        background-color: var(--color-light-bg);
    }
    
    .uniform-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s ease;
    }
    
    .image-container:hover .uniform-img {
        transform: scale(1.05);
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 10px;
    }
    
    .image-container:hover .image-overlay {
        opacity: 1;
    }
    
    .view-btn {
        color: white;
        font-size: 1.1rem;
        background: rgba(255, 255, 255, 0.2);
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .view-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
        color: var(--color-primary-yellow);
    }
    
    .no-image {
        width: 120px;
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--color-text-light);
        border: 2px dashed var(--color-border);
        border-radius: 12px;
        background-color: rgba(227, 242, 253, 0.5);
    }
    
    .no-image-icon {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        color: var(--color-accent-blue);
        opacity: 0.7;
    }
    
    .region-badge {
        padding: 0.4rem 0.8rem;
        background-color: rgba(227, 242, 253, 0.8);
        border-radius: 20px;
        color: var(--color-primary-blue);
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        border: 1px solid var(--color-border);
    }
    
    .btn-action {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
        border-radius: 8px;
        min-width: 40px;
        justify-content: center;
    }
    
    .badge {
        padding: 0.4rem 0.8rem;
        font-weight: 600;
        font-size: 0.85rem;
    }
    
    /* Modal untuk teks lengkap */
    .full-text-modal .modal-content {
        border-radius: 15px;
        border: 2px solid var(--color-primary-yellow);
    }
    
    .full-text-modal .modal-header {
        background: linear-gradient(90deg, var(--color-primary-blue), var(--color-secondary-blue));
        color: white;
        border-radius: 13px 13px 0 0;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .table-responsive {
            border-radius: 10px;
        }
        
        .table thead {
            display: none;
        }
        
        .table tbody tr {
            display: block;
            margin-bottom: 1.5rem;
            border: 1px solid var(--color-border);
            border-radius: 10px;
            padding: 1rem;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        .table tbody td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid var(--color-border);
        }
        
        .table tbody td:last-child {
            border-bottom: none;
        }
        
        .table tbody td::before {
            content: attr(data-label);
            font-weight: 600;
            color: var(--color-primary-blue);
            min-width: 120px;
        }
        
        .table tbody td[data-label="Gambar"] {
            justify-content: center;
        }
        
        .table tbody td[data-label="Aksi"] {
            justify-content: center;
        }
        
        .image-container, .no-image {
            width: 100px;
            height: 100px;
        }
        
        .avatar-circle {
            width: 50px;
            height: 50px;
        }
        
        .btn-action span {
            display: none;
        }
        
        .btn-action {
            min-width: 36px;
            height: 36px;
            padding: 0.3rem;
        }
    }
</style>

<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Tambah data-label untuk responsive table
        if (window.innerWidth <= 768) {
            document.querySelectorAll('tbody td').forEach(function(td, index) {
                const labels = ['No', 'Nama Pahlawan', 'Daerah Asal', 'Jasa & Perjuangan', 'Gambar', 'Aksi'];
                if (labels[index % 6]) {
                    td.setAttribute('data-label', labels[index % 6]);
                }
            });
        }
    });
    
    // Function untuk menampilkan teks lengkap
    function showFullText(button, fullText) {
        // Buat modal untuk menampilkan teks lengkap
        const modalId = 'fullTextModal';
        let modal = document.getElementById(modalId);
        
        if (!modal) {
            modal = document.createElement('div');
            modal.className = 'modal fade full-text-modal';
            modal.id = modalId;
            modal.innerHTML = `
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Jasa & Perjuangan Lengkap</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="full-text-content" style="white-space: pre-line; line-height: 1.6; font-size: 1.05rem;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(modal);
        }
        
        // Isi konten modal
        modal.querySelector('.full-text-content').textContent = fullText;
        
        // Tampilkan modal
        const modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
    }
</script>

<!-- Bootstrap Modal untuk Full Text (akan dibuat secara dinamis) -->
@endsection