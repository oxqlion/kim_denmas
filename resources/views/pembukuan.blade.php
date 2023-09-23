@extends('components.parent')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col m-5">
                <table class="table table-hover-bordered">
                    @foreach ($pembukuanWithUMKM as $umkm)
                        <div class="list-group">
                            <a href="{{ route('pembukuan-admin', ['id' => $umkm->id]) }}">{{ $umkm->umkm_name }}</a>
                        </div>
                    @endforeach
                </table>
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
                        @foreach ($pembukuanWithUMKM as $buku)
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
