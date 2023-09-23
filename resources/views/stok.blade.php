@extends('components.parent')

@section('content')
<div>
    @foreach ($stokWithUMKM as $umkm)
        <h1>{{ $umkm->umkm_name }}</h1>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col m-5">
                <div class="list-group">
                    @foreach ($stokWithUMKM as $umkm)
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