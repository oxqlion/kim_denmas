@extends('components.parent')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col m-5">
                <div class="list-group">
                    @foreach ($listUmkm as $umkm)
                        <a href="#"
                            class="list-group-item list-group-item-action {{ $umkm->nama == 'dummy1' ? 'active' : '' }}">{{ $umkm->nama }}</a>
                    @endforeach

                </div>
            </div>
            <div class="col">
                <div class="overflow">

                    <table class="table table-hover-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>Kuantitas</td>
                            <td>Harga</td>
                            <td>Total</td>
                        </tr>
                        @foreach ($pembukuankWithUMKM as $buku)
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
