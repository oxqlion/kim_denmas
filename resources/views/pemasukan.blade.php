@extends('components.parent')

@section('content')
    <div class="container p-5">
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
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembukuanUmk as $buku)
                                <tr>
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
        </div>
    </div>
@endsection
