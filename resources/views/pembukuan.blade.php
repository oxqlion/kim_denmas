@extends('components.parent')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col m-5">
                <div class="list-group">
                    {{-- @php
                    var_dump($pembukuanWithUMKM);
                @endphp --}}
                    @foreach ($pembukuanWithUMKM as $buku)
                        <a href="#"
                            class="list-group-item list-group-item-action {{ $buku == 'dummy1' ? 'active' : '' }}">{{ $buku->nama }}</a>
                    @endforeach

                </div>
            </div>

            <div class="col">

            </div>
        </div>
    </div>
@endsection
