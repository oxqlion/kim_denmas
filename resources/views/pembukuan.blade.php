@extends('components.parent')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col m-4">
                <div class="col m-4 d-flex">
                    <table class="table table-bordered">
                        <div class="list-group">
                            @foreach ($allUmkm as $umkm)
                                <a href="#"
                                    class="list-group-item list-group-item-action {{ $umkm->nama == 'dummy1' ? 'active' : '' }}">{{ $umkm->nama }}</a>
                            @endforeach
                        </div>
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Total</th>
                        </tr>
                        @foreach ($pembukuanUmk as $buku)
                            <tr>
                                <td>{{ $buku->nama }}</td>
                                <td>{{ $buku->jumlah }}</td>
                                <td>{{ $buku->harga }}</td>
                                <td>{{ $buku->total }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
