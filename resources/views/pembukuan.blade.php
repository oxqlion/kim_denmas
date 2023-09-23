@extends('components.parent')

@section('content')
    <div class="container p-5 ms-auto">
        <div class="row p-0">
            <div class="col-md-3">
                <div class="list-group">
                    @foreach ($allUmkm as $umkm)
                        <a href="{{ route('get-pemasukan', ['id' => $umkm->id]) }}"
                            class="list-group-item list-group-item-action">{{ $umkm->nama }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <div class="overflow-y-scroll" style="max-height: 400px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembukuanUmk as $buku)
                                <tr>
                                    <td>{{ $buku->created_at }}</td>
                                    <td>{{ $buku->nama }}</td>
                                    <td>{{ $buku->jumlah }}</td>
                                    <td>{{ $buku->harga }}</td>
                                    <td>{{ $buku->total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-left d-flex my-4 w-25 gap-3">
                    <a class="btn btn-primary"
                        href="{{ route('get-pemasukan', ['id' => Route::current()->parameter('id') ? Route::current()->parameter('id') : 1]) }}">Pemasukan</a>
                    <a class="btn btn-secondary"
                        href="{{ route('get-pengeluaran', ['id' => Route::current()->parameter('id') ? Route::current()->parameter('id') : 1]) }}">Pengeluaran</a>
                </div>
            </div>
            <div class="col">
                <h1>Input Transaksi</h1>
                <form action="{{ route('store-transaction', ['id' => Route::current()->parameter('id') ? Route::current()->parameter('id') : 1]) }}" method="POST">
                    @csrf <!-- Add a CSRF token for security -->
                    <input type="hidden" name="umkm_id" value="{{ Route::current()->parameter('id') }}">
                    <div class="form-group">
                        <label for="transaction_type">Input Transaksi</label>
                        <select class="form-control" id="transaction_type" name="category">
                            <option value="Pemasukan" selected>Pemasukan</option>
                            <option value="Pengeluaran">Pengeluaran</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan nama produk" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah"
                            placeholder="Masukkan jumlah produk" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga"
                            placeholder="Masukkan harga produk" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>
@endsection
