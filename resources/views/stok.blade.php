@extends('components.parent')

@section('content')
<div>
    {{-- @php
        var_dump($stokWithUMKM);
    @endphp --}}
    @foreach ($stokWithUMKM as $umkm)
        <h1>{{ $umkm->umkm_name }}</h1>
    @endforeach
</div>
@endsection