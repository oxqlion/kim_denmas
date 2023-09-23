@extends('components.parent')

@section('content')
<div>
    @foreach ($stokUmkm as $stok)
        <h1>{{ $stok->umkm_name }}</h1>
    @endforeach
</div>
@endsection