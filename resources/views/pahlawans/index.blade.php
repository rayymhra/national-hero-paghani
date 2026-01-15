@extends('layouts.app')

@section('title', 'Data Pahlawan Indonesia')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Daftar Pahlawan Indonesia</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('pahlawans.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Pahlawan Baru
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pahlawan</th>
                        <th>Daerah</th>
                        <th>Jasa</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pahlawans as $pahlawan)
                    <tr>
                        <td>{{ $loop->iteration + ($pahlawans->currentPage() - 1) * $pahlawans->perPage() }}</td>
                        <td>{{ $pahlawan->nama_pahlawan }}</td>
                        <td>{{ $pahlawan->daerah }}</td>
                        <td>{{ Str::limit($pahlawan->jasa, 50) }}</td>
                        <td>
                            @if($pahlawan->gambar)
                                <img src="{{ asset($pahlawan->gambar) }}" alt="{{ $pahlawan->nama_pahlawan }}" 
                                     class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('pahlawans.show', $pahlawan) }}" class="btn btn-info btn-sm">
                                    Detail
                                </a>
                                <a href="{{ route('pahlawans.edit', $pahlawan) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <form action="{{ route('pahlawans.destroy', $pahlawan) }}" method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Belum ada data pahlawan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $pahlawans->links() }}
        </div>
    </div>
</div>
@endsection