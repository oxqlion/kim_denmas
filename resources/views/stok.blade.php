@extends('components.parent')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col m-4">
                    <div class="list-group">
                        @foreach ($listUmkm as $umkm)
                            <a href="#"
                                class="list-group-item list-group-item-action {{ ($umkm->nama == $stokUmkm as umkm->nama )? 'active' : '' }}">{{ $umkm->nama }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col m-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stokUmkm as $umkm)
                                <tr>
                                    <td>{{ $umkm->nama }}</td>
                                    <td>{{ $umkm->tipe }}</td>
                                    <td>{{ $umkm->jumlah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection