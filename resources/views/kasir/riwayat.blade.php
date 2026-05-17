@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Riwayat Transaksi</h2>
            <a href="{{ route('kasir.index') }}" class="btn btn-primary">+ Transaksi Baru</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Kode Transaksi</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Bayar</th>
                                <th>Kembalian</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transaksi as $index => $trx)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><span class="badge bg-primary">{{ $trx->kode_transaksi }}</span></td>
                                    <td>{{ $trx->tanggal->format('d/m/Y H:i') }}</td>
                                    <td>Rp. {{ number_format($trx->total, 0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($trx->bayar, 0, ',', '.') }}</td>
                                    <td>Rp. {{ number_format($trx->kembalian, 0, ',', '.') }}</td>
                                    <td><span class="badge bg-success">{{ $trx->status }}</span></td>
                                    <td>
                                        <a href="{{ route('kasir.detail', $trx->id) }}" class="btn btn-sm btn-info text-white">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">Belum ada transaksi</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{ $transaksi->links() }}
            </div>
        </div>
    </div>
@endsection