@extends('components.parent')

@section('content')
<div>
    @foreach ($stokUmkm as $stok)
        <h1>{{ $stok->umkm_name }}</h1>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col m-5">
                <div class="list-group">
                    @foreach ($stokUmkm as $umkm)
                    <a href="#" class="list-group-item list-group-item-action {{ ($umkm->nama == "dummy1")? "active":"" }}">{{ $umkm->nama }}</a>
                    @endforeach
                    
                  </div>
            </div>
    
            <div class="col">
    
            </div>
        </div>
    </div>
</div>
@endsection