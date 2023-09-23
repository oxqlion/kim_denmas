@extends('components.parent')

@section('content')
<div>
    @foreach ($stokWithUMKM as $umkm)
        <h1>{{ $umkm->umkm_name }}</h1>
    @endforeach
</div>
@endsection